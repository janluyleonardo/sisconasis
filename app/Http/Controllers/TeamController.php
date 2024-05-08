<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::orderByDesc('id')->paginate(10);
        return view('teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTeamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeamRequest $request)
    {
        $urlPathShield = "shields";
        $newTeam = $request->all();

        if($imageShield = $request->file('Team_shield')){
            $newShield = Str::of($request->Team_name)->slug('-');
            $imageShieldTeam = "Shield-".$newShield.".".$imageShield->extension();
            $imageShield->move($urlPathShield,$imageShieldTeam);
            $newTeam['Team_shield'] = $imageShieldTeam;
        }

        try {
            Team::create($newTeam);
            return redirect()->route('teams.index')->banner('Equipo creado con éxito');
        } catch (\Throwable $th) {
            return redirect()->route('teams.index')->dangerBanner('Equipo no fue credo por: '.$th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeamRequest  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeamRequest $request, Team $team)
    {
        return $request;
        try {
            $team->update($request->all());
            return redirect()->route('teams.index')->banner('Equipo actualizado exitosamente.');
        } catch (\Throwable $th) {
            return redirect()->route('teams.index')->dangerBanner('Equipo no actualizado por: '.$th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        try {
            $team->delete();
            return redirect()->route('teams.index')->banner('Equipo eliminado con éxito');
        } catch (\Throwable $th) {
            return redirect()->route('teams.index')->dangerBanner('Equipo no fue eliminado por: '.$th->getMessage());
        }
    }
}
