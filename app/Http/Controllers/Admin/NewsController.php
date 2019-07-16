<?php

namespace App\Http\Controllers\Admin;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', ['items' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.add');
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
            'category_id' => 'required|exists:categories,id',
            'ar_title' => 'required|string|max:191',
            'en_title' => 'required|string|max:191',
            'ar_description' => 'required|string',
            'en_description' => 'required|string',
            'ar_writer_name' => 'required|string|max:191',
            'en_writer_name' => 'required|string|max:191',
            'image' => 'required|image|'
        ]);

        $inputs = $request->all();

        if ($request->hasFile('image')) {
            $inputs['image'] = uploader($request, 'image');
        }
        News::create($inputs);
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
    public function edit(News $news)
    {
        return view('admin.news.edit', ['item' => $news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $this->validate($request, [
            'category_id' => 'required|exists:categories,id',
            'ar_title' => 'required|string|max:191',
            'en_title' => 'required|string|max:191',
            'ar_description' => 'required|string',
            'en_description' => 'required|string',
            'ar_writer_name' => 'required|string|max:191',
            'en_writer_name' => 'required|string|max:191',
            'image' => 'required|image|'
        ]);

        $inputs = $request->all();

        if ($request->hasFile('image')) {
            $inputs['image'] = uploader($request, 'image');
        }

        $news->update($inputs);
        popup('update');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();
        popup('delete');
        return back();
    }
}
