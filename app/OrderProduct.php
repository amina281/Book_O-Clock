<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table = 'Shopping_Cart_Items';

    protected $fillable = ['DocumentNo', 'product_id', 'quantity'];
}
