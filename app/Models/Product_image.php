<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'product_image';

    protected $fillable = [
        'id',
        'product_id',
        'type',
        'url'
    ];
}
