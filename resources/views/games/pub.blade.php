@extends('master')
  @section('content')
      <h1>Game library</h1>
      @foreach($games as $game)
        <div class="card mt-2">
          <div class="card-header">
            <h4><!--{{$game->id}}. -->{{$game->title}}</h4>
          </div>
          <div class="card-body">
            <p>{{$game->description}}</p>
          </div>

          
        </div>
        
      @endforeach
      <a href="{{route('games.index')}}" class="btn btn-outline-success mt-2 mb-2">Back</a>


  @endsection
