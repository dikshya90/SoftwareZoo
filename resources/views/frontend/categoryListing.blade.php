@extends('layouts.front')
@section('title', 'Animal Categories')

@section('content')

<section class="ftco-section ftco-no-pb ftco-no-pt bg-light" style="margin-top: 5%;">
	<div class="container">
        <div class="row justify-content-center">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<!-- <span class="subheading">Featured Products</span> -->
				<h3 class="mb-4">Categories</h3>
				<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> -->
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

        {{-- painting area --}}
        <div class="row">
            <div class="col-md-12 heading-section text-center ftco-animate">
				<!-- <span class="subheading">Featured Products</span> -->
				<h3 class="mb-4">Categorywise Animals</h3>
                <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> -->
            </div>
            @foreach ($mammals->mammals as $mammal)

            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="{{url('/singleMammal/'.$mammal->id)}}" class="img-prod"><img class="img-fluid" src="{{asset('/admin/images/animals/'.$mammal->image)}}" alt="Colorlib Template" style="height:260px; width:380px;">
                        {{-- <span class="status">30%</span> --}}
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">{{$mammal->name}}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="price-sale">$400</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            {{-- <div class="col-md-12 heading-section text-center ftco-animate">
				<h3 class="mb-4">Birds</h3>
            </div> --}}
            @foreach ($birds->birds as $bird)
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
                                <p class="price"><span class="price-sale">$400</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            {{-- <div class="col-md-12 heading-section text-center ftco-animate">
				<h3 class="mb-4">Fish</h3>
            </div> --}}
            {{-- @if ($category->id == 8) --}}
            @foreach ($fish->fish as $fish)
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
                                <p class="price"><span class="price-sale">$400</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            {{-- <div class="col-md-12 heading-section text-center ftco-animate">
				<h3 class="mb-4">Reptiles and Amphibians</h3>
            </div> --}}
            @foreach ($reptiles->reptiles as $reptile)
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
                                <p class="price"><span class="price-sale">$400</span></p>
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
