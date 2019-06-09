<?php

namespace App;
use App\Media;
use App\Cat;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function media()
    {
       return $this->hasOne(Media::class);
    }
    public function cat()
    {
        return $this->belongsTo(Cat::class);
    }
}
