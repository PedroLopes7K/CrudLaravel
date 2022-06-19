<?php

namespace App\Http\Controllers;

use App\Models\game;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index()
    {

        $games = game::all();
        // dd($games);
        return view('games.index', ['games' => $games]);
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        game::create($request->all());
        return redirect()->route('games-index');
    }
}
