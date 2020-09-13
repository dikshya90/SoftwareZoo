<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Category;
use App\Model\Admin\Mammal;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Input;
use Image;

class MammalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Gate::allows('mammal-view')){
            return abort(401);
        }
        return view('admin.mammal.index')->with('mammals', Mammal::all())
                                            ->with('categories', Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::allows('mammal-add')){
            return view('admin.mammal.create')->with('category', Category::all());
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
        if(!Gate::allows('mammal-add')){
            return abort(401);
        }

        $data = $request->all();

        $mammal = new Mammal;

        $mammal->category_id = $data['category'];
        $mammal->name = $data['name'];
        $mammal->given_name = $data['given_name'];
        $mammal->dob = $data['dob'];
        $mammal->life_span = $data['life_span'];
        $mammal->diet = $data['diet'];
        $mammal->gender = $data['gender'];
        $mammal->habitat = $data['habitat'];
        $mammal->global_population = $data['global_population'];
        $mammal->date_joined = $data['date_joined'];
        $mammal->height = $data['height'];
        $mammal->weight = $data['weight'];
        $mammal->gestation = $data['gestation'];
        $mammal->temperature = $data['temperature'];

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

                $mammal->image = $imgFileName;

            }
        }

        $mammal->status = $status;

        $mammal->save();
        // $request->session()->flash('success', 'Created successfully');
        return redirect()->route('mammal.index')->with('message','Mammal Created Successfully!');

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
        if(!Gate::allows('mammal-edit')){
            return abort(401);
        }
        return view('admin.mammal.edit')->with('mammals', Mammal::findOrFail($id))
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
        if(!Gate::allows('mammal-edit')){
            return abort(401);
        }

        $mammalData = $request->all();

        if(empty($mammalData['status'])){
            $status='0';
        }else{
            $status='1';
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
        else if(!empty($mammalData['current_image'])){
            $imgFileName = $mammalData['current_image'];
        }
        else{
            $imgFileName = '';
        }
        Mammal::where(['id' => $id])->update([
            'name' => $mammalData['name'],
            'category_id' => $mammalData['category'],
            'given_name' => $mammalData['given_name'],
            'dob' => $mammalData['dob'],
            'life_span' => $mammalData['life_span'],
            'diet' => $mammalData['diet'],
            'gender' => $mammalData['gender'],
            'habitat' => $mammalData['habitat'],
            'global_population' => $mammalData['global_population'],
            'date_joined' => $mammalData['date_joined'],
            'height' => $mammalData['height'],
            'weight' => $mammalData['weight'],
            'gestation' => $mammalData['gestation'],
            'temperature' => $mammalData['temperature'],
            'image' => $imgFileName,
            'status' => $status,
        ]);

        // Session::flash('success', 'Painting Updated!');

        return redirect()->route('mammal.index')->with('message', 'Mammal Information Updated Successfully!');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Gate::allows('mammal-delete')){
            return abort(401);
        }
        Mammal::find($id)->delete();
        return redirect()->route('mammal.index')->with('message', 'Mammal trashed');
    }


    public function trashed(){

        if (!Gate::allows('mammal-view')) {
            return abort(401);
        }
        $mammals = Mammal::onlyTrashed()->get();

        return view('admin.mammal.trashed')->with('mammals', $mammals);

    }

    public function killTrashed($id)
    {
        if (!Gate::allows('mammal-view')) {
            return abort(401);
        }
        Mammal::withTrashed()->where('id', $id)->first()->forceDelete();

        // Session::flash('success', 'Permission Permanently Deleted!!!');
        return redirect()->back()->with('message', 'Record Deleted Permanently');
    }

    public function restoreTrashed($id)
    {
        if (!Gate::allows('mammal-view')) {
            return abort(401);
        }
        Mammal::withTrashed()->where('id', $id)->first()->restore();

        // Session::flash('success', 'Permission restored successfully!!!');
        return redirect()->route('mammal.index')->with('message','Record Restored');
    }
}
