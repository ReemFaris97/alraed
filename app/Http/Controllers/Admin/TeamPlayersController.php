<?php

namespace App\Http\Controllers\Admin;

use App\TeamPlayers;
use foo\bar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamPlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players=TeamPlayers::all();
        return view('admin.players.index',['items'=>$players]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.players.add');
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
            'country_id'=>'required|exists:countries,id',
            'team_id'=>'required|exists:teams,id',
            'ar_name'=>'required|string|max:191',
            'en_name'=>'required|string|max:191',
            'age'=>'required|numeric',
            'length'=>'required|numeric',
            'position'=>'required|in:goal_keeper,defender,mid_line,attacking',
            'appearance'=>'required|numeric',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $inputs=$request->all();

        if ($request->hasFile('image')){

            $inputs['image']= uploader($request,'image');
        }
        TeamPlayers::create($inputs);
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
    public function edit(TeamPlayers $players)
    {
        return view('admin.players.edit',['item'=>$players]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamPlayers $players)
    {
        $this->validate($request,[
            'country_id'=>'required|exists:countries,id',
            'team_id'=>'required|exists:teams,id',
            'ar_name'=>'required|string|max:191',
            'en_name'=>'required|string|max:191',
            'age'=>'required|numeric',
            'length'=>'required|numeric',
            'position'=>'required|in:goal_keeper,defender,mid_line,attacking',
            'appearance'=>'required|numeric',
            'image'=>'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $inputs=$request->all();

        if ($request->hasFile('image')){

            $inputs['image']= uploader($request,'image');
        }
        $players->update($inputs);
        popup('update');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamPlayers $players)
    {
        $players->delete();
        popup('delete');
        return back();
    }
}
