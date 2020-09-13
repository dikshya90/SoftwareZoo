<?php

namespace App\Http\Controllers;

use App\Model\Admin\Category;
use App\Model\Admin\Exhibition;
use App\Model\Admin\OfferComponents;
use App\Model\Admin\Offers;
use App\Model\Admin\Paintings;
use App\Model\Admin\Mammal;
use App\Model\Admin\Bird;
use App\Model\Admin\Fish;
use App\Model\Admin\Reptiles;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class IndexController extends Controller
{
    public function index(){

        $mammals = Mammal::inRandomOrder()->where('status', 1)->paginate(4);
        $birds = Bird::inRandomOrder()->where('status', 1)->paginate(4);
        $fish = Fish::inRandomOrder()->where('status', 1)->paginate(4);
        $reptiles = Reptiles::inRandomOrder()->where('status', 1)->paginate(4);

            // @dd($allPaintings);
            // @dd($mammals);
        return view('frontend.index')->with('category', Category::all())

                                        ->with('mammals', Mammal::inRandomOrder()->where('status', 1)->paginate(4))

                                        ->with(['birds' => $birds])
                                        ->with(['fish' =>  $fish])
                                        ->with(['reptiles' => $reptiles]);
    }

    // for terms and conditions
    public function terms(){
        return view('frontend.policies.terms');
    }

    public function privacy(){
        return view('frontend.policies.privacy');
    }

}
