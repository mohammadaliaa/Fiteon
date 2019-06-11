<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable = ['title', 'title_fa'];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
