<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['Title', 'PageNum', 'Price', 'Published', 'Description', 'slug'];

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(6);
    }
}
