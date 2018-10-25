<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <meta name="description" content="Free games library">
    <meta name="keywords" content="Games, free, Heroes3, CS:GO, LoL, AoE, legal, notpiratebay">
    <meta name="author" content="Eterxoz">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

      <title>Wypożyczalnia gierek</title>
    </head>
    <body>
        <nav class=" text-white navbar navbar-expand-lg navbar-light bg-dark">
      <a class="navbar-brand text-light" href="{{url('/')}}">Game-Rental</a> <!-- do zmiany link do home -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link text-light" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Games
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @if(Auth::check() && Auth::user()->admin)
              <a class="dropdown-item" href="{{route('games.create')}}">Add a game</a>
              @endif
              <a class="dropdown-item" href="{{route('games.index')}}">Show games</a>
              @auth
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{route('games.pub')}}">My games  library</a>
              @endauth
            </div>
          </li>
        </ul>
        @auth
        <form class="form-inline my-2 my-lg-0" method="post" action="{{route('logout')}}">
          @csrf
          <div class="mr-2">
            Logged as
            @if(Auth::user()->admin)
              Admin
            @endif: {{Auth::user()->email}}
          </div>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
        </form>
        @else
        <a class="btn btn-outline-primary my-2 my-sm-0" href="{{route('login')}}">Login<a>
        <a class="btn btn-outline-primary ml-2 my-2 my-sm-0" href="{{ route('register') }}">Register</a>

        @endauth
      </div>
    </nav>
  	<div class="container">
  		@yield('content')
  	</div>
    

    <footer class="footer bg-dark text-white text-center">
      All right reserved Eterxoz &copy {{date('Y')}}
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>