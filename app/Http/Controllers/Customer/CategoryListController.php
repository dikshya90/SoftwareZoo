<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Bird;
use App\Model\Admin\Category;
use App\Model\Admin\Fish;
use App\Model\Admin\Mammal;
use App\Model\Admin\Paintings;
use App\Model\Admin\Reptiles;
use Illuminate\Support\Facades\DB;

class CategoryListController extends Controller
{
    public function index($id){

        // $categories = Category::with('paintings')->findOrFail($id);
        $mammals = Category::with('mammals')->findOrFail($id);
        $birds = Category::with('birds')->findOrFail($id);
        $fish = Category::with('fish')->findOrFail($id);
        $reptiles = Category::with('reptiles')->findOrFail($id);

        // $breadcrumb = "<a href='/'>Home</a> / <a href='".$categories->id."'>".$categories->name."</a>";

        return view('frontend.categoryListing')->with('category', Category::all())
                                                // ->with(['categories'=>$categories])
                                                ->with(['mammals' => $mammals])
                                                ->with(['birds' => $birds])
                                                ->with(['fish' => $fish])
                                                ->with(['reptiles' => $reptiles]);

                                                // ->with('allPaintings',Paintings::inRandomOrder()->where(['paintings.category_id'=>$categories->id]));
    }


    // for searching animals
    public function searchAnimals(Request $request){
        // if($request->isMethod('post')){
            // $data = $request->all();

            $animalSearch = $request->input(['animals']);

            // query for mammals
            $search_mammal = Mammal::where(function($query) use($animalSearch){
                $query->where('name', 'like', '%'.$animalSearch.'%')
                        ->orWhere('given_name', 'like', '%'.$animalSearch.'%')
                        ->orWhere('habitat', 'like', '%'.$animalSearch.'%');
                        // ->where('diet', 'like', '%'.$paintingSearch.'%');

            })->where('status', 1)->get();

            // search for birds
            $search_bird = Bird::where(function($query) use($animalSearch){
                $query->where('name', 'like', '%'.$animalSearch.'%')
                        ->orWhere('given_name', 'like', '%'.$animalSearch.'%')
                        ->orWhere('plumage_color', 'like', '%'.$animalSearch.'%');
                        // ->where('diet', 'like', '%'.$paintingSearch.'%');

            })->where('status', 1)->get();

            // search for fish
            $search_fish = Fish::where(function($query) use($animalSearch){
                $query->where('name', 'like', '%'.$animalSearch.'%')
                        ->orWhere('color', 'like', '%'.$animalSearch.'%')
                        ->orWhere('habitat', 'like', '%'.$animalSearch.'%');
                        // ->where('diet', 'like', '%'.$paintingSearch.'%');

            })->where('status', 1)->get();

            // search for reptiles and amphibians
            $search_reptiles = Reptiles::where(function($query) use($animalSearch){
                $query->where('name', 'like', '%'.$animalSearch.'%')
                        ->orWhere('given_name', 'like', '%'.$animalSearch.'%')
                        ->orWhere('habitat', 'like', '%'.$animalSearch.'%');
                        // ->where('diet', 'like', '%'.$paintingSearch.'%');

            })->where('status', 1)->get();

            return view('frontend.searchListing')->with(['search_mammal' => $search_mammal])
                                                    ->with(['search_bird' => $search_bird])
                                                    ->with(['search_fish' => $search_fish])
                                                    ->with(['search_reptiles' => $search_reptiles])
                                                    ->with(['animalSearch' => $animalSearch]);

    }
}
