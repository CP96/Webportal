<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skiboots extends Model
{
    protected $fillable =[
        'brand',
        'model',
        'type',
        'mondopoint',
        'rentalprice'
    ];
}
