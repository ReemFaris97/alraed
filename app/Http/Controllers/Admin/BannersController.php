<?php

namespace App\Http\Controllers\Admin;

use App\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners=Banner::all();
        return view('admin.banners.index',['items'=>$banners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banners.add');
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
            'ar_title' => 'required|string|max:191',
            'en_title' => 'required|string|max:191',
            'ar_description' => 'required|string',
            'en_description' => 'required|string',
            'image' => 'required|image|'
        ]);

        $inputs = $request->all();

        if ($request->hasFile('image')) {
            $inputs['image'] = uploader($request, 'image');
        }
        Banner::create($inputs);
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
    public function edit(Banner $banner)
    {
        return view('admin.banners.edit',['item'=>$banner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $this->validate($request, [
            'ar_title' => 'required|string|max:191',
            'en_title' => 'required|string|max:191',
            'ar_description' => 'required|string',
            'en_description' => 'required|string',
            'image' => 'required|image|'
        ]);

        $inputs = $request->all();

        if ($request->hasFile('image')) {
            $inputs['image'] = uploader($request, 'image');
        }

        $banner->update($inputs);
        popup('update');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        popup('delete');
        return back();
    }
}
