<?php

namespace App\Model\Customer;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Customer extends Authenticatable
{
    protected $fillable = [
        'name','phone', 'email', 'password', 'country', 'street', 'city', 'postcode',
    ];
}
