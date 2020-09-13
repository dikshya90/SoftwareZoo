<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Bird;
use App\Model\Admin\Fish;
use App\Model\Admin\Mammal;
use App\Model\Admin\Reptiles;

class SingleAnimalController extends Controller
{
    public function mammal($id){

        $mammalDetail = Mammal::find($id);
        $relatedMammal= Mammal::inRandomOrder()->where('id','!=',$id)->where(['category_id' => $mammalDetail->category_id])->paginate(4);

        return view('frontend.single.mammalSingle')->with(['mammalDetail' => $mammalDetail])
                                                    ->with(['relatedMammal' => $relatedMammal]);
    }

    public function reptile($id){

        $reptileDetail = Reptiles::find($id);
        $relatedReptile= Reptiles::inRandomOrder()->where('id','!=',$id)->where(['category_id' => $reptileDetail->category_id])->paginate(4);

        return view('frontend.single.reptileSingle')->with(['reptileDetail' => $reptileDetail])
                                                    ->with(['relatedReptile' => $relatedReptile]);

    }

    public function bird($id){

        $birdDetail = Bird::find($id);
        $relatedBird = Bird::inRandomOrder()->where('id','!=',$id)->where(['category_id' => $birdDetail->category_id])->paginate(4);

        return view('frontend.single.birdSingle')->with(['birdDetail' => $birdDetail])
                                                ->with(['relatedBird' => $relatedBird]);
    }

    public function fish($id){

        $fishDetail = Fish::find($id);
        $relatedFish = Fish::inRandomOrder()->where('id','!=',$id)->where(['category_id' => $fishDetail->category_id])->paginate(4);

        return view('frontend.single.fishSingle')->with(['fishDetail' => $fishDetail])
                                                ->with(['relatedFish' => $relatedFish]);
    }
}
