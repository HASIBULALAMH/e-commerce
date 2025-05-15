<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'password'
    ];
}
