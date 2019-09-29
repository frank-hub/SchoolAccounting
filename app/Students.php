<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = [
        'fname','lname','adm_date','reg_name',
        'class','gender'
    ];
}
