@extends('layouts.front')
@section('title', 'Search Animals')

@section('content')
    @if(Session::has('message'))
        <div class="alert alert-success alert-block text-center">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{!! session('message') !!}</strong>
        </div>
    @endif
    {{-- searched painting display section --}}
    <div class="row mt-3 ml-5">
        <div class="col-md-12 heading-section text-center ftco-animate">
            <h3 class="mb-4">Related Searched Animals</h3>
        </div>

        @foreach ($search_mammal as $mammal)
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
                                <p class="price"><span class="price-sale">{{$mammal->given_name}}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        @foreach ($search_bird as $bird)
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

        @foreach ($search_fish as $fish)
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

        @foreach ($search_reptiles as $reptile)
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

@endsection
