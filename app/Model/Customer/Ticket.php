<?php

namespace App\Model\Customer;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'name', 'email', 'age_group', 'contact', 'total_ticket',
    ];
}
