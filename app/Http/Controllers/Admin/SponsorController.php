<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Customer\Sponsor;
use Illuminate\Support\Facades\Gate;

class SponsorController extends Controller
{
    public function viewSponsors(){

        if (!Gate::allows('sponsor-access'))
        {
            return abort(401);
        }
        return view('admin.sponsorAndTicket.sponsor')->with('sponsors', Sponsor::all());
    }

    public function sponsorDelete($id){
        if (!Gate::allows('sponsor-delete'))
        {
            return abort(401);
        }
        Sponsor::find($id)->delete();

        return redirect()->back()->with('message', 'Sponsor Request Deleted');
    }
}
