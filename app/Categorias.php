<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = 'categorias';
    protected $fillable = [
        'name',
        'description',
        'slug'
    ];
    protected $hidden = [];
    protected $casts = [];
}
