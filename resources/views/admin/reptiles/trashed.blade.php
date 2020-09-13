@extends('layouts.admin')

@section('title', 'Trashed Reptile or Amphibian Data')
@section('page-title', 'Trashed Reptile or Amphibian Data')

@section('content')

<div class="box">
    @if(Session::has('message'))
		    <div class="alert alert-success alert-block text-center">
		        <button type="button" class="close" data-dismiss="alert">×</button>
		        <strong>{!! session('message') !!}</strong>
		    </div>
		@endif
    <div class="box-header">
        Trashed Reptile or Amphibian Records
        {{-- <a href="{{route('permission.create')}}" class="btn btn-success float-right">Add New</a> --}}
        {{-- <a href="{{route('permission.trashed')}}" class="btn btn-danger float-right">Trashed</a> --}}
    </div>
    <div class="table-responsive">
        <table id="dataList" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="text-align: center;">Name</th>
                    <th style="text-align: center;">Given Name</th>
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
                    <th style="text-align: center;">Deleted At</th>
                    <th style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($reptiles->count() > 0)
                    @foreach ($reptiles as $reptile)
                        <tr>
                            <td>{{$reptile->name}}</td>
                            <td>{{$reptile->given_name}}</td>

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
                            <td>{{$reptile->deleted_at}}</td>
                            <td class="action">
                                <form action="{{route('reptileAmphibian.restore', ['id' => $reptile->id])}}" method="get" class="form-restore">
                                    @csrf
                                    <button type="submit" data-toggle="tooltip" title="Restore" class="btn btn-info btn-sm">
                                        <i class="fas fa-window-restore"></i>
                                    </button>
                                </form>
                                <form action="{{route('reptileAmphibian.kill', ['id' => $reptile->id])}}" method="get">
                                    @csrf
                                    <button type="submit" data-toggle="tooltip" title="Delete Permanently" class="btn btn-danger btn-sm">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th colspan="18" class="text-center"><i>No Trashed Records</i></th>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

@endsection

