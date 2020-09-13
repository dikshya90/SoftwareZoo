<!-- upper header section -->

    <div class="py-1 bg-primary">
        <div class="container mt-2">
            <div class="row no-gutters d-flex align-items-center">
                <div class="row d-flex col-md-12">
                    <div class="col-md-4 d-flex  justify-content-center">
                        <form action="{{url('/searchAnimals')}}">
                            @csrf
                            <input type="text" name="animals" placeholder="Search animals" style="border-radius: 3px; height:33px;">
                            <span>Go</span>
                            {{-- <button type="submit" style="border:0px; height:33px; margin-left:-3px">Search</button> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- navigation bar section -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img class="img-fluid" src="{{asset('frontend/images/logo.jpg')}}" alt="Colorlib Template" style="height:60px; width:60px;"> Claybrook Zoo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Exhibition</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="{{url('/ongoingExhibition')}}">Current Exhibition</a>
                            <a class="dropdown-item" href="{{url('/comingExhibition')}}">Coming Exhibition</a>
                        </div>
                    </li> --}}
                    <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{route('contact.index')}}" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="{{url('/ticket')}}" class="nav-link">Book tickets</a></li>
                    <li class="nav-item"><a href="{{url('/sponsor')}}" class="nav-link">Apply To Sponsor</a></li>

                    {{-- @if (empty(Auth::guard('customers')->check()))
                        <li class="nav-item"><a href="{{ url('/loginCustomer') }}" class="nav-link">Login</a></li>
                        <li class="nav-item"><a href="{{ url('/registerCustomer') }}" class="nav-link">Sign Up</a></li>
                    @else
                        <li class="nav-item"><a href="#" class="nav-link">{{ \Auth::guard('customers')->user()->name }}'s Account</a></li>
                        <li class="nav-item"><a href="{{url('/userLogout')}}" class="nav-link">Logout</a></li>
                    @endif --}}
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
