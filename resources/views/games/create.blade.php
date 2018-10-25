
@extends('master')

  @section('content')
  @if(Auth::check() && Auth::user()->admin)
    <h1>Add a game</h1>
    @if($errors->all())
      <div class="alert alert-danger">
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </div>
    @endif

    <form action="{{route('games.store')}}" method="post">
      @csrf
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" placeholder="Game title" maxlength="32" required name="title" id="title" class="form-control">
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
      @else
      <h1>That's the wrong Number ( ͡° ͜ʖ ͡°)</h1>
      <p>If you see this, you shouldn't be here</p>

  @endif 
  @endsection

