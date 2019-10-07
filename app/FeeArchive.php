<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeeArchive extends Model
{
    protected $fillable = [
        'class','student_name','date_invoice','payment_status','payment_method','fee_type',
        'fee_amount','paid_amount','balance'
    ];
}
