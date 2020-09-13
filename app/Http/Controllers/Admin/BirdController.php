<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Bird;
use App\Model\Admin\Category;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Input;
use Image;

class BirdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Gate::allows('bird-view')){
            return abort(401);
        }
        return view('admin.bird.index')->with('birds', Bird::all())
                                            ->with('categories', Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::allows('bird-add')){
            return view('admin.bird.create')->with('category', Category::all());
        }
        else
        {
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
        if(!Gate::allows('bird-add')){
            return abort(401);
        }

        $data = $request->all();

        $bird = new Bird;

        $bird->category_id = $data['category'];
        $bird->name = $data['name'];
        $bird->given_name = $data['given_name'];
        $bird->dob = $data['dob'];
        $bird->life_span = $data['life_span'];
        $bird->diet = $data['diet'];
        $bird->gender = $data['gender'];
        $bird->habitat = $data['habitat'];
        $bird->global_population = $data['global_population'];
        $bird->date_joined = $data['date_joined'];
        $bird->height = $data['height'];
        $bird->weight = $data['weight'];
        $bird->nest = $data['nest'];
        $bird->clutch = $data['clutch'];
        $bird->wingspan = $data['wingspan'];
        $bird->plumage_color = $data['plumage_color'];

        if(empty($data['status'])){
            $status = '0';
        }
        else{
            $status = '1';
        }

        if(empty($data['can_fly'])){
            $can_fly = 'No';
        }
        else{
            $can_fly = 'Yes';
        }

        if($request->hasFile('image')){
            $image = Input::file('image');

            if($image->isValid()){
                $imgExtension = $image->getClientOriginalExtension();

                $imgFileName = rand(111,99999). '.' .$imgExtension;

                $img_path = 'admin/images/animals'. '/' .$imgFileName;

                Image::make($image)->save($img_path);

                $bird->image = $imgFileName;

            }
        }

        $bird->status = $status;
        $bird->can_fly = $can_fly;

        $bird->save();
        // $request->session()->flash('success', 'Created successfully');
        return redirect()->route('bird.index')->with('message','Bird Created Successfully!');


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
        if(!Gate::allows('bird-edit')){
            return abort(401);
        }
        return view('admin.bird.edit')->with('birds', Bird::findOrFail($id))
                                            ->with('categories', Category::all());
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
        if(!Gate::allows('bird-edit')){
            return abort(401);
        }

        $birdData = $request->all();

        if(empty($birdData['status'])){
            $status='0';
        }else{
            $status='1';
        }

        if(empty($birdData['can_fly'])){
            $can_fly='No';
        }else{
            $can_fly='Yes';
        }

        // for editing image
        if($request->hasFile('image')){
            $image = Input::file('image');

            if($image->isValid()){
                $imgExtension = $image->getClientOriginalExtension();

                $imgFileName = rand(111,99999). '.' .$imgExtension;

                $img_path = 'admin/images/animals'. '/' .$imgFileName;

                Image::make($image)->save($img_path);

            }
        }
        else if(!empty($birdData['current_image'])){
            $imgFileName = $birdData['current_image'];
        }
        else{
            $imgFileName = '';
        }

        Bird::where(['id' => $id])->update([
            'name' => $birdData['name'],
            'category_id' => $birdData['category'],
            'given_name' => $birdData['given_name'],
            'dob' => $birdData['dob'],
            'life_span' => $birdData['life_span'],
            'diet' => $birdData['diet'],
            'gender' => $birdData['gender'],
            'habitat' => $birdData['habitat'],
            'global_population' => $birdData['global_population'],
            'date_joined' => $birdData['date_joined'],
            'height' => $birdData['height'],
            'weight' => $birdData['weight'],
            'nest' => $birdData['nest'],
            'clutch' => $birdData['clutch'],
            'wingspan' => $birdData['wingspan'],
            'plumage_color' => $birdData['plumage_color'],
            'image' => $imgFileName,
            'status' => $status,
            'can_fly' => $can_fly,
        ]);

        // Session::flash('success', 'Painting Updated!');

        return redirect()->route('bird.index')->with('message', 'Bird Record Updated Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Gate::allows('bird-delete')){
            return abort(401);
        }
        Bird::find($id)->delete();
        return redirect()->route('bird.index')->with('message', 'Bird Record trashed');
    }

    public function trashed(){

        if (!Gate::allows('bird-view')) {
            return abort(401);
        }
        $birds = Bird::onlyTrashed()->get();

        return view('admin.bird.trashed')->with('birds', $birds);

    }

    public function killTrashed($id)
    {
        if (!Gate::allows('bird-view')) {
            return abort(401);
        }
        Bird::withTrashed()->where('id', $id)->first()->forceDelete();

        // Session::flash('success', 'Permission Permanently Deleted!!!');
        return redirect()->back()->with('message', 'Record Deleted Permanently');
    }

    public function restoreTrashed($id)
    {
        if (!Gate::allows('bird-view')) {
            return abort(401);
        }
        Bird::withTrashed()->where('id', $id)->first()->restore();

        // Session::flash('success', 'Permission restored successfully!!!');
        return redirect()->route('bird.index')->with('message','Trashed Record Restored');
    }
}
