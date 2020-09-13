<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Category;
use App\Model\Admin\Fish;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Input;
use Image;

class FishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Gate::allows('fish-view')){
            return abort(401);
        }
        return view('admin.fish.index')->with('fish', Fish::all())
                                            ->with('categories', Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::allows('fish-add')){
            return view('admin.fish.create')->with('category', Category::all());
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

        $fish = new Fish;

        $fish->category_id = $data['category'];
        $fish->name = $data['name'];
        $fish->given_name = $data['given_name'];
        $fish->dob = $data['dob'];
        $fish->life_span = $data['life_span'];
        $fish->diet = $data['diet'];
        $fish->gender = $data['gender'];
        $fish->habitat = $data['habitat'];
        $fish->global_population = $data['global_population'];
        $fish->date_joined = $data['date_joined'];
        $fish->height = $data['height'];
        $fish->weight = $data['weight'];
        $fish->temperature = $data['temperature'];
        $fish->water_type = $data['water_type'];
        $fish->color = $data['color'];

        if(empty($data['status'])){
            $status = '0';
        }
        else{
            $status = '1';
        }

        if($request->hasFile('image')){
            $image = Input::file('image');

            if($image->isValid()){
                $imgExtension = $image->getClientOriginalExtension();

                $imgFileName = rand(111,99999). '.' .$imgExtension;

                $img_path = 'admin/images/animals'. '/' .$imgFileName;

                Image::make($image)->save($img_path);

                $fish->image = $imgFileName;

            }
        }

        $fish->status = $status;

        $fish->save();
        // $request->session()->flash('success', 'Created successfully');
        return redirect()->route('fish.index')->with('message','Fish Added Successfully!');

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
        if(!Gate::allows('fish-edit')){
            return abort(401);
        }
        return view('admin.fish.edit')->with('fish', Fish::findOrFail($id))
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
        if(!Gate::allows('fish-edit')){
            return abort(401);
        }

        $fishData = $request->all();

        if(empty($fishData['status'])){
            $status='0';
        }else{
            $status='1';
        }

        if($request->hasFile('image')){
            $image = Input::file('image');

            if($image->isValid()){
                $imgExtension = $image->getClientOriginalExtension();

                $imgFileName = rand(111,99999). '.' .$imgExtension;

                $img_path = 'admin/images/animals'. '/' .$imgFileName;

                Image::make($image)->save($img_path);

            }
        }
        else if(!empty($fishData['current_image'])){
            $imgFileName = $fishData['current_image'];
        }
        else{
            $imgFileName = '';
        }

        Fish::where(['id' => $id])->update([
            'name' => $fishData['name'],
            'category_id' => $fishData['category'],
            'given_name' => $fishData['given_name'],
            'dob' => $fishData['dob'],
            'life_span' => $fishData['life_span'],
            'diet' => $fishData['diet'],
            'gender' => $fishData['gender'],
            'habitat' => $fishData['habitat'],
            'global_population' => $fishData['global_population'],
            'date_joined' => $fishData['date_joined'],
            'height' => $fishData['height'],
            'weight' => $fishData['weight'],
            'temperature' => $fishData['temperature'],
            'water_type' => $fishData['water_type'],
            'color' => $fishData['color'],
            'image' => $imgFileName,
            'status' => $status,

        ]);

        // Session::flash('success', 'Painting Updated!');

        return redirect()->route('fish.index')->with('message', 'Fish Record Updated Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Gate::allows('fish-delete')){
            return abort(401);
        }
        Fish::find($id)->delete();
        return redirect()->route('fish.index')->with('message', 'Fish Record trashed');
    }

    public function trashed(){

        if (!Gate::allows('fish-view')) {
            return abort(401);
        }
        $fish = Fish::onlyTrashed()->get();

        return view('admin.fish.trashed')->with('fish', $fish);

    }

    public function killTrashed($id)
    {
        if (!Gate::allows('fish-view')) {
            return abort(401);
        }
        Fish::withTrashed()->where('id', $id)->first()->forceDelete();

        // Session::flash('success', 'Permission Permanently Deleted!!!');
        return redirect()->back()->with('message', 'Record Deleted Permanently');
    }

    public function restoreTrashed($id)
    {
        if (!Gate::allows('fish-view')) {
            return abort(401);
        }
        Fish::withTrashed()->where('id', $id)->first()->restore();

        // Session::flash('success', 'Permission restored successfully!!!');
        return redirect()->route('fish.index')->with('message','Trashed Record Restored');
    }

}
