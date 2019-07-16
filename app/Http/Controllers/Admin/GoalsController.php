<?php

namespace App\Http\Controllers\Admin;

use App\Goal;
use App\TeamPlayers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goals = Goal::all();
        return view('admin.goals.index', ['items'=> $goals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.goals.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'match_id' => 'required|exists:matches,id',
            'team_id' => 'required|exists:teams,id',
            'player_id' => 'required|exists:team_players,id',
            'minuit' => 'required',
        ]);
        $inputs = $request->all();

        Goal::create($inputs);
        popup('add');
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Goal $goal)
    {
        return view('admin.goals.edit',['item'=>$goal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Goal $goal)
    {
        $this->validate($request, [
            'match_id' => 'required|exists:matches,id',
            'team_id' => 'required|exists:teams,id',
            'player_id' => 'required|exists:team_players,id',
            'minuit' => 'required',
        ]);
        $inputs = $request->all();

        $goal->update($inputs);
        popup('update');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Goal $goal)
    {
        $goal->delete();
        popup('delete');
        return back();
    }

    public function TeamAjax($id){
        $player=TeamPlayers::select('ar_name','id')->where('team_id',$id)->get();
        return response()->json($player);
    }
}
