@extends('layouts.admin')

@section('title', 'View Sponsors')
@section('page-title', 'Sponsor Request List')

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
                        View Sponsor Request List
                    </h3>
                    {{-- @can('category-add')
                        <a href="{{route('category.create')}}" class="btn btn-success pull-right">Add New</a>
                    @endcan --}}
                </div>
                <div class="box-body">
                    <table id="dataList" class="table table-bordered table-striped table-hover" style="border: 1px solid black;">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Id</th>
                                <th style="text-align: center;">Name</th>
                                <th style="text-align: center;">Email</th>
                                <th style="text-align: center;">Contact Info</th>
                                <th style="text-align: center;">Country</th>
                                <th style="text-align: center;">City</th>
                                <th style="text-align: center;">Street</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($sponsors->count()>0)
                                @php($count = 1)
                                    @foreach ($sponsors as $sponsor)
                                        <tr class="col text-center">
                                            <td>{{$count}}</td>
                                            <td>{{$sponsor->name}}</td>
                                            <td>{{$sponsor->email}}</td>
                                            <td>{{$sponsor->contact}}</td>
                                            <td>{{$sponsor->country}}</td>
                                            <td>{{$sponsor->city}}</td>
                                            <td>{{$sponsor->street}}</td>
                                            <td>


                                            @can('sponsor-delete')
                                                <form action="{{route('sponsorDelete',['id'=>$sponsor->id])}}" method="POST">
                                                    @csrf
                                                    @method('post')
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
                                <tr>
                                    <th colspan="16" class="text-center">
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

