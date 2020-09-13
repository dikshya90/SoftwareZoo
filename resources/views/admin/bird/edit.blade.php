@extends('layouts.admin')

@section('title', 'Edit Bird')
@section('page-title', 'Edit Bird')

@section('content')
    <!--Permission Create Box Starts Here-->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Edit Bird Details</h3>
        </div>
        <div class="box-body">
            <!--Form Start-->
            <form action="{{route('bird.update',['id'=>$birds->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="{{$birds->name}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Given Name</label>
                    <input type="text" id="given_name" name="given_name" value="{{$birds->given_name}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control">
                        <option value="{{$birds->category_id}}">{{$birds->category->name}}</option>
                        @foreach ($categories as $category)
                            @if ($category->id != $birds->category_id)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Date of Birth</label>
                    <input type="date" id="dob" name="dob" value="{{$birds->dob}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Gender</label>
                    <select name="gender" id="gender" class="form-control" required="">
                        <option value="Male" @if($birds->gender == "Male") selected @endif>Male</option>
                        <option value="Female" @if($birds->gender == "Female") selected @endif>Female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Average Life Span</label>
                    <input type="text" id="life_span" name="life_span" value="{{$birds->life_span}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Dietary Requirement</label>
                    <input type="text" id="diet" name="diet" value="{{$birds->diet}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="habitat">Habitat</label>
                    <textarea name="habitat" id="habitat" cols="30" rows="10" class="form-control">{{$birds->habitat}}</textarea>
                    {{-- <input type="longtext" id="name" name="name" class="form-control"> --}}
                </div>

                <div class="form-group">
                    <label for="date_joined">Date Joined</label>
                    <input type="date" id="date_joined" name="date_joined" value="{{$birds->date_joined}}" class="form-control" required = "">
                    {{-- <input type="longtext" id="name" name="name" class="form-control"> --}}
                </div>

                <div class="form-group">
                    <label for="global_population">Global Population</label>
                    <input type="number" id="global_population" name="global_population" value="{{$birds->global_population}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Height</label>
                    <input type="string" id="height" name="height" value="{{$birds->height}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="name">Weight</label>
                    <input type="string" id="weight" name="weight" value="{{$birds->weight}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nest">Nest Construction Method</label>
                    <textarea name="nest" id="nest" cols="30" rows="10" class="form-control">{{$birds->nest}}</textarea>
                </div>

                <div class="form-group">
                    <label for="name">Clutch Size</label>
                    <input type="string" id="clutch" name="clutch" value="{{$birds->clutch}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="wingspan">Wing Span</label>
                    <input type="text" id="wingspan" name="wingspan" value="{{$birds->wingspan}}" class="form-control" required = "">
                </div>

                <div class="form-group">
                    <label for="wingspan">Ability to Fly</label>
                    <div class="controls">
                        <input type="checkbox" name="can_fly" id="can_fly" @if($birds->can_fly == "Yes") checked @endif value="Yes">
                    </div>
                </div>

                <div class="form-group">
                    <label for="plumage_color">Plumage Colour</label>
                    <input type="text" id="plumage_color" name="plumage_color" value="{{$birds->plumage_color}}" class="form-control" required = "">
                </div>

                <div class="from-group">
                    <label for="iamge">Image</label>
                    <div class="controls">
                        <div id="uniform-undefined">
                            <table>
                                <tr>
                                    <td>
                                        <input name="image" id="image" type="file">
                                            @if(!empty($birds->image))
                                                <input type="hidden" name="current_image" value="{{ $birds->image }}">
                                            @endif
                                    </td>
                                    <td>
                                        @if(!empty($birds->image))
                                            <img style="width:30%; height: 25%;" src="{{ asset('admin/images/animals/'.$birds->image) }}">
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
                        <input type="checkbox" name="status" id="status" @if($birds->status == "1") checked @endif value="1">
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div><!--Permission Create Form Ends Here-->
@endsection
