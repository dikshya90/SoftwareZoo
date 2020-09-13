@extends('layouts.front')
@section('title', 'Claybrook Zoo')

@section('content')
    @if(Session::has('message'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{!! session('message') !!}</strong>
        </div>
    @endif
<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url({{asset('frontend/images/head6.jpg')}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                    <div class="col-md-12 ftco-animate text-center">
                        <h1 class="mb-2">Experience the Wild</h1>
                        <h4 style="color: wheat;">We promote &amp; conserve endangered species</h4>

                        <div class="row justify-content-center">
                            <p><a href="{{url('/ticket')}}" class="btn btn-primary py-3 px-3">Book Tickets</a></p>
                            <p><a href="{{url('/sponsor')}}" class="btn btn-primary py-3 px-3">Apply For Sponsorship</a></p>
                        </div>
                        <!-- <p><a href="#" class="btn btn-primary">View Details</a></p> -->
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url({{asset('frontend/images/head5.jpg')}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                    <div class="col-sm-12 ftco-animate text-center">
                        <h1 class="mb-2">Experience the Wild</h1>
                        <h4 style="color: wheat;">We promote &amp; conserve endangered species</h4>
                        <div class="row justify-content-center">
                            <p><a href="{{url('/ticket')}}" class="btn btn-primary py-3 px-3">Book Tickets</a></p>
                            <p><a href="{{url('/sponsor')}}" class="btn btn-primary py-3 px-3">Apply For Sponsorship</a></p>
                        </div>
                        <!-- <p><a href="#" class="btn btn-primary">View Details</a></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- category display section --}}
<section class="ftco-section ftco-category ftco-no-pt">
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h3 class="mb-4">Categories</h3>
			</div>
			<div class="col-md-10 mb-5 text-center">
                @if ($category->count()>0)
                    @php($count = 1)
                        <ul class="product-category">
                            <li><a href="#" class="active">All Categories</a></li>
                                @foreach ($category as $cat)
                                    <li><a href="{{url('/categoryListing/'.$cat->id)}}">{{$cat->name}}</a></li>
                                        @php($count++)
                                @endforeach
                        </ul>
                @else
                        <ul class="product-category">
                            <li class="active">No Categories</li>
                        </ul>
                @endif
			</div>
        </div>

        {{-- for mammals --}}
        <div class="row">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h3 class="mb-4">Mammals</h3>
            </div>

            {{-- @dd($mammals) --}}
            @foreach ($mammals as $mammal)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="{{url('/singleMammal/'.$mammal->id)}}" class="img-prod"><img class="img-fluid" src="{{asset('/admin/images/animals/'.$mammal->image)}}" alt="Colorlib Template" style="height:260px; width:380px;">

                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">{{$mammal->name}}</a></h3>
                            <div class="d-flex">
								<div class="pricing">
									<p class="price"><span class="price-sale">{{$mammal->given_name}}</span></p>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- reptiles and amphibians display section --}}
        <div class="row">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h3 class="mb-4">Reptiles and Amphibians</h3>
            </div>

            @foreach ($reptiles as $reptile)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="{{url('/singleReptile/'.$reptile->id)}}" class="img-prod"><img class="img-fluid" src="{{asset('/admin/images/animals/'.$reptile->image)}}" alt="Colorlib Template" style="height:260px; width:380px;">
                            {{-- <span class="status">30%</span> --}}
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">{{$reptile->name}}</a></h3>
                            <div class="d-flex">
								<div class="pricing">
									<p class="price"><span class="price-sale">{{$reptile->given_name}}</span></p>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- for birds section --}}
        <div class="row">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h3 class="mb-4">Birds</h3>
            </div>

            @foreach ($birds as $bird)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="{{url('/singleBird/'.$bird->id)}}" class="img-prod"><img class="img-fluid" src="{{asset('/admin/images/animals/'.$bird->image)}}" alt="Colorlib Template" style="height:260px; width:380px;">
                            {{-- <span class="status">30%</span> --}}
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">{{$bird->name}}</a></h3>
                            <div class="d-flex">
								<div class="pricing">
									<p class="price"><span class="price-sale">{{$bird->given_name}}</span></p>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- for fish section --}}
        <div class="row">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h3 class="mb-4">Fish</h3>
            </div>

            @foreach ($fish as $fish)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="{{url('/singleFish/'.$fish->id)}}" class="img-prod"><img class="img-fluid" src="{{asset('/admin/images/animals/'.$fish->image)}}" alt="Colorlib Template" style="height:260px; width:380px;">
                            {{-- <span class="status">30%</span> --}}
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">{{$fish->name}}</a></h3>
                            <div class="d-flex">
								<div class="pricing">
									<p class="price"><span class="price-sale">{{$fish->given_name}}</span></p>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
	</div>
</section>

{{-- <section class="ftco-section img" style="background-image: url({{asset('frontend/images/sub5.jpg')}});">
    <div class="container">
		<div class="row justify-content-start">
            <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">

            </div>
        </div>
    </div>
</section> --}}


@endsection
