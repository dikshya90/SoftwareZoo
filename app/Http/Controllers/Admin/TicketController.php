<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Customer\Ticket;
use Illuminate\Support\Facades\Gate;

class TicketController extends Controller
{
    public function viewTickets(){

        if (!Gate::allows('ticket-access'))
        {
            return abort(401);
        }
        return view('admin.sponsorAndTicket.ticket')->with('tickets', Ticket::all());
    }

    public function ticketDelete($id){
        if (!Gate::allows('ticket-delete'))
        {
            return abort(401);
        }
        Ticket::find($id)->delete();

        return redirect()->back()->with('message', 'Ticket Record Deleted');
    }
}
