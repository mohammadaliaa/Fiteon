<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = ['phone', 'email', 'mobile', 'fax', 'lat','lng', 'address_1','address_1_fa', 'address_2','address_2_fa', 'address_3','address_3_fa','aboutus','aboutus_fa',];
}
