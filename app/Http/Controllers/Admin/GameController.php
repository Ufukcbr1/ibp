<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datalist = Game::all();
        return view( 'others.admin-index.game', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $datalist = Game::all();
        return view( '/others.admin-index.game_add', ['datalist'=>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = new Game;


        $data->title =$request->input( 'title');
        $data->keywords = $request->input( 'keywords');
        $data->description = $request->input( 'description');
        $data->image=Storage::putFile('images',$request->file( 'image'));
        $data->detail= $request->input('detail');
        $data->save();
        return redirect()->route('admin_game');
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        //
    }
    public function list()
    {
        $datalist = Game::all();
        return view( 'layouts.home_games', ['datalist' => $datalist]);


    }
}
