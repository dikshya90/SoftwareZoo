<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Role;
use App\Model\Customer\Customer;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Gate::allows('user-view')){
            return abort(401);
        }
        return view('admin.user.index')->with('users', User::all()->where('role_id','!=',2))
                                        ->with('roles',Role::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::allows('user-add')){
            return view('admin.user.create')->with('roles', Role::all()->where('id', '!=', 2));
        }
        else{
            return abort(401);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!Gate::allows('user-add')){
            return abort(401);
        }
        $this -> validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'max:11'],
            'address' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // dd($request->role);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' =>$request->phone,
            'address' => $request->address,
            'password' => Hash::make($request->password),
            'role_id' => $request->role,
        ]);

        // Session::flash('success', "User Created Successfully");

        return redirect()->route('user.index')->with('message', 'User created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    // for listing customers
    public function list(){
        if(!Gate::allows('user-view')){
            return abort(401);
        }
        return view('admin.customer.list')->with('customers', Customer::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(! Gate::allows('user-edit')){
            return abort(401);
        }
        User::find($id);
        return view('admin.user.edit')->with('user',User::find($id))
                                        ->with('role', Role::all()->where('id', '!=', 2));;
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
        if(! Gate::allows('user-edit')){
            return abort(401);
        }
        $validation = $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::findOrFail($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' =>$request->phone,
            'address' => $request->address,
            'password' => Hash::make($request->password),
            'role_id' => $request->role,
        ]);
        // Session::flash('success', 'User Updated!');

        return redirect()->route('user.index')->with('message', 'user updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Gate::allows('user-delete')){
            return abort(401);
        }
        User::find($id)->delete();
        return redirect()->route('user.index')->with('message','user deleted from system');
    }

    // delete customer
    public function customerDelete($id)
    {
        if(!Gate::allows('user-delete')){
            return abort(401);
        }
        Customer::find($id)->forceDelete();
        return redirect()->route('user.list')->with('message', 'User Deleted Successfully');
    }
}
