<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $fillable = [
        'product_name','price','description', 'stock','weight',
    ];
    protected $guard = 'admin';
}
