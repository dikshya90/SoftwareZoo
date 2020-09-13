@extends('layouts.front')
@section('title', 'Book Tickets')

@section('content')
<section class="ftco-section contact-section bg-light">
    <div class="container">
        @if(Session::has('message'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{!! session('message') !!}</strong>
            </div>
        @endif
        <div class="row d-flex mb-5 contact-info">
            <div class="w-100"></div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                        <p><span>Address:</span> Northwest, England</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                        <p><span>Phone:</span> <a href="tel://1234567920">+44 7911 123456</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                        <p><span>Email:</span> <a href="#">info@claybrook.com</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                        <p><span>Website</span> <a href="#">www.claybrookzoo.com</a></p>
                    </div>
                </div>
        </div>
        <div class="row block-9 justify-content-center">
            <div class="col-md-10 order-md-last d-flex">
                <form action="{{route('contact.ticketBooking')}}" class="bg-white p-5 contact-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="form-group text-center text-bold" style="font-weight: bold; margin-bottom: 8%;">
                        Book Tickets
                    </div>

                    <div class="form-group">
                        <label for="name">Your name</label>
                        <input type="text" name="name" id="name" class="form-control" required = "">
                    </div>

                    <div class="form-group">
                        <label for="">Your Email</label>
                        <input type="email" name="email" id="email" class="form-control" required = "">
                    </div>

                    <div class="form-group">
                        <label for="">Your Contact</label>
                        <input type="text" name="contact" id="contact" class="form-control" required = "">
                    </div>

                    <div class="form-group">
                        <label for="wingspan">Your Age</label>
                        <select class="form-control" name="age_group">
                            <option value="children">0 - 12</option>
                            <option value="teen">13 - 19</option>
                            <option value="adult">20 - 50</option>
                            <option value="old">Above 50</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Number of tickets</label>
                        <input type="number" name="total_ticket" id="total_ticket" class="form-control" required = "">
                    </div>

                    <div class="form-group">
                        <button type="submit" value="Book" class="btn btn-primary py-3 px-5">Book</button>
                        {{-- <input type="submit" value="Add to Basket" class="btn btn-primary py-3 px-5"> --}}
                    </div>

                </form>

            </div>

            {{-- <div class="col-md-6 d-flex">
                <div id="map" class="bg-white"></div>
            </div> --}}
        </div>
    </div>
</section>
@endsection
