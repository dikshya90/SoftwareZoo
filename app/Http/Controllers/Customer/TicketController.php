<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketController extends Controller
{
    public function index(){

        return view('frontend.ticket.ticketForm');

    }

    public function sponsor(){

        return view('frontend.ticket.sponsorForm');

    }
}
