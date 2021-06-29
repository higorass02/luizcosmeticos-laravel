<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'categoria_produto';
    protected $fillable = [
        '*'
    ];
    protected $hidden = [];
    protected $casts = [];

    public function categories()
    {
        return $this->belongsToMany(Categorias::class);
    }
}
