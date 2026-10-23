<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use App\Models\Donation;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class DonationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Create Razorpay Order + Save Donation
    |--------------------------------------------------------------------------
    */
    public function createOrder(Request $request)
    {
        $request->validate([
            'donor_name'      => 'required|string|max:255',
            'donor_phone'     => 'required|string|max:20',
            'donor_email'     => 'nullable|email|max:255',  
            'donor_company'   => 'nullable|string|max:255',
            'donation_amount' => 'required|numeric|min:1',
        ]);

        try {

            $api = new Api(
                env('RAZORPAY_KEY_ID'),
                env('RAZORPAY_KEY_SECRET')
            );

            $amountInPaisa = (int) ($request->donation_amount * 100);

           // TO THIS
$order = $api->order->create([
    'receipt'         => 'donation_' . time(),
    'amount'          => $amountInPaisa,
    'currency'        => 'INR',
    'payment_capture' => 1,   // auto capture
]);

            // Save donation record immediately with status = created
            $donation = Donation::create([
                'order_id'        => $order['id'],
                'donor_name'      => $request->donor_name,
                'donor_phone'     => $request->donor_phone,
                'donor_email'     => $request->donor_email ?? null,
                'donor_company'   => $request->donor_company ?? null,
                'donation_amount' => $request->donation_amount,
                'status'          => 'created',
            ]);

            return view('web.razorpay-checkout', [
                'orderId'  => $order['id'],
                'amount'   => $request->donation_amount,
                'donor'    => $donation,
                'key'      => env('RAZORPAY_KEY_ID'),
            ]);

        } catch (\Exception $e) {

            Log::error('Donation Order Create Failed: ' . $e->getMessage());

            return back()->with('error', 'Unable to initiate payment. Please try again.');
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Verify Payment Signature (Called after successful payment)
    |--------------------------------------------------------------------------
    */
    public function verifyPayment(Request $request)
    {
        $request->validate([
            'razorpay_order_id'   => 'required|string',
            'razorpay_payment_id' => 'required|string',
            'razorpay_signature'  => 'required|string',
        ]);

        $donation = Donation::where('order_id', $request->razorpay_order_id)->first();

        if (!$donation) {
            abort(404, 'Donation record not found.');
        }

        // Prevent double processing
        if ($donation->status === 'paid') {
            return redirect()->route('donation.receipt', $donation->order_id);
        }

        $signatureVerified = false;

        try {

            $api = new Api(
                env('RAZORPAY_KEY_ID'),
                env('RAZORPAY_KEY_SECRET')
            );

            $api->utility->verifyPaymentSignature([
                'razorpay_order_id'   => $request->razorpay_order_id,
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'razorpay_signature'  => $request->razorpay_signature,
            ]);

            $signatureVerified = true;

        } catch (\Exception $e) {
            Log::error('Donation Signature Verification Failed: ' . $e->getMessage());
        }

        if ($signatureVerified) {

            $donation->update([
                'payment_id'           => $request->razorpay_payment_id,
                'status'               => 'paid',
                'receipt_number'       => $this->generateReceiptNumber(),
                'receipt_generated_at' => Carbon::now(),
            ]);

        } else {

            // Signature tampered or invalid — mark failed
            if ($donation->status !== 'failed') {
                $donation->update([
                    'status'               => 'failed',
                    'receipt_number'       => $this->generateReceiptNumber(),
                    'receipt_generated_at' => Carbon::now(),
                ]);
            }
        }

        return redirect()->route('donation.receipt', $donation->order_id);
    }

    /*
    |--------------------------------------------------------------------------
    | Mark Failed — Called when user dismisses modal or payment fails
    |--------------------------------------------------------------------------
    */
    public function markFailed(Request $request, $orderId)
    {
        $donation = Donation::where('order_id', $orderId)->first();

        if (!$donation) {
            abort(404, 'Donation record not found.');
        }

        // IMPORTANT: Only mark failed if still in created state
        // Never overwrite a paid donation
        if ($donation->status === 'created') {
            $donation->update([
                'status'               => 'failed',
                'receipt_number'       => $this->generateReceiptNumber(),
                'receipt_generated_at' => Carbon::now(),
            ]);
        }

        return redirect()->route('donation.receipt', $donation->order_id);
    }

    /*
    |--------------------------------------------------------------------------
    | Receipt Page — Works for both paid and failed
    |--------------------------------------------------------------------------
    */
    public function receipt($orderId)
    {
        $donation = Donation::where('order_id', $orderId)->firstOrFail();

        return view('web.receipt', compact('donation'));
    }

    /*
    |--------------------------------------------------------------------------
    | Receipt Number Generator
    |--------------------------------------------------------------------------
    */
    private function generateReceiptNumber(): string
    {
        $year  = date('Y');
        $count = Donation::whereYear('created_at', $year)->count() + 1;

        return 'DON-' . $year . '-' . str_pad($count, 5, '0', STR_PAD_LEFT);
    }
}