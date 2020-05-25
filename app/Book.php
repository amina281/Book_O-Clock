<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;


class Book extends Model
{

    protected $fillable = ['ISBN', 'Title', 'PageNum', 'Price', 'Published', 'Description', 'slug'];

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }

    public function  comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function  addtobookshelf()
    {
        return $this->belongsToMany('App\AddToBookshelf');
    }

}
