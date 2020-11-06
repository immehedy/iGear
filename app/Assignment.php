<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable =[
        'name',
        'email',
        'phone',
        'address',
        'device',
        'service_category',
        'date',
        'assigned_date',

        ];
}
