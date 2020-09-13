@extends('layouts.admin')

@section('title', 'Mammal')
@section('page-title', 'Mammal List')

@section('content')
    <div class="row">
        @if(Session::has('message'))
		    <div class="alert alert-success alert-block text-center">
		        <button type="button" class="close" data-dismiss="alert">×</button>
		        <strong>{!! session('message') !!}</strong>
		    </div>
		@endif
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title" style="font-weight: bold;">
                        View Mammals
                    </h3>
                    @can('mammal-add')
                        <a href="{{route('mammal.create')}}" class="btn btn-success pull-right">Add New</a>
                    @endcan
                    @can('mammal-delete')
                        <a href="{{route('mammal.trashed')}}" class="btn btn-danger pull-right">Trashed</a>
                    @endcan
                </div>
                <div class="table-responsive">
                    <table id="dataList" class="table table-bordered table-striped table-hover" style="border: 1px solid black;">
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
                                {{-- <th style="text-align: center;">Habitat</th> --}}
                                <th style="text-align: center;">Global Population</th>
                                <th style="text-align: center;">Joined In</th>
                                <th style="text-align: center;">Height</th>
                                <th style="text-align: center;">Weight</th>
                                <th style="text-align: center;">Image</th>
                                <th style="text-align: center;">Gestation Period</th>
                                <th style="text-align: center;">Avg. Body temp.</th>
                                <th style="text-align: center;">Status</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($mammals->count()>0)
                                @php($count = 1)
                                    @foreach ($mammals as $painting)
                                        <tr class="col text-center">
                                            <td>{{$count}}</td>
                                            <td>{{$painting->name}}</td>
                                            <td>{{$painting->given_name}}</td>

                                            {{-- @dd($painting->category_id) --}}
                                            @foreach ($categories as $category)
                                                @if ($category->id == $painting->category_id)
                                                    <td>{{$category->name}}</td>
                                                @endif
                                            @endforeach
                                            <td>{{$painting->dob}}</td>
                                            <td>{{$painting->gender}}</td>
                                            <td>{{$painting->life_span}}</td>
                                            <td>{{$painting->diet}}</td>
                                            {{-- <td>{{$painting->habitat}}</td> --}}
                                            <td>{{$painting->global_population}}</td>
                                            <td>{{$painting->date_joined}}</td>
                                            <td>{{$painting->height}}</td>
                                            <td>{{$painting->weight}}</td>

                                            <td>
                                                @if(!empty($painting->image))
                                                    <img src="{{ asset('admin/images/animals/'.$painting->image) }}" style="width:50px;">
                                                @endif
                                            </td>

                                            <td>{{$painting->gestation}}</td>
                                            <td>{{$painting->temperature}}</td>
                                            <td>{{$painting->status}}</td>
                                            {{-- for action like edit and delete --}}
                                            <td>
                                            @can('mammal-edit')
                                                {{-- <a href="#" data-toggle="tooltip" title="Edit" class="btn btn-info btn-sm"><i class="far fa-edit"></i></a> --}}
                                                <a href="{{route('mammal.edit',['id' => $painting->id])}}" data-toggle="tooltip" title="Edit" class="btn btn-info btn-sm"><i class="far fa-edit"></i></a>
                                            @endcan

                                            {{-- deleting users from database --}}
                                            @can('mammal-delete')
                                                <form action="{{route('mammal.destroy',['id' => $painting->id])}}" method="POST">
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
                                <tr class="text-center"  style="justify-content: center;">
                                    <th colspan="4" class="text-center">
                                        No entries in the table!
                                    </th>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

