<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddToBookshelf extends Model
{
    protected $fillable = ['book-id', 'name'];

    public function books()
    {
        return $this->hasMany('App\Book');
    }
}
