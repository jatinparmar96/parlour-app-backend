<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'shop_id',
        'name',
        'description',
        'cost',
        'charge'
    ];
}
