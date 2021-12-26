<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OtherGame\OtherGameStoreRequest;
use App\Http\Requests\OtherGame\OtherGameUpdateRequest;
use App\OtherGame;
use Illuminate\Http\Request;

class OtherGameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.other-games.index', ['items' => OtherGame::with('images')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.other-games.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  OtherGameStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OtherGameStoreRequest $request)
    {
        $model = OtherGame::create($request->validated());
        $model->createImages($request->path);
        popup('add');
        return redirect(route('admin.other-games.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OtherGame  $otherGame
     * @return \Illuminate\Http\Response
     */
    public function edit(OtherGame $otherGame)
    {
        return view('admin.other-games.edit', ['item' => $otherGame->load('images')]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  OtherGameUpdateRequest  $request
     * @param  \App\OtherGame  $otherGame
     * @return \Illuminate\Http\Response
     */
    public function update(OtherGameUpdateRequest $request, OtherGame $otherGame)
    {
        $otherGame->update($request->validated());
        if ($request->path) {
            $otherGame->createImages($request->path);
        }

        popup('update');
        return redirect(route('admin.other-games.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OtherGame  $otherGame
     * @return \Illuminate\Http\Response
     */
    public function destroy(OtherGame $otherGame)
    {
        $otherGame->delete();
        popup('delete');
        return back();
    }
}
