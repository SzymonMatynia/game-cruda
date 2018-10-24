@extends('master')
  @section('content')
  @if(Auth::check() && Auth::user()->admin)
    <h1>Update the game</h1>
    @if($errors->all())
      <div class="alert alert-danger">
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </div>
    @endif
    @if(session()->has('message'))
      <div class="alert alert-success">
        {{session()->get('message')}}
        
      </div>
    @endif
    <form action="{{route('games.update', $game->id)}}" method="post">
      @csrf
      @method('put')
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" placeholder="Game title" value="{{$game->title}}" required name="title" id="title" class="form-control">
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <input type="text" placeholder="Game description" value="{{$game->description}}" required name="description" id="description" cols="30" rows="30" class="form-control">
      </div>
      <div class="form-group">
        <label for="title"></label>
        <button type="submit" class="btn btn-outline-primary">Update the game</button>
      </div>
    </form>
    @else
      <h1>You havent got Admin rights! Call for Admin</h1>
    @endif
  @endsection
