@extends('layouts.admin')

@section('title', 'Edit Fish')
@section('page-title', 'Edit Fish Record')

@section('content')
    <!--Permission Create Box Starts Here-->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Edit Fish Details</h3>
        </div>
        <div class="box-body">
            <!--Form Start-->
            <form action="{{route('fish.update',['id'=>$fish->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="{{$fish->name}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Given Name</label>
                    <input type="text" id="given_name" name="given_name" value="{{$fish->given_name}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control">
                        <option value="{{$fish->category_id}}">{{$fish->category->name}}</option>
                        @foreach ($categories as $category)
                            @if ($category->id != $fish->category_id)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Date of Birth</label>
                    <input type="date" id="dob" name="dob" value="{{$fish->dob}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Gender</label>
                    <select name="gender" id="gender" class="form-control" required="">
                        <option value="Male" @if($fish->gender == "Male") selected @endif>Male</option>
                        <option value="Female" @if($fish->gender == "Female") selected @endif>Female</option>
                        <option value="Others" @if($fish->gender == "Others") selected @endif>Others</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Average Life Span</label>
                    <input type="text" id="life_span" name="life_span" value="{{$fish->life_span}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Dietary Requirement</label>
                    <input type="text" id="diet" name="diet" value="{{$fish->diet}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="habitat">Habitat</label>
                    <textarea name="habitat" id="habitat" cols="30" rows="6" class="form-control">{{$fish->habitat}}</textarea>
                    {{-- <input type="longtext" id="name" name="name" class="form-control"> --}}
                </div>

                <div class="form-group">
                    <label for="date_joined">Date Joined</label>
                    <input type="date" id="date_joined" name="date_joined" value="{{$fish->date_joined}}" class="form-control" required = "">
                    {{-- <input type="longtext" id="name" name="name" class="form-control"> --}}
                </div>

                <div class="form-group">
                    <label for="global_population">Global Population</label>
                    <input type="number" id="global_population" name="global_population" value="{{$fish->global_population}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Height</label>
                    <input type="string" id="height" name="height" value="{{$fish->height}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Weight</label>
                    <input type="string" id="weight" name="weight" value="{{$fish->weight}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Water Type</label>
                    <select name="water_type" id="water_type" class="form-control" required="">
                        <option value="Fresh" @if($fish->water_type == "Fresh") selected @endif>Fresh</option>
                        <option value="Salty" @if($fish->water_type == "Salty") selected @endif>Salty</option>
                        <option value="Luke Warm" @if($fish->water_type == "Luke Warm") selected @endif>Luke Warm</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="nest">Temperature</label>
                    <input type="number" id="temperature" name="temperature" value="{{$fish->temperature}}" class="form-control">
                    {{-- <textarea name="temperature" id="temperature" cols="30" rows="10" class="form-control">{{$fish->temperature}}</textarea> --}}
                </div>

                <div class="form-group">
                    <label for="color">Plumage Colour</label>
                    <input type="text" id="color" name="color" value="{{$fish->color}}" class="form-control" required = "">
                </div>

                <div class="from-group">
                    <label for="iamge">Image</label>
                    <div class="controls">
                        <div id="uniform-undefined">
                            <table>
                                <tr>
                                    <td>
                                        <input name="image" id="image" type="file">
                                            @if(!empty($fish->image))
                                                <input type="hidden" name="current_image" value="{{ $fish->image }}">
                                            @endif
                                    </td>
                                    <td>
                                        @if(!empty($fish->image))
                                            <img style="width:30%; height: 25%;" src="{{ asset('admin/images/animals/'.$fish->image) }}">
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
                        <input type="checkbox" name="status" id="status" @if($fish->status == "1") checked @endif value="1">
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div><!--Permission Create Form Ends Here-->
@endsection
