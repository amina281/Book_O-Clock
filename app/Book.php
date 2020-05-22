<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Book extends Model
{

    protected $fillable = ['ISBN', 'Title', 'PageNum', 'Price', 'Published', 'Description', 'slug'];

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }

}
