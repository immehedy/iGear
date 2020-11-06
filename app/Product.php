<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
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
      'quantity',
        'status',
    ];
}
