<?php

namespace App\Http\Controllers\Admin;

use App\Champion;
use DemeterChain\C;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChampionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $champions=Champion::all();
        return view('admin.champions.index',['items'=>$champions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.champions.add');
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
            'ar_title'=>'required|string|max:191',
            'en_title'=>'required|string|max:191',
            'image' => 'required|image',
        ]);

        $inputs=$request->all();
        if ($request->hasFile('image')){

            $inputs['image']=uploader($request,'image');
        }

        Champion::create($inputs);
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
    public function edit(Champion $champion)
    {
        return view('admin.champions.edit',['item'=>$champion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Champion $champion)
    {
        $this->validate($request,[
            'ar_title'=>'required|string|max:191',
            'en_title'=>'required|string|max:191',
            'image' => 'sometimes|image',
        ]);

        $inputs=$request->all();
        if ($request->hasFile('image')){

            $inputs['image']=uploader($request,'image');
        }

        $champion->update($inputs);
        popup('update');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Champion $champion)
    {
        $champion->delete();
        popup('delete');
        return back();
    }
}
