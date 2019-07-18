<?php

namespace App\Http\Controllers\Admin;

use App\Permission;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.permissions.index', ['items' => $permissions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::find($request->user_id);
        dd($request->user_id);

        if (!$user->permissions()->where('permission_id', $request->permission_id)->exists()) {
            $user->permissions()->syncWithoutDetaching($request->permission_id);
        }

        alert()->success('تم اضافة الصلاحية بنجاح !')->autoclose(5000);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        $items = $permission->users;

        return view('admin.permissions.show', ['permission' => $permission, 'items' => $items]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function delete_user(Request $request, $id)
    {
        $user = User::find($request->id)->permissions()->detach($request->permission_id);
        alert()->success('تم حذف الصلاحية بنجاح !')->autoclose(5000);

        return back();
    }
}
