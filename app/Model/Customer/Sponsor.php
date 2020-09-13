<?php

namespace App\Model\Customer;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $fillable = [
        'name', 'email', 'contact', 'country', 'city', 'street',
    ];
}
