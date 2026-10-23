<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            // Razorpay Mapping
            $table->string('order_id')->nullable()->index();
            $table->string('payment_id')->nullable()->index();

            // Donor Info
            $table->string('donor_name');
            $table->string('donor_phone', 20);
            $table->string('donor_company')->nullable(); // Optional field
            
            // Amount
            $table->decimal('donation_amount', 10, 2);

            // Payment
            $table->string('payment_method')->nullable();
            $table->string('status')->default('created');
            // Status values: created | paid | failed

            // Receipt
            $table->string('receipt_number')->nullable()->unique();
            $table->timestamp('receipt_generated_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
