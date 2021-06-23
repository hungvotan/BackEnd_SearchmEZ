<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'id',
        'userId',
        'listing',
        'list',
        'template',
        'slug',
        'type',
        'description',
        'title'
    ];
}
