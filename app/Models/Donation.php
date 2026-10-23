<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donation extends Model
{



use HasFactory;

    protected $fillable = [
        'order_id',
        'payment_id',

        'donor_name',
        'donor_phone',
        'donor_company',

        'donation_amount',

        'donor_email',  

        'payment_method',
        'status',

        'receipt_number',
        'receipt_generated_at',
    ];

    protected $casts = [
        'receipt_generated_at' => 'datetime',
        'donation_amount'      => 'decimal:2',
    ];
}
