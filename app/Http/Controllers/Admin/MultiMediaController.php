<?php

namespace App\Http\Controllers\Admin;

use App\Multimedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MultiMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $media = Multimedia::all();
        return view('admin.multi_media.index', ['items' => $media]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.multi_media.add');
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
            'image' => 'required',
            'images[]' => 'nullable|array',
            'images.*' => 'nullable|image|max:3500',
            'type' => 'required|in:image,video'
        ]);

        $inputs = $request->all();

        if ($request->hasFile('image')) {
            $inputs['image'] = uploader($request, 'image');
        }
        $multimedia = Multimedia::create($inputs);
        if ($request->has('images')) {
            $imgs = $request->images;
            foreach ($imgs as $img) {
                $multimedia->images()->create(['path' => $img]);
            }
        }
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
    public function edit(Multimedia $multimedia)
    {
        return view('admin.multi_media.edit', ['item' => $multimedia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Multimedia $multimedia)
    {
        $this->validate($request, [
            'ar_title' => 'required|string|max:191',
            'en_title' => 'required|string|max:191',
            'ar_description' => 'required|string',
            'en_description' => 'required|string',
            'image' => 'nullable',
            'images[]' => 'nullable|array',
            'images.*' => 'nullable|image|max:3500',
            'type' => 'required|in:image,video'
        ]);

        $inputs = $request->all();

        if ($request->hasFile('image')) {
            $inputs['image'] = uploader($request, 'image');
        }

        if ($request->has('images')) {
            $imgs = $request->images;
            foreach ($imgs as $img) {
                $multimedia->images()->create(['path' => $img]);
            }
        }

        $multimedia->update($inputs);
        popup('update');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Multimedia $multimedia)
    {
        $multimedia->delete();
        popup('delete');
        return back();
    }
}
