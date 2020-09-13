
@extends('layouts.front')
@section('title', 'Single Painting')

@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <h3 class="bold"><p>{{$fishDetail->name}}</p></h3>
            </div>
            <div class="row">

                <div class="col-lg-6 mb-5 ftco-animate">
                    <img src="{{asset('/admin/images/animals/'.$fishDetail->image)}}" class="img-fluid" style="height:550px; width:700px;" alt="Colorlib Template">
                </div>

                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <!-- <h3 class="bold"><p>{{$fishDetail->name}}</p></h3> -->
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;"> Given Name:</p><p style="margin-left: 3%;">{{$fishDetail->given_name}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">  Date of birth: </p> <p style="margin-left: 3%;"> {{$fishDetail->dob}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Gender: </p><p style="margin-left: 3%;">{{$fishDetail->gender}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Average Life Span: </p><p style="margin-left: 3%;">{{$fishDetail->life_span}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Global Population: </p><p style="margin-left: 3%;">{{$fishDetail->global_population}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Date Joined: </p><p style="margin-left: 3%;">{{$fishDetail->date_joined}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Height: </p><p style="margin-left: 3%;">{{$fishDetail->height}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Weight: </p><p style="margin-left: 3%;">{{$fishDetail->weight}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Water Type: </p><p style="margin-left: 3%;">{{$fishDetail->water_type}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Plumage Color: </p><p style="margin-left: 3%;">{{$fishDetail->color}}</p>
                    </div>
                    <!-- <p style="font-size: 20px;">Water Type: {{$fishDetail->water_type}}</p>
                    <p style="font-size: 20px;">Plumage Colour: {{$fishDetail->color}}</p> -->
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Similar Animals</span>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($relatedFish as $related)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="{{url('/singleFish/'.$related->id)}}" class="img-prod"><img class="img-fluid" src="{{asset('/admin/images/animals/'.$related->image)}}" style="height:300px; width:350px;" alt="Colorlib Template">

                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">{{$related->name}}</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="price-sale">{{$related->given_name}}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

