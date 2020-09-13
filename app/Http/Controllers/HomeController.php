<?php

namespace App\Http\Controllers;

use App\Model\Admin\Bird;
use App\Model\Admin\Fish;
use App\Model\Admin\Mammal;
use App\Model\Admin\Reptiles;
use App\Model\Customer\Cart;
use App\Model\Customer\Customer;
use App\Model\Customer\Order;
use App\Model\Customer\Sponsor;
use App\Model\Customer\Ticket;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $total_customer = Customer::all()->count();

        // $cart = Cart::all()->count();
        // $total_order = Order::all()->count();
        // $pending_order = Order::where('order_status','Pending')->count();
        // $shipped_order = Order::where('order_status', 'Shipped')->count();

        $user = User::all()->count();
        $mammal = Mammal::all()->count();
        $bird = Bird::all()->count();
        $fish = Fish::all()->count();
        $reptile = Reptiles::all()->count();
        $ticketBooking = Ticket::all()->count();
        $sponsorRequest = Sponsor::all()->count();
        return view('admin.dashboard')->with(['mammal'=>$mammal])
                                        ->with(['user'=> $user])
                                        ->with(['bird' => $bird])
                                        ->with(['fish'=>$fish])
                                        ->with(['reptile' => $reptile])
                                        ->with(['sponsorRequest' => $sponsorRequest])
                                        ->with(['ticketBooking' => $ticketBooking]);
    }
}
