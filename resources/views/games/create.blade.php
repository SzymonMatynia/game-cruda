@extends('master')
  @section('content')
    <h1>Add a game</h1>
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
    @endif    <form action="{{route('games.store')}}" method="post">
      @csrf
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" placeholder="Game title" required name="title" id="title" class="form-control">
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <input type="text" placeholder="Game description" required name="description" id="description" cols="30" rows="30" class="form-control">
      </div>
      <div class="form-group">
        <label for="title"></label>
        <button type="submit" class="btn btn-outline-primary">Add a game</button>
      </div>
    </form>
  @endsection
