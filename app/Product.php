<?php

namespace App;
use App\Cat;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'title_fa', 'des','des_fa','cat_id','image'];

    public function cat()
    {
        return $this->belongsTo(Cat::class);
    }
}
