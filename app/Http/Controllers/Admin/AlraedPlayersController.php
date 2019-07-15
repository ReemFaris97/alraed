<?php

namespace App\Http\Controllers\Admin;

use App\OurTeam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlraedPlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members=OurTeam::all();
        return view('admin.our_team.index',['items'=>$members]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.our_team.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'ar_name' => 'required|string|max:191',
            'en_name' => 'required|string|max:191',
            'ar_job_title' => 'required|string|max:191',
            'en_job_title' => 'required|string|max:191',
            'ar_description' => 'required|string',
            'en_description' => 'required|string',
            'image' => 'required|image|'
        ]);

        $inputs = $request->all();

        if ($request->hasFile('image')) {
            $inputs['image'] = uploader($request, 'image');
        }
        OurTeam::create($inputs);
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
    public function edit(OurTeam $ourTeam)
    {
        return view('admin.our_team.edit',['item'=>$ourTeam]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OurTeam $ourTeam)
    {
        $this->validate($request,[
            'ar_name' => 'required|string|max:191',
            'en_name' => 'required|string|max:191',
            'ar_job_title' => 'required|string|max:191',
            'en_job_title' => 'required|string|max:191',
            'ar_description' => 'required|string',
            'en_description' => 'required|string',
            'image' => 'sometimes|image|'
        ]);

        $inputs = $request->all();

        if ($request->hasFile('image')) {
            $inputs['image'] = uploader($request, 'image');
        }

        $ourTeam->update($inputs);
        popup('update');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(OurTeam $ourTeam)
    {
        $ourTeam->delete();
        popup('delete');
        return back();
    }
}
