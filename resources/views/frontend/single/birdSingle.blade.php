
@extends('layouts.front')
@section('title', 'Single Painting')

@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
            <!-- <div class="row justify-content-center mb-3 pb-3"> -->
                <h3 class="bold"><p>{{$birdDetail->name}}</p></h3>
            <!-- </div> -->
            </div>
            <div class="row">

                <div class="col-lg-6 mb-5 ftco-animate">
                    <img src="{{asset('/admin/images/animals/'.$birdDetail->image)}}" class="img-fluid" style="height:400px; width:550px;" alt="Colorlib Template">
                </div>

                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <!-- <h3 class="bold"><p>{{$birdDetail->name}}</p></h3> -->
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;"> Given Name:</p><p style="margin-left: 3%;">{{$birdDetail->given_name}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">  Date of birth: </p> <p style="margin-left: 3%;"> {{$birdDetail->dob}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Gender: </p><p style="margin-left: 3%;">{{$birdDetail->gender}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Average Life Span: </p><p style="margin-left: 3%;">{{$birdDetail->life_span}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Global Population: </p><p style="margin-left: 3%;">{{$birdDetail->global_population}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Date Joined: </p><p style="margin-left: 3%;">{{$birdDetail->date_joined}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Height: </p><p style="margin-left: 3%;">{{$birdDetail->height}}</p>
                    </div>
                    <div class="row" style="font-size: 20px;">
                        <p style="color: black;">Weight: </p><p style="margin-left: 3%;">{{$birdDetail->weight}}</p>
                    </div>
                    <!-- <p style="font-size: 20px;">Nest Construction Method: {{$birdDetail->nest}}</p>
                    <p style="font-size: 20px;">Clutch Size: {{$birdDetail->clutch}}</p>
                    <p style="font-size: 20px;">WingSpan: {{$birdDetail->wingspan}}</p>
                    <p style="font-size: 20px;">Ability to fly: {{$birdDetail->can_fly}}</p>
                    <p style="font-size: 20px;">Plumage Colour: {{$birdDetail->plumage_color}}</p> -->
                </div>
            </div>
            <div class="row container" style="font-size: 20px;">
                <p style="color: black;">Clutch Size: </p><p>{{$birdDetail->clutch}}</p>
            </div>
            <div class="container row" style="font-size: 20px;">
                <p style="color: black;">Wingspan: </p><p style="margin-left: 2%;">{{$birdDetail->wingspan}}</p>
            </div>
            <div class="row container" style="font-size: 20px;">
                <p style="color: black;">Ability to fly:</p><p style="margin-left: 2%;">{{$birdDetail->can_fly}}</p>
            </div>
            <div class="row container" style="font-size: 20px;">
                <p style="color: black;">Plumage Colour:  </p><p style="margin-left: 2%;">{{$birdDetail->plumage_color}}</p>
            </div>
            <div class="container row" style="font-size: 20px;">
                <p style="color: black;">Nest Construction Method:</p><p>{{$birdDetail->nest}}</p>
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
                @foreach ($relatedBird as $related)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="{{url('/singleBird/'.$related->id)}}" class="img-prod"><img class="img-fluid" src="{{asset('/admin/images/animals/'.$related->image)}}" style="height:300px; width:350px;" alt="Colorlib Template">

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

