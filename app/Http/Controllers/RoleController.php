<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        $roles=Role::all();
        // dd($roles)->all();
        return view('backend.pages.role.index',compact('roles'));
    }
    public function create(){
        return view('backend.pages.role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Role::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'status'=>$request->status 
        ]);
        return to_route('role.index');
    }


    public function show(string $id)
    {
    
    }

    public function edit(string $id){
        $role=Role::find($id);
        return view('backend.pages.role.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $role=Role::find($id);
        $role->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'status'=>$request->status 
        ]);
        return to_route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role=Role::find($id)->delete();
        return to_route('role.index');
    }
}
