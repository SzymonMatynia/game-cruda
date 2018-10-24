@extends('master')
  @section('content')
      <h1>About game</h1>

        <div class="card">
          <div class="card-header">
            <h4><!--{{$game->id}}. -->{{$game->title}}</h4>
          </div>
          <div class="card-body">
            <p>{{$game->description}}</p>
          </div>


        </div>
        <a href="{{route('games.index')}}" class="btn btn-outline-success mt-2 mb-2">Back</a>

  @endsection
