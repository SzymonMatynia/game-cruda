@extends('master')
      @section('content')
        <div class="flex-center position-ref full-height">
            <!-- może się przydać.. kiedyś xD
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


            <h1>Witamy w wypożyczalni gier, głównie Heroes3.</h1>
            <p>Aby wypożyczyć grę musisz być zarejestrowanym użytkownikiem portalu.</p>
            <p>Po wypożyczeniu gry zostaniesz przekierowany do wypożyczalni!</p>
        </div>
    @endsection
