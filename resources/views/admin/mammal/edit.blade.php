@extends('layouts.admin')

@section('title', 'Edit Mammal')
@section('page-title', 'Edit Mammal')

@section('content')
    <!--Permission Create Box Starts Here-->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Edit Mammal</h3>
        </div>
        <div class="box-body">
            <!--Form Start-->
            <form action="{{route('mammal.update',['id'=>$mammals->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="{{$mammals->name}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Given Name</label>
                    <input type="text" id="given_name" name="given_name" value="{{$mammals->given_name}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control">
                        <option value="{{$mammals->category_id}}">{{$mammals->category->name}}</option>
                        @foreach ($categories as $category)
                            @if ($category->id != $mammals->category_id)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Date of Birth</label>
                    <input type="date" id="dob" name="dob" value="{{$mammals->dob}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Gender</label>
                    <select name="gender" id="gender" class="form-control" required="">
                        <option value="Male" @if($mammals->gender == "Male") selected @endif>Male</option>
                        <option value="Female" @if($mammals->gender == "Female") selected @endif>Female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Average Life Span</label>
                    <input type="text" id="life_span" name="life_span" value="{{$mammals->life_span}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Dietary Requirement</label>
                    <input type="text" id="diet" name="diet" value="{{$mammals->diet}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="habitat">Habitat</label>
                    <textarea name="habitat" id="habitat" cols="30" rows="6" class="form-control">{{$mammals->habitat}}</textarea>
                    {{-- <input type="longtext" id="name" name="name" class="form-control"> --}}
                </div>

                <div class="form-group">
                    <label for="date_joined">Date Joined</label>
                    <input type="date" id="date_joined" name="date_joined" value="{{$mammals->date_joined}}" class="form-control" required = "">
                    {{-- <input type="longtext" id="name" name="name" class="form-control"> --}}
                </div>

                <div class="form-group">
                    <label for="global_population">Global Population</label>
                    <input type="number" id="global_population" name="global_population" value="{{$mammals->global_population}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Height</label>
                    <input type="string" id="height" name="height" value="{{$mammals->height}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Weight</label>
                    <input type="string" id="weight" name="weight" value="{{$mammals->weight}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Gestational Period</label>
                    <input type="text" id="gestation" name="gestation" value="{{$mammals->gestation}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Average Body Temperature</label>
                    <input type="number" id="temperature" name="temperature" value="{{$mammals->temperature}}" class="form-control">
                </div>

                <div class="from-group">
                    <label for="iamge">Image</label>
                    <div class="controls">
                        <div id="uniform-undefined">
                            <table>
                                <tr>
                                    <td>
                                        <input name="image" id="image" type="file">
                                            @if(!empty($mammals->image))
                                                <input type="hidden" name="current_image" value="{{ $mammals->image }}">
                                            @endif
                                    </td>
                                    <td>
                                        @if(!empty($mammals->image))
                                            <img style="width:30%; height: 25%;" src="{{ asset('admin/images/animals/'.$mammals->image) }}">
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
                        <input type="checkbox" name="status" id="status" @if($mammals->status == "1") checked @endif value="1">
                        <h5>Yes</h5>
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div><!--Permission Create Form Ends Here-->
@endsection
