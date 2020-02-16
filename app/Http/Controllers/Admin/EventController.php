<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::latest()->get();
        return view('admin.events.index', ['items' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ar_title' => 'required|string|max:191',
            'en_title' => 'required|string|max:191',
            'ar_description' => 'required',
            'en_description' => 'required',
            'attach' => 'required'
        ]);

        Event::create($request->all());
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
    public function edit(Event $event)
    {
        return view('admin.events.edit', ['item' => $event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'ar_title' => 'required|string|max:191',
            'en_title' => 'required|string|max:191',
            'ar_description' => 'required',
            'en_description' => 'required'
        ]);

        $event->update($request->all());
        popup('add');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        if (!empty($event->attach)) {
            foreach (json_decode($event->attach) as $lst) {
                deleteImg($lst);
            }
        }
        $event->delete();
        popup('delete');
        return back();
    }
}
