
@extends('layouts.front')
@section('title', 'Single Mammal')

@section('content')
    {{-- @dd($birdDetail) --}}
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <h3 class="bold"><p>{{$mammalDetail->name}}</p></h3>
            </div>
            <!-- <h3 class="bold"><p>{{$mammalDetail->name}}</p></h3> -->
            <div class="row">
                <div class="col-lg-5 mb-5 ftco-animate">
                    <img src="{{asset('/admin/images/animals/'.$mammalDetail->image)}}" class="img-fluid" style="height:400px; width:550px;" alt="Colorlib Template">
                </div>

                <div class="col-lg-6 pl-md-5 ftco-animate heading" style="font: 20px;">
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;"> Given Name:</p><p style="margin-left: 3%;">{{$mammalDetail->given_name}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">  Date of birth: </p> <p style="margin-left: 3%;"> {{$mammalDetail->dob}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Gender: </p><p style="margin-left: 3%;">{{$mammalDetail->gender}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Average Life Span: </p><p style="margin-left: 3%;">{{$mammalDetail->life_span}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Global Population: </p><p style="margin-left: 3%;">{{$mammalDetail->global_population}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Date Joined: </p><p style="margin-left: 3%;">{{$mammalDetail->date_joined}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Height: </p><p style="margin-left: 3%;">{{$mammalDetail->height}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Weight: </p><p style="margin-left: 3%;">{{$mammalDetail->weight}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Gestational Period: </p><p style="margin-left: 3%;">{{$mammalDetail->gestation}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Average Body Temperature :  </p><p style="margin-left: 3%;">{{$mammalDetail->temperature}} Degree Celsius</p>
                    </div>
                </div>
            </div>
            <div class="container row" style="font-size: 20px;">
                <p style="color: black;">Dietary Requirement: </p><p style="margin-left: 2%;">{{$mammalDetail->diet}}</p>
            </div>
            <div class="row container" style="font-size: 20px;">
                <p style="color: black;">Habitat: </p><p>{{$mammalDetail->habitat}}</p>
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
                @foreach ($relatedMammal as $related)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="{{url('/singleMammal/'.$related->id)}}" class="img-prod"><img class="img-fluid" src="{{asset('/admin/images/animals/'.$related->image)}}" style="height:300px; width:350px;" alt="Colorlib Template">

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

