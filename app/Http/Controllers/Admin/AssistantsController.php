<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssistantsController extends Controller
{ /**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function index()
    {
        $assistants=User::where('role','assistant')->get();
        return view('admin.assistants.index',['items'=>$assistants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.assistants.add');
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
            'name'=>'required|string|max:191|unique:users',
            'email'=>'required|email|max:255|unique:users',
            'phone'=>'required|unique:users',
            'password'=>'required|min:6|confirmed',
            'image'=>'nullable|image',
//            'is_active'=>'required'
        ]);
        $inputs=$request->all();

        if($request->hasFile('image')){

            $inputs['image']=uploader($request,'image');
        }

        if ($request->has('password')){

            $inputs['password']=bcrypt($request->password);
        }

        User::create($inputs);
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
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.assistants.edit',['item'=>$user]);
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
        $this->validate($request,[
            'name'=>'required|string|max:191|unique:users,name' . $id,
            'email'=>'required|email|max:255|unique:users,email'. $id,
            'phone'=>'required|max:10|unique:users,phone' .$id,
            'password'=>'required|min:6|confirmed',
            'image'=>'sometimes|image',
        ]);

        $user = User::findOrFail($id);

        $inputs=$request->all();

        if($request->hasFile('image')){

            $inputs['image']=uploader($request,'image');
        }

        if ($request->has('password')){

            $inputs['password']=bcrypt($request->password);
        }

        $user->update($inputs);

        popup('update');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        popup('delete');
        return back();
    }
}
