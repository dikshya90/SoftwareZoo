<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Customer\Enquiry;
use App\Model\Customer\Sponsor;
use App\Model\Customer\Ticket;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if(!Gate::allows('enquiry-add')){
        //     return abort(401);
        // }

        $this -> validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'subject' => ['required', 'string', 'max:255'],
            'message' =>['required','string'],
        ]);

        // dd($request->name);

        Enquiry::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' =>$request->subject,
            'message' => $request->message,
        ]);

        return redirect()->route('contact.index')->with('message', 'Your Enquiries have been Delivered!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function sponsorSubmit(Request $request){
        $this -> validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'contact' => ['required', 'string', 'max:255'],
            'country' =>['required','string'],
            'city' =>['required','string'],
            'street' =>['required','string'],
        ]);

        // dd($request->name);

        Sponsor::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' =>$request->contact,
            'country' => $request->country,
            'city' => $request->city,
            'street' => $request->street,
        ]);

        return redirect()->back()->with('message', 'Your Information have been Submitted!');
    }

    public function ticketBooking(Request $request){

        Ticket::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' =>$request->contact,
            'age_group' => $request->age_group,
            'total_ticket' => $request->total_ticket,
            // 'street' => $request->street,
        ]);

        return view('frontend.thanks')->with('message', 'Ticket has been booked for you!');
    }
}
