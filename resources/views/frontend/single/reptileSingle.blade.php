
@extends('layouts.front')
@section('title', 'Single Reptile')

@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <h3 class="bold"><p>{{$reptileDetail->name}}</p></h3>
            </div>
            <div class="row">

                <div class="col-lg-6 mb-5 ftco-animate">
                    <img src="{{asset('/admin/images/animals/'.$reptileDetail->image)}}" class="img-fluid" style="height:400px; width:550px;" alt="Colorlib Template">
                </div>

                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <!-- <h3 class="bold"><p>{{$reptileDetail->name}}</p></h3> -->
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;"> Given Name:</p><p style="margin-left: 3%;">{{$reptileDetail->given_name}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">  Date of birth: </p> <p style="margin-left: 3%;"> {{$reptileDetail->dob}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Gender: </p><p style="margin-left: 3%;">{{$reptileDetail->gender}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Average Life Span: </p><p style="margin-left: 3%;">{{$reptileDetail->life_span}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Global Population: </p><p style="margin-left: 3%;">{{$reptileDetail->global_population}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Date Joined: </p><p style="margin-left: 3%;">{{$reptileDetail->date_joined}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Height: </p><p style="margin-left: 3%;">{{$reptileDetail->height}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Weight: </p><p style="margin-left: 3%;">{{$reptileDetail->weight}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Reproduction Type: </p><p style="margin-left: 3%;">{{$reptileDetail->reproduction_type}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Average Offspring: </p><p style="margin-left: 3%;">{{$reptileDetail->offspring}}</p>
                    </div>
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
                @foreach ($relatedReptile as $related)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="{{url('/singleReptile/'.$related->id)}}" class="img-prod"><img class="img-fluid" src="{{asset('/admin/images/animals/'.$related->image)}}" style="height:300px; width:350px;" alt="Colorlib Template">

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

