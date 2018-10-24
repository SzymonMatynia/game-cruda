@extends('master')
  @section('content')
      <h1>All Games</h1>
        <div class="card">
          <div class="card-header">
            <h4>{{$game->id}}. {{$game->title}}</h4>
          </div>
          <div class="card-body">
            <p>{{$game->description}}</p>
          </div>
        </div>
  @endsection
