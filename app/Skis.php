<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skis extends Model
{
    protected $fillable =[
        'brand',
        'model',
        'type',
        'length',
        'rentalprice'
    ];
}
