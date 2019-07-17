<?php

namespace App\Http\Controllers\Admin;

use App\Statistic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statistics=Statistic::all();
        return view('admin.statistics.index',['items'=>$statistics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.statistics.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'first_team_id'=>'required|exists:teams,id',
            'second_team_id'=>'required|exists:teams,id',
            'match_id'=>'required|exists:matches,id',
            'first_team_goals'=>'required|numeric',
            'second_team_goals'=>'required|numeric',
            'first_team_corners'=>'required|numeric',
            'second_team_corners'=>'required|numeric',
            'first_team_Offside'=>'required|numeric',
            'second_team_Offside'=>'required|numeric',
            'first_team_YCard'=>'required|numeric',
            'second_team_YCard'=>'required|numeric',
            'first_team_RCard'=>'required|numeric',
            'second_team_RCard'=>'required|numeric'
        ]);

        $inputs=$request->all();

        Statistic::create($inputs);
        popup('add');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Statistic $statistic)
    {
        return view('admin.statistics.show',['item'=>$statistic]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Statistic $statistic)
    {
        return view('admin.statistics.edit',['item'=>$statistic]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Statistic $statistic)
    {
        $this->validate($request,[
            'first_team_id'=>'required|exists:teams,id',
            'second_team_id'=>'required|exists:teams,id',
            'match_id'=>'required|exists:matches,id',
            'first_team_goals'=>'required|numeric',
            'second_team_goals'=>'required|numeric',
            'first_team_corners'=>'required|numeric',
            'second_team_corners'=>'required|numeric',
            'first_team_Offside'=>'required|numeric',
            'second_team_Offside'=>'required|numeric',
            'first_team_YCard'=>'required|numeric',
            'second_team_YCard'=>'required|numeric',
            'first_team_RCard'=>'required|numeric',
            'second_team_RCard'=>'required|numeric'
        ]);

        $inputs=$request->all();
        $statistic->update($inputs);
        popup('update');
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Statistic $statistic)
    {
        $statistic->delete();
        popup('delete');
        return back();
    }
}
