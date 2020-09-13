@extends('layouts.admin')

@section('title', 'Claybrook Zoo')

@section('content')

    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ul class="breadcrumb">
            <li><a href="{{url('/admin/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ul>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">

            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$user}}</h3>
                        <p>Total Users</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-stalker"></i>
                    </div>
                </div>
            </div><!-- ./col -->

            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$mammal}}</h3>
                        <p>Total Mammals</p>
                    </div>
                    <div class="icon">
                        <i class="ion-star"></i>
                    </div>
                </div>
            </div><!-- ./col -->

            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$bird}}</h3>
                        <p>Total Birds</p>
                    </div>
                    <div class="icon">
                        <i class="ion-social-tux"></i>
                    </div>
                </div>
            </div><!-- ./col -->

        </div><!-- /.row -->

        <div class="row">
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$fish}}</h3>
                        <p>Fish</p>
                    </div>
                    <div class="icon">
                        <i class="ion-flash"></i>
                    </div>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$reptile}}</h3>
                        <p>Reptiles and Amphibians</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div><!-- ./col -->

            <div class="col-lg-4 col-xs-6" >
                <!-- small box -->
                <div class="small-box bg-info" style="height: 20%;">
                    <div class="inner">
                        <h3>{{$sponsorRequest}}</h3>
                        <p>Sponsor Requests</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                </div>
            </div><!-- ./col -->

            <div class="col-lg-4 col-xs-6" >
                <!-- small box -->
                <div class="small-box bg-info" style="height: 20%;">
                    <div class="inner">
                        <h3>{{$ticketBooking}}</h3>
                        <p>Total ticket bookings</p>
                    </div>
                    <div class="icon">
                        <i class="ion-folder"></i>
                    </div>
                </div>
            </div><!-- ./col -->

        </div>

    </section><!-- /.content -->

@endsection
