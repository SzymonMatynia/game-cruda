@extends('master')
      @section('content')
        <div class="flex-center position-ref full-height">
            <!-- może się przydać.. kiedyś .. no i się przydało w innej karcie
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div> 
            @endif-->

            <div class="card  mt-2 mb-2">
                <div class="card-header ">
                    <h1>Welcome in our Game-Rental service!</h1>
                </div>
                <div class="card-body">
                    <p>Guests can only read about our games...</p>
                    <p>Only registered users could borrow games.</p>
                    <p>You will be automatically redirected after successful registration/login to our public games library!</p>
                    @if(!Auth::check())
                    <a href="{{route('login')}}">Login</a> / <a href="{{route('register')}}">Register</a> Today!
                    @endif
                </div>

            </div>
            

        </div>
    @endsection
