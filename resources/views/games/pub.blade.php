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
              
              <form onsubmit="return confirm('Are you sure you want return it?')" class="d-inline-block float-right" method="post" action="{{route('games.back', $game->id)}}">
                @csrf
                @method('put')
                <button type="submit" class="btn btn-outline-primary">Return</button>
              </form>
          </div>

          
        </div>
        
      @endforeach
      <a href="{{route('games.index')}}" class="btn btn-outline-success mt-2 mb-2">Back</a>


  @endsection
