<?php

namespace App\Http\Controllers\Admin;

use App\Achievement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function index()
    {
        return view('admin.achievements.index')->with('items',Achievement::latest()->get());
    }

    public function create()
    {
        return view('admin.achievements.add');
    }

    public function store(Request $request)
    {
       $input= $request->validate(['name.ar'=>'required|string','name.en'=>'required|string','url'=>'required|file']);
       Achievement::create($input);
       popup('add');
       return back();
    }

    public function edit(Achievement $achievement)
    {
        return view('admin.achievements.edit')->with('achievement',$achievement);
    }

    public function update(Request $request,Achievement $achievement)
    {
        $inputs= $request->validate(['name.ar'=>'required|string','name.en'=>'required|string','url'=>'sometimes|nullable|file']);
        $achievement->update($inputs);
        popup('update');
        return back();

    }

    public function destroy(Achievement $achievement)
    {
        $achievement->delete();
        popup('delete');
        return back();

    }
}
