<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable=[
        'bid',
        'pid',
        'category',
        'subcategory',
        'title',
        'description',
        'image',
        'quantity',
    ];
}
