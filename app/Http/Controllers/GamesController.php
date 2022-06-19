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

    public function edit($id)
    {
        $game = game::where('id', $id)->first();
        if (!empty($game)) {
            // dd($game);
            return view('games.edit', ['game' => $game]);
        } else {
            return redirect()->route('games-index');
        }
    }

    public function update(Request $request, $id)
    {

        // dd($request);
        $data = [
            'name' => $request->name,
            'category' => $request->category,
            'year' => $request->year,
            'price' => $request->price,
        ];

        game::where('id', $id)->update($data);
        return redirect()->route('games-index');
    }

    public function destroy($id)
    {
        // dd($id);
        game::where('id', $id)->delete();
        // echo "Delete Success!";
        return redirect()->route('games-index');
    }
}
