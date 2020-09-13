@extends('layouts.admin')

@section('title', 'View Ticket Bookings')
@section('page-title', 'Ticket Booking List')

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
                        View Ticket Booking List
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
                                <th style="text-align: center;">Age Group</th>
                                <th style="text-align: center;">Total Tickets</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($tickets->count()>0)
                                @php($count = 1)
                                    @foreach ($tickets as $ticket)
                                        <tr class="col text-center">
                                            <td>{{$count}}</td>
                                            <td>{{$ticket->name}}</td>
                                            <td>{{$ticket->email}}</td>
                                            <td>{{$ticket->contact}}</td>
                                            <td>{{$ticket->age_group}}</td>
                                            <td>{{$ticket->total_ticket}}</td>
                                            <td>


                                            @can('ticket-delete')
                                                <form action="{{route('ticketDelete',['id'=>$ticket->id])}}" method="POST">
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

