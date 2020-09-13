@extends('layouts.admin')

@section('title', 'Reptiles and Amphibians')
@section('page-title', 'Reptiles and Amphibians List')

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
                    View Reptiles and Amphibians Records
                </h3>

                @can('amphi-reptile-add')
                    <a href="{{route('reptileAmphibian.create')}}" class="btn btn-success pull-right">Add New</a>
                @endcan

                @can('amphi-reptile-delete')
                    <a href="{{route('reptileAmphibian.trashed')}}" class="btn btn-danger pull-right">Trashed</a>
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
                                <th style="text-align: center;">Reproduction Type</th>
                                <th style="text-align: center;">Clutch Size</th>
                                <th style="text-align: center;">Average Offspring</th>
                                <th style="text-align: center;">Status</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($reptiles->count()>0)
                                @php($count = 1)
                                    @foreach ($reptiles as $reptile)
                                        <tr class="col text-center">
                                            <td>{{$count}}</td>
                                            <td>{{$reptile->name}}</td>
                                            <td>{{$reptile->given_name}}</td>

                                            {{-- @dd($painting->category_id) --}}
                                            @foreach ($categories as $category)
                                                @if ($category->id == $reptile->category_id)
                                                    <td>{{$category->name}}</td>
                                                @endif
                                            @endforeach
                                            <td>{{$reptile->dob}}</td>
                                            <td>{{$reptile->gender}}</td>
                                            <td>{{$reptile->life_span}}</td>
                                            <td>{{$reptile->diet}}</td>
                                            <td>{{$reptile->habitat}}</td>
                                            <td>{{$reptile->global_population}}</td>
                                            <td>{{$reptile->date_joined}}</td>
                                            <td>{{$reptile->height}}</td>
                                            <td>{{$reptile->weight}}</td>

                                            <td>
                                                @if(!empty($reptile->image))
                                                    <img src="{{ asset('admin/images/animals/'.$reptile->image) }}" style="width:50px;">
                                                @endif
                                            </td>

                                            <td>{{$reptile->reproduction_type}}</td>
                                            <td>{{$reptile->clutch}}</td>
                                            <td>{{$reptile->offspring}}</td>
                                            <td>{{$reptile->status}}</td>
                                            {{-- for action like edit and delete --}}
                                            <td>
                                            @can('amphi-reptile-edit')
                                                {{-- <a href="#" data-toggle="tooltip" title="Edit" class="btn btn-info btn-sm"><i class="far fa-edit"></i></a> --}}
                                                <a href="{{route('reptileAmphibian.edit',['id' => $reptile->id])}}" data-toggle="tooltip" title="Edit" class="btn btn-info btn-sm"><i class="far fa-edit"></i></a>
                                            @endcan


                                            @can('amphi-reptile-delete')
                                                <form action="{{route('reptileAmphibian.destroy',['id' => $reptile->id])}}" method="POST">
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

