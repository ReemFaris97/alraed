<?php

namespace App\Http\Controllers\Admin;

use App\Match;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches=Match::all();
        return view('admin.matches.index',['items'=>$matches]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.matches.add');
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
            'champion_id'=>'required|exists:champions,id',
            'stadium'=>'required|string|max:191',
            'ar_name'=>'required|string|max:191',
            'en_name'=>'required|string|max:191',
            'date'=>'required'
        ]);
        $inputs=$request->all();
        Match::create($inputs);
        popup('add');
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Match $match)
    {
        return view('admin.matches.edit',['item'=>$match]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Match $match)
    {
        $this->validate($request,[
            'first_team_id'=>'required|exists:teams,id',
            'second_team_id'=>'required|exists:teams,id',
            'champion_id'=>'required|exists:champions,id',
            'stadium'=>'required|string|max:191',
            'ar_name'=>'required|string|max:191',
            'en_name'=>'required|string|max:191',
            'date'=>'required'
        ]);
        $inputs=$request->all();
        $match->update($inputs);
        popup('update');
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Match $match)
    {
        $match->delete();
        popup('delete');
        return back();
    }
}
