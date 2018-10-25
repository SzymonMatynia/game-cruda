<?php

namespace App\Http\Controllers;
use App\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
class GameController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::orderBy('id', 'description')->paginate(5);
        return view('games.index', ['games' => $games]);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
            'description' => 'required|min:10',
        ]);
        Game::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        session()->flash('message', 'Game has been added successfuly!');
        return redirect(route('games.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('games.show', ['game' => $game]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        return view('games.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        $game->title  = $request->title;
        $game->description = $request->description;
        $game->save();
        session()->flash('message', 'Game has been updated successfuly!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        // not exactly deleting records, just turning them off.
        $game->active = 0;
        $game->save();
        //$game->delete(); /* i avoid deleting records, because database will go crazy. But if u want you can uncomment it and comment upper one.*/
        return redirect(route('games.index'));
    }


    
    public function pub(Game $game)
    {
        $id = Auth::user()->getId();
        $games = Game::All()->where('user_id', '=', $id);
        return view('games.pub', ['games' => $games]);
    }

    public function gameDelete(){
        // ..
    }

    public function gameAdd(){
        //...
    }


}
