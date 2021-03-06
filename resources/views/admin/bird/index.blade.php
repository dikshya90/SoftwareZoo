@extends('layouts.admin')

@section('title', 'Birds')
@section('page-title', 'Bird List')

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
                    View Birds
                </h3>

                @can('bird-add')
                    <a href="{{route('bird.create')}}" class="btn btn-success pull-right">Add New</a>
                @endcan

                @can('bird-delete')
                    <a href="{{route('bird.trashed')}}" class="btn btn-danger pull-right">Trashed</a>
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
                                {{-- <th style="text-align: center;">Habitat</th> --}}
                                <th style="text-align: center;">Global Population</th>
                                <th style="text-align: center;">Joined In</th>
                                <th style="text-align: center;">Height</th>
                                <th style="text-align: center;">Weight</th>
                                <th style="text-align: center;">Image</th>
                                {{-- <th style="text-align: center;">Nest Construction</th> --}}
                                <th style="text-align: center;">clutch Size</th>
                                <th style="text-align: center;">WingSpan</th>
                                <th style="text-align: center;">can Fly</th>
                                <th style="text-align: center;">Color</th>
                                <th style="text-align: center;">Status</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($birds->count()>0)
                                @php($count = 1)
                                    @foreach ($birds as $bird)
                                        <tr class="col text-center">
                                            <td>{{$count}}</td>
                                            <td>{{$bird->name}}</td>
                                            <td>{{$bird->given_name}}</td>

                                            {{-- @dd($painting->category_id) --}}
                                            @foreach ($categories as $category)
                                                @if ($category->id == $bird->category_id)
                                                    <td>{{$category->name}}</td>
                                                @endif
                                            @endforeach
                                            <td>{{$bird->dob}}</td>
                                            <td>{{$bird->gender}}</td>
                                            <td>{{$bird->life_span}}</td>
                                            <td>{{$bird->diet}}</td>
                                            {{-- <td>{{$bird->habitat}}</td> --}}
                                            <td>{{$bird->global_population}}</td>
                                            <td>{{$bird->date_joined}}</td>
                                            <td>{{$bird->height}}</td>
                                            <td>{{$bird->weight}}</td>

                                            <td>
                                                @if(!empty($bird->image))
                                                    <img src="{{ asset('admin/images/animals/'.$bird->image) }}" style="width:50px;">
                                                @endif
                                            </td>

                                            {{-- <td>{{$bird->nest}}</td> --}}
                                            <td>{{$bird->clutch}}</td>
                                            <td>{{$bird->wingspan}}</td>
                                            <td>{{$bird->can_fly}}</td>
                                            <td>{{$bird->plumage_color}}</td>
                                            <td>{{$bird->status}}</td>
                                            {{-- for action like edit and delete --}}
                                            <td>
                                            @can('bird-edit')
                                                {{-- <a href="#" data-toggle="tooltip" title="Edit" class="btn btn-info btn-sm"><i class="far fa-edit"></i></a> --}}
                                                <a href="{{route('bird.edit',['id' => $bird->id])}}" data-toggle="tooltip" title="Edit" class="btn btn-info btn-sm"><i class="far fa-edit"></i></a>
                                            @endcan


                                            @can('bird-delete')
                                                <form action="{{route('bird.destroy',['id' => $bird->id])}}" method="POST">
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
                                        No entries in the table!
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

