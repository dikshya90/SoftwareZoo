@extends('layouts.front')

@section('title', 'About Us')

@section('content')

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light" style="margin-top: 5%;">
        <div class="container" style="margin-bottom: 7%;">
            <div class="row">
                <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('frontend/images/head4.jpg')}});"></div>
                <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section-bold mb-4 mt-md-5">
                        <div class="ml-md-0">
                            <h2 class="mb-4">Welcome to Claybrook Zoo, an Online Website</h2>
                            <h4 style="font-family: Arial, Helvetica, sans-serif; color: mediumseagreen;">Visit the Zoo. Feel the beauty of Nature.</h4>
                        </div>
                    </div>
                    <div class="pb-md-5">
                        <p>Claybrook Zoo is a small family-oriented zoo in the Northwest of England. Established in 1965,
                            the zoo has a long history of providing educational support resources for members of the public
                            to enhance their visiting experience. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
