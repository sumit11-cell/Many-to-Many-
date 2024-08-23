<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    // List all roles
    public function index() {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    // Show form to create a new role
    public function create() {
        return view('roles.create');
    }

    // Store a new role in the database
    public function store(Request $request) {
        Role::create($request->all());
        return redirect()->route('roles.index');
    }

    // Show a single role
    public function show(Role $role) {
        return view('roles.show', compact('role'));
    }

    // Show form to edit a role
    public function edit(Role $role) {
        return view('roles.edit', compact('role'));
    }

    // Update a role in the database
    public function update(Request $request, Role $role) {
        $role->update($request->all());
        return redirect()->route('roles.index');
    }

    // Delete a role
    public function destroy(Role $role) {
        $role->delete();
        return redirect()->route('roles.index');
    }
}

