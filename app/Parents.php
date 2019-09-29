<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $fillable = [
        'student_id','p_fname','p_lname','p_email','p_phone','id_no','p_occupation',
        'p1_fname','p1_lname','p1_email','p1_phone','id1_no','p1_occupation'
    ];
}
