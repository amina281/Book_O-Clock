<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $guarded = [];

    protected $table = 'category';

    protected $fillable = ['name', 'Description', 'slug'];

    public function Books()
    {
        return $this->belongsToMany('App\Book');
    }
}
