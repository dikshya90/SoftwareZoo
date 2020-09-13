<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Category;
// use App\Model\Admin\ReptileAmphibians;
use App\Model\Admin\Reptiles;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Input;
use Image;

class ReptileAmphibianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Gate::allows('amphi-reptile-view')){
            return abort(401);
        }
        return view('admin.reptiles.index')->with('reptiles', Reptiles::all())
                                            ->with('categories', Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::allows('amphi-reptile-add')){
            return view('admin.reptiles.create')->with('category', Category::all());
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
        if(!Gate::allows('amphi-reptile-add')){
            return abort(401);
        }

        $data = $request->all();

        $reptile = new Reptiles;

        $reptile->category_id = $data['category'];
        $reptile->name = $data['name'];
        $reptile->given_name = $data['given_name'];
        $reptile->dob = $data['dob'];
        $reptile->life_span = $data['life_span'];
        $reptile->diet = $data['diet'];
        $reptile->gender = $data['gender'];
        $reptile->habitat = $data['habitat'];
        $reptile->global_population = $data['global_population'];
        $reptile->date_joined = $data['date_joined'];
        $reptile->height = $data['height'];
        $reptile->weight = $data['weight'];
        $reptile->reproduction_type = $data['reproduction_type'];
        $reptile->clutch = $data['clutch'];
        $reptile->offspring = $data['offspring'];

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

                $reptile->image = $imgFileName;

            }
        }

        $reptile->status = $status;

        $reptile->save();
        // $request->session()->flash('success', 'Created successfully');
        return redirect()->route('reptileAmphibian.index')->with('message','Created Successfully!');

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
        if(!Gate::allows('amphi-reptile-edit')){
            return abort(401);
        }
        return view('admin.reptiles.edit')->with('reptiles', Reptiles::findOrFail($id))
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
        if(!Gate::allows('amphi-reptile-edit')){
            return abort(401);
        }

        $reptileData = $request->all();

        if(empty($reptileData['status'])){
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
        else if(!empty($reptileData['current_image'])){
            $imgFileName = $reptileData['current_image'];
        }
        else{
            $imgFileName = '';
        }

        Reptiles::where(['id' => $id])->update([
            'name' => $reptileData['name'],
            'category_id' => $reptileData['category'],
            'given_name' => $reptileData['given_name'],
            'dob' => $reptileData['dob'],
            'life_span' => $reptileData['life_span'],
            'diet' => $reptileData['diet'],
            'gender' => $reptileData['gender'],
            'habitat' => $reptileData['habitat'],
            'global_population' => $reptileData['global_population'],
            'date_joined' => $reptileData['date_joined'],
            'height' => $reptileData['height'],
            'weight' => $reptileData['weight'],
            'clutch' => $reptileData['clutch'],
            'reproduction_type' => $reptileData['reproduction_type'],
            'offspring' => $reptileData['offspring'],
            'image' => $imgFileName,
            'status' => $status,
        ]);

        // Session::flash('success', 'Painting Updated!');

        return redirect()->route('reptileAmphibian.index')->with('message', 'Record Updated Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Gate::allows('amphi-reptile-delete')){
            return abort(401);
        }
        Reptiles::find($id)->delete();
        return redirect()->route('reptileAmphibian.index')->with('message', 'Reptile and Amphibians Record trashed');
    }

    public function trashed(){

        if (!Gate::allows('amphi-reptile-view')) {
            return abort(401);
        }
        $reptiles = Reptiles::onlyTrashed()->get();

        return view('admin.reptiles.trashed')->with('reptiles', $reptiles);

    }

    public function killTrashed($id)
    {
        if (!Gate::allows('amphi-reptile-view')) {
            return abort(401);
        }
        Reptiles::withTrashed()->where('id', $id)->first()->forceDelete();

        // Session::flash('success', 'Permission Permanently Deleted!!!');
        return redirect()->back()->with('message', 'Record Deleted Permanently');
    }

    public function restoreTrashed($id)
    {
        if (!Gate::allows('amphi-reptile-view')) {
            return abort(401);
        }
        Reptiles::withTrashed()->where('id', $id)->first()->restore();

        // Session::flash('success', 'Permission restored successfully!!!');
        return redirect()->route('reptileAmphibian.index')->with('message','Trashed Record Restored');
    }

}
