<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'CustomerId', 'CustomerAddress', 'payment_id', 'city',
        'country', 'zip', 'subtotal', 'card_name', 'error',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function Books()
    {
        return $this->belongsToMany('App\Book')->withPivot('quantity');
    }

}
