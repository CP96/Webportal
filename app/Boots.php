<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boots extends Model
{
    protected $fillable =[
        'brand',
        'model',
        'type',
        'mondopoint',
        'rentalprice'
    ];
}
