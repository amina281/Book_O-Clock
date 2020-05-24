<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['Id', 'Authorname', 'Address', 'BookNumber', 'slug', 'imagePath'];

    protected $table = 'Author';
}
