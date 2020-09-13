@extends('layouts.admin')

@section('title', 'Edit Reptile or Amphibian Records')
@section('page-title', 'Edit Reptile or Amphibian Records')

@section('content')
    <!--Permission Create Box Starts Here-->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Edit Reptile or Amphibian Records</h3>
        </div>
        <div class="box-body">
            <!--Form Start-->
            <form action="{{route('reptileAmphibian.update',['id'=>$reptiles->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="{{$reptiles->name}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Given Name</label>
                    <input type="text" id="given_name" name="given_name" value="{{$reptiles->given_name}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control">
                        <option value="{{$reptiles->category_id}}">{{$reptiles->category->name}}</option>
                        @foreach ($categories as $category)
                            @if ($category->id != $reptiles->category_id)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Date of Birth</label>
                    <input type="date" id="dob" name="dob" value="{{$reptiles->dob}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Gender</label>
                    <select name="gender" id="gender" class="form-control" required="">
                        <option value="Male" @if($reptiles->gender == "Male") selected @endif>Male</option>
                        <option value="Female" @if($reptiles->gender == "Female") selected @endif>Female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Average Life Span</label>
                    <input type="text" id="life_span" name="life_span" value="{{$reptiles->life_span}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Dietary Requirement</label>
                    <input type="text" id="diet" name="diet" value="{{$reptiles->diet}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="habitat">Habitat</label>
                    <textarea name="habitat" id="habitat" cols="30" rows="6" class="form-control">{{$reptiles->habitat}}</textarea>
                    {{-- <input type="longtext" id="name" name="name" class="form-control"> --}}
                </div>

                <div class="form-group">
                    <label for="date_joined">Date Joined</label>
                    <input type="date" id="date_joined" name="date_joined" value="{{$reptiles->date_joined}}" class="form-control" required = "">
                    {{-- <input type="longtext" id="name" name="name" class="form-control"> --}}
                </div>

                <div class="form-group">
                    <label for="global_population">Global Population</label>
                    <input type="number" id="global_population" name="global_population" value="{{$reptiles->global_population}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Height</label>
                    <input type="string" id="height" name="height" value="{{$reptiles->height}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Weight</label>
                    <input type="string" id="weight" name="weight" value="{{$reptiles->weight}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Reproduction Type</label>
                    <select name="reproduction_type" id="reproduction_type" class="form-control" required="">
                        <option value="Lay Eggs" @if($reptiles->reproduction_type == "Lay Eggs") selected @endif>Lay Eggs</option>
                        <option value="Livebearer" @if($reptiles->reproduction_type == "Livebearer") selected @endif>Livebearer</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="nest">Clutch Size</label>
                    <input type="string" id="clutch" name="clutch" value="{{$reptiles->clutch}}" class="form-control">
                    {{-- <textarea name="temperature" id="temperature" cols="30" rows="10" class="form-control">{{$reptiles->temperature}}</textarea> --}}
                </div>

                <div class="form-group">
                    <label for="nest">Average Offspering</label>
                    <input type="number" id="offspring" name="offspring" value="{{$reptiles->offspring}}" class="form-control">
                    {{-- <textarea name="temperature" id="temperature" cols="30" rows="10" class="form-control">{{$reptiles->temperature}}</textarea> --}}
                </div>

                <div class="from-group">
                    <label for="iamge">Image</label>
                    <div class="controls">
                        <div id="uniform-undefined">
                            <table>
                                <tr>
                                    <td>
                                        <input name="image" id="image" type="file">
                                            @if(!empty($reptiles->image))
                                                <input type="hidden" name="current_image" value="{{ $reptiles->image }}">
                                            @endif
                                    </td>
                                    <td>
                                        @if(!empty($reptiles->image))
                                            <img style="width:30%; height: 25%;" src="{{ asset('admin/images/animals/'.$reptiles->image) }}">
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Display In Front</label>
                    <div class="controls">
                        <input type="checkbox" name="status" id="status" @if($reptiles->status == "1") checked @endif value="1">
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div><!--Permission Create Form Ends Here-->
@endsection
