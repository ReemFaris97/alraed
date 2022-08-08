<?php

namespace App\Http\Controllers\Admin;

use App\FirstTeam;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = FirstTeam::get();
        return view('admin.first-teams.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.first-teams.create');
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
            'ar_name'=>'required|string|max:191',
            'en_name'=>'required|string|max:191',
            'ar_job'=>'required|string|max:191',
            'en_job'=>'required|string|max:191',
            'number'=>'required|numeric|unique:first_teams',
            'image'=>'required|image',
        ]);
        FirstTeam::create($request->all());

        popup('add');
        return redirect()->route('admin.first-teams.index');
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
    public function edit($id)
    {
        $team = FirstTeam::findOrFail($id);
        return view('admin.first-teams.edit',['item'=>$team]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $team = FirstTeam::find($id);
        $this->validate($request,[
            'ar_name'=>'required|string|max:191',
            'en_name'=>'required|string|max:191',
            'ar_job'=>'required|string|max:191',
            'en_job'=>'required|string|max:191',
            'number'=>'required|numeric|unique:first_teams,number,'. $team->id,
            'image'=>'required|image',
        ]);
        $team->update($request->all());
        popup('update');
        return redirect()->route('admin.first-teams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = FirstTeam::find($id);
        $team->delete();
        popup('delete');
        return back();
    }
}
