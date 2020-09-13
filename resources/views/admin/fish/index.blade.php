@extends('layouts.admin')

@section('title', 'Fish')
@section('page-title', 'Fish List')

@section('content')
    <div class="box">
        @if(Session::has('message'))
            <div class="alert alert-success alert-block text-center">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{!! session('message') !!}</strong>
            </div>
        @endif

        <div class="col-md-12 ftco-animate">
            <div class="box-header">
                <h3 class="box-title" style="font-weight: bold;">
                    View Fish Records
                </h3>

                @can('fish-add')
                    <a href="{{route('fish.create')}}" class="btn btn-success pull-right">Add New</a>
                @endcan

                @can('fish-delete')
                    <a href="{{route('fish.trashed')}}" class="btn btn-danger pull-right">Trashed</a>
                @endcan
            </div>
            {{-- <div class="row"> --}}
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" style="border: 1px solid black;">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Id</th>
                                <th style="text-align: center;">Name</th>
                                <th style="text-align: center;">Given Name</th>
                                <th style="text-align: center;">Category</th>
                                <th style="text-align: center;">Date of Birth</th>
                                <th style="text-align: center;">Gender</th>
                                <th style="text-align: center;">Average Life Span</th>
                                <th style="text-align: center;">Diet</th>
                                <th style="text-align: center;">Habitat</th>
                                <th style="text-align: center;">Global Population</th>
                                <th style="text-align: center;">Joined In</th>
                                <th style="text-align: center;">Height</th>
                                <th style="text-align: center;">Weight</th>
                                <th style="text-align: center;">Image</th>
                                <th style="text-align: center;">Average Temperature</th>
                                <th style="text-align: center;">Water Type</th>
                                <th style="text-align: center;">Color</th>
                                <th style="text-align: center;">Status</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($fish->count()>0)
                                @php($count = 1)
                                    @foreach ($fish as $fish)
                                        <tr class="col text-center">
                                            <td>{{$count}}</td>
                                            <td>{{$fish->name}}</td>
                                            <td>{{$fish->given_name}}</td>

                                            {{-- @dd($painting->category_id) --}}
                                            @foreach ($categories as $category)
                                                @if ($category->id == $fish->category_id)
                                                    <td>{{$category->name}}</td>
                                                @endif
                                            @endforeach
                                            <td>{{$fish->dob}}</td>
                                            <td>{{$fish->gender}}</td>
                                            <td>{{$fish->life_span}}</td>
                                            <td>{{$fish->diet}}</td>
                                            <td>{{$fish->habitat}}</td>
                                            <td>{{$fish->global_population}}</td>
                                            <td>{{$fish->date_joined}}</td>
                                            <td>{{$fish->height}}</td>
                                            <td>{{$fish->weight}}</td>

                                            <td>
                                                @if(!empty($fish->image))
                                                    <img src="{{ asset('admin/images/animals/'.$fish->image) }}" style="width:50px;">
                                                @endif
                                            </td>

                                            <td>{{$fish->temperature}}</td>
                                            <td>{{$fish->water_type}}</td>
                                            <td>{{$fish->color}}</td>
                                            <td>{{$fish->status}}</td>
                                            {{-- for action like edit and delete --}}
                                            <td>
                                            @can('fish-edit')
                                                {{-- <a href="#" data-toggle="tooltip" title="Edit" class="btn btn-info btn-sm"><i class="far fa-edit"></i></a> --}}
                                                <a href="{{route('fish.edit',['id' => $fish->id])}}" data-toggle="tooltip" title="Edit" class="btn btn-info btn-sm"><i class="far fa-edit"></i></a>
                                            @endcan


                                            @can('fish-delete')
                                                <form action="{{route('fish.destroy',['id' => $fish->id])}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                        <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>
                                                </form>
                                            @endcan
                                            </td>
                                        </tr>
                                        @php($count++)
                                    @endforeach
                            @else
                                <tr class="col text-center"  style="text-align: center;">
                                    <th colspan="20" style="text-align: center;">
                                        No records in the table!
                                    </th>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            {{-- </div> --}}
        </div>

    </div>

@endsection

