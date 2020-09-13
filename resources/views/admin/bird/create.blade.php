@extends('layouts.admin')

@section('title', 'Add Bird')
@section('page-title', 'Add New Bird')

@section('content')
    <!--Permission Create Box Starts Here-->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Add Bird</h3>
        </div>
        <div class="box-body">
            <!--Form Start-->
            <form action="{{route('bird.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Given Name</label>
                    <input type="text" id="given_name" name="given_name" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category">
                        @foreach ($category as $catg)
                        {{-- @dd($component->permission_component) --}}
                            <option value="{{$catg->id}}">{{$catg->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Date of Birth</label>
                    <input type="date" id="dob" name="dob" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Gender</label>
                    <select class="form-control" name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Average Life Span</label>
                    <input type="text" id="life_span" name="life_span" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Dietary Requirement</label>
                    <input type="text" id="diet" name="diet" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="habitat">Habitat</label>
                    <textarea name="habitat" id="habitat" cols="30" rows="10" class="form-control"></textarea>
                    {{-- <input type="longtext" id="name" name="name" class="form-control"> --}}
                </div>

                <div class="form-group">
                    <label for="date_joined">Date Joined</label>
                    <input type="date" id="date_joined" name="date_joined" class="form-control" required = "">
                    {{-- <input type="longtext" id="name" name="name" class="form-control"> --}}
                </div>

                <div class="form-group">
                    <label for="global_population">Global Population</label>
                    <input type="number" id="global_population" name="global_population" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Height</label>
                    <input type="string" id="height" name="height" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Weight</label>
                    <input type="string" id="weight" name="weight" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nest">Nest Construction Method</label>
                    <textarea name="nest" id="nest" cols="30" rows="6" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="name">Clutch Size</label>
                    <input type="string" id="clutch" name="clutch" class="form-control">
                </div>

                <div class="form-group">
                    <label for="wingspan">Wing Span</label>
                    <input type="text" id="wingspan" name="wingspan" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="wingspan">Ability to Fly</label>
                    <div class="controls">
                        <input type="checkbox" name="can_fly" id="can_fly" value="yes"> <h5>Yes</h5>
                    </div>
                </div>

                <div class="form-group">
                    <label for="plumage_color">Plumage Colour</label>
                    <input type="text" id="plumage_color" name="plumage_color" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Image</label>
                    <input type="file" id="image" name="image" class="form-control">
                </div>

                <div class="form-group">
                    <label>Display In Front</label>
                    <div class="controls">
                        <input type="checkbox" name="status" id="status" value="1"> <h5>Yes</h5>
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Add</button>
                </div>
            </form>
        </div>
    </div><!--Permission Create Form Ends Here-->
@endsection
