<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product_listing extends Model
{
    protected $table = 'product_listing';

    protected $fillable = [
        'id',
        'product_id',
        'asking_price',
        'googlemap',
        'location',
        'category',
        'age',
        'color',
        'weight',
        'length',
        'width',
        'height',
        'special_traits',
        'checkbox',
        'shipping_method',
        'shipping_fee',
        'include_question'
    ];
}
