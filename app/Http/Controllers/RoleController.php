<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('role.index', [
            'roles' => $roles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Role $role)
    {
        $request->validate([
            'intitule' => 'required|unique:roles,intitule',
        ]);

        $role->intitule = $request->intitule;
        $role->save();
        return redirect()->route('role.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
    }

    public function update(Role $role){
        return view('role.update', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function change(RoleRequest $request, Role $role)
    {
        $role->intitule = $request->intitule;
        $role->save();
        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('role.index');
    }
}
