<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    protected $fillable=[
        'reg_no',
        'paid_by',
        'class',
        'payment_mode',
        'mpesa_code',
        'bank_slip_code',
        'amount',
        'served_by',
    ];
}
