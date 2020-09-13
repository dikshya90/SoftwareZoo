@extends('layouts.admin')

@section('title', 'Trashed Bird')
@section('page-title', 'Trashed Bird Record')

@section('content')

<div class="box">
    @if(Session::has('message'))
		    <div class="alert alert-success alert-block text-center">
		        <button type="button" class="close" data-dismiss="alert">×</button>
		        <strong>{!! session('message') !!}</strong>
		    </div>
		@endif
    <div class="box-header">
        Trashed Birds Records
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
                    <th style="text-align: center;">Nest Construction</th>
                    <th style="text-align: center;">clutch Size</th>
                    <th style="text-align: center;">WingSpan</th>
                    <th style="text-align: center;">Ability to fly</th>
                    <th style="text-align: center;">Color</th>
                    <th style="text-align: center;">Status</th>
                    <th style="text-align: center;">Deleted At</th>
                    <th style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($birds->count() > 0)
                    @foreach ($birds as $bird)
                        <tr>
                            <td>{{$bird->name}}</td>
                            <td>{{$bird->given_name}}</td>

                            <td>{{$bird->dob}}</td>
                            <td>{{$bird->gender}}</td>
                            <td>{{$bird->life_span}}</td>
                            <td>{{$bird->diet}}</td>
                            <td>{{$bird->habitat}}</td>
                            <td>{{$bird->global_population}}</td>
                            <td>{{$bird->date_joined}}</td>
                            <td>{{$bird->height}}</td>
                            <td>{{$bird->weight}}</td>

                            <td>
                                @if(!empty($bird->image))
                                    <img src="{{ asset('admin/images/animals/'.$bird->image) }}" style="width:50px;">
                                @endif
                            </td>

                            <td>{{$bird->nest}}</td>
                            <td>{{$bird->clutch}}</td>
                            <td>{{$bird->wingspan}}</td>
                            <td>{{$bird->can_fly}}</td>
                            <td>{{$bird->plumage_color}}</td>
                            <td>{{$bird->status}}</td>
                            <td>{{$bird->deleted_at}}</td>
                            <td class="action">
                                <form action="{{route('bird.restore', ['id' => $bird->id])}}" method="get" class="form-restore">
                                    @csrf
                                    <button type="submit" data-toggle="tooltip" title="Restore" class="btn btn-info btn-sm">
                                        <i class="fas fa-window-restore"></i>
                                    </button>
                                </form>
                                <form action="{{route('bird.kill', ['id' => $bird->id])}}" method="get">
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
                        <th colspan="18" class="text-center"><i>No Records</i></th>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

@endsection

