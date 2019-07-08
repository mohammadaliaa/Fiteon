<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = ['phone', 'email', 'mobile', 'fax', 'location', 'address_1', 'address_2', 'address_3'];
}