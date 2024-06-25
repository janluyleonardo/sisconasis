<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Http\Requests\StorePlayerRequest;
use App\Http\Requests\UpdatePlayerRequest;
use App\Models\Team;
use Illuminate\Support\Str;
class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::with('team')->orderByDesc('id')->paginate(10);
        return view('players.index',compact('players'));
        // return $players->name . $players->team->name;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::pluck('Team_name', 'id');
        return view('players.create',compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePlayerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlayerRequest $request)
    {
        // return $request;
        // return "entro en store";
        $urlPathPhoto = "IMAGES/players/photos";
        $newPlayer = $request->all();

        if($imagePhoto = $request->file('Player_photo')){
            $newPhoto = Str::of($request->Player_name)->slug('-');
            $imagePhotoPlayer = "Photo-".$newPhoto.".".$imagePhoto->extension();
            $imagePhoto->move($urlPathPhoto,$imagePhotoPlayer);
            $newPlayer['Player_photo'] = $imagePhotoPlayer;
        }
        // return $newPlayer;
        try {
            Player::create($newPlayer);
            return redirect()->route('players.index')->banner('Jugador creado con éxito');
        } catch (\Throwable $th) {
            return redirect()->route('players.index')->dangerBanner('Jugador no fue credo por: '.$th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlayerRequest  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlayerRequest $request, Player $player)
    {
        try {
            $player->update($request->all());
            return redirect()->route('players.index')->banner('Jugador actualizado exitosamente.');
        } catch (\Throwable $th) {
            return redirect()->route('players.index')->dangerBanner('Jugador no actualizado por: '.$th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        try {
            $player->delete();
            return redirect()->route('players.index')->banner('Jugador eliminado con éxito');
        } catch (\Throwable $th) {
            return redirect()->route('players.index')->dangerBanner('Jugador no fue eliminado por: '.$th->getMessage());
        }
    }
}
