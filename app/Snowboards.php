<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snowboards extends Model
{
    protected $fillable =[
        'brand',
        'model',
        'type',
        'length',
        'rentalprice'
    ];
}
