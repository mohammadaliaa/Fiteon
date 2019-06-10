<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['article_title','article_title_fa', 'article_des', 'article_des_fa'];
}
