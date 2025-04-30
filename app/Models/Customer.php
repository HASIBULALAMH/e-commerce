<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class customer extends Authenticatable
{
    protected $fillable=[
        'name',
        'email',
        'phone',
        'password',
    ];
}
