@extends('layouts.admin')

@section('title', 'Mammal')
@section('page-title', 'Mammal List')

@section('content')

<div class="box">
    @if(Session::has('message'))
		    <div class="alert alert-success alert-block text-center">
		        <button type="button" class="close" data-dismiss="alert">×</button>
		        <strong>{!! session('message') !!}</strong>
		    </div>
		@endif
    <div class="box-header">
        Trashed Mammal Records
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
                                <th style="text-align: center;">Joined In</th>
                                <th style="text-align: center;">Height</th>
                                <th style="text-align: center;">Weight</th>
                                <th style="text-align: center;">Image</th>
                                <th style="text-align: center;">Gestation Period</th>
                                <th style="text-align: center;">Deleted At</th>
                                <th style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($mammals->count() > 0)
                    @foreach ($mammals as $mammal)
                        <tr>
                            <td>{{$mammal->name}}</td>
                            <td>{{$mammal->given_name}}</td>
                            <td>{{$mammal->dob}}</td>
                            <td>{{$mammal->gender}}</td>
                            <td>{{$mammal->life_span}}</td>
                            <td>{{$mammal->diet}}</td>
                            <td>{{$mammal->habitat}}</td>
                            <td>{{$mammal->date_joined}}</td>
                            <td>{{$mammal->height}}</td>
                            <td>{{$mammal->weight}}</td>

                            <td>
                                @if(!empty($mammal->image))
                                    <img src="{{ asset('admin/images/animals/'.$mammal->image) }}" style="width:50px;">
                                @endif
                            </td>

                            <td>{{$mammal->gestation}}</td>
                            <td>{{$mammal->deleted_at}}</td>
                            <td class="action">
                                <form action="{{route('mammal.restore', ['id' => $mammal->id])}}" method="get" class="form-restore">
                                    @csrf
                                    <button type="submit" data-toggle="tooltip" title="Restore" class="btn btn-info btn-sm">
                                        <i class="fas fa-window-restore"></i>
                                    </button>
                                </form>
                                <form action="{{route('mammal.kill', ['id' => $mammal->id])}}" method="get">
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
                        <th colspan="16" class="text-center"><i>No Records</i></th>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

@endsection

