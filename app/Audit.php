<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    protected $fillable=[
        'bid',
        'pid',
        'category',
        'subcategory',
        'title',
        'description',
        'image',
        'price',
        'status',
    ];
}
