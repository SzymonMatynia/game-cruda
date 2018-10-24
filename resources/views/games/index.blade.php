@extends('master')
  @section('content')
      <h1>All Games</h1>
    @if(session()->has('message'))
      <div class="alert alert-success">
        {{session()->get('message')}}
        
      </div>
    @endif
      @foreach($games as $game)
        @if ($game->active)
        <div class="card m-2">
          <div class="card-body">
            <h4>
              <a href="{{route('games.show', $game->id)}}">
                <!--{{$game->id}}. -->{{$game->title}}
              </a>
              @if(Auth::check() && Auth::user()->admin)
              <a href="{{route('games.edit', $game->id)}}" class="btn btn-outline-success">
                Edit
              </a>
              
              <form onsubmit="return confirm('Are you sure you want delete it?')" class="d-inline-block" method="post" action="{{route('games.destroy', $game->id)}}">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-outline-danger">Delete</button>
              </form>
              @endif
            </h4>
          </div>
        </div>
        @endif
      @endforeach
      <div class="mt-4">
      {{$games->links()}}
    </div>
  @endsection
