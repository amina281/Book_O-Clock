<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddToBookshelf extends Model
{
    protected $fillable = ['id', 'book-id', 'name'];

    public function books()
    {
        return $this->hasMany('App\Book');
    }
}
