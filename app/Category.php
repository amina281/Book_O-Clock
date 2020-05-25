<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $guarded = [];

    protected $table = 'category';

    protected $fillable = ['Name', 'Description'];

    public function products()
    {
        return $this->belongsToMany('App\Book');
    }
}