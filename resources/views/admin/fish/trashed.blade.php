@extends('layouts.admin')

@section('title', 'Trashed Fish')
@section('page-title', 'Trashed Fish Record')

@section('content')

<div class="box">
    @if(Session::has('message'))
		    <div class="alert alert-success alert-block text-center">
		        <button type="button" class="close" data-dismiss="alert">×</button>
		        <strong>{!! session('message') !!}</strong>
		    </div>
		@endif
    <div class="box-header">
        Trashed Fish Records
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
                    <th style="text-align: center;">Average Temperature</th>
                    <th style="text-align: center;">Water Type</th>
                    <th style="text-align: center;">Color</th>
                    <th style="text-align: center;">Status</th>
                    <th style="text-align: center;">Deleted At</th>
                    <th style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($fish->count() > 0)
                    @foreach ($fish as $fish)
                        <tr>
                            <td>{{$fish->name}}</td>
                            <td>{{$fish->given_name}}</td>

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
                            <td>{{$fish->deleted_at}}</td>
                            <td class="action">
                                <form action="{{route('fish.restore', ['id' => $fish->id])}}" method="get" class="form-restore">
                                    @csrf
                                    <button type="submit" data-toggle="tooltip" title="Restore" class="btn btn-info btn-sm">
                                        <i class="fas fa-window-restore"></i>
                                    </button>
                                </form>
                                <form action="{{route('fish.kill', ['id' => $fish->id])}}" method="get">
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

