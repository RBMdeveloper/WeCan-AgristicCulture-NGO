<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Donation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function dashboardView(Request $request)
    {
        // Stats Cards
        $stats = [
            'total_donations'  => Donation::count(),
            'total_paid'       => Donation::where('status', 'paid')->count(),
            'total_failed'     => Donation::where('status', 'failed')->count(),
            'total_amount'     => Donation::where('status', 'paid')->sum('donation_amount'),
            'today_amount'     => Donation::where('status', 'paid')
                                    ->whereDate('created_at', Carbon::today())
                                    ->sum('donation_amount'),
            'this_month'       => Donation::where('status', 'paid')
                                    ->whereMonth('created_at', Carbon::now()->month)
                                    ->whereYear('created_at', Carbon::now()->year)
                                    ->sum('donation_amount'),
        ];

        // Base Query
        $query = Donation::latest();

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by date range
        if ($request->filled('from_date')) {
            $query->whereDate('created_at', '>=', $request->from_date);
        }
        if ($request->filled('to_date')) {
            $query->whereDate('created_at', '<=', $request->to_date);
        }

        // Search by name, phone, email
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('donor_name',  'like', "%{$search}%")
                  ->orWhere('donor_phone', 'like', "%{$search}%")
                  ->orWhere('donor_email', 'like', "%{$search}%")
                  ->orWhere('receipt_number', 'like', "%{$search}%");
            });
        }

        $donations = $query->paginate(15)->withQueryString();

        return view('admin.dashboard', compact('donations', 'stats'));
    }


    public function destroy($id)
    {
        $donation = Donation::findOrFail($id);
        $donation->delete();

        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'Donation record deleted successfully.');
    }




    public function changePasswordForm()
    {
        return view('admin.change_password');
    }

    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'current_password' => ['required', 'string'],
            'new_password' => ['required', 'string', 'min:8', 'same:confirm_password'],
        ]);

        $user = Admin::where('id',1)->first();
        
        if(Hash::check($request->input('current_password'), $user->password)){  
            Admin::where('id',1)->update([
            'password'=>Hash::make($request->input('new_password')),
            ]);
            return redirect()->back()->with('message','Password Changed Successfully');
        }else{
            return redirect()->back()->with('error','Sorry Current Password Does Not Correct');
        }
    }
}
