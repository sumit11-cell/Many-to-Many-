<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // List all users
    public function index() {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // Show form to create a new user
    public function create() {
        $roles = Role::all(); // To display roles in the form
        return view('users.create', compact('roles'));
    }

    // Store a new user in the database
    public function store(Request $request) {
        $user = User::create($request->all());
        $user->roles()->attach($request->roles); // Attach roles during creation
        return redirect()->route('users.index');
    }

    // Show a single user
    public function show(User $user) {
        return view('users.show', compact('user'));
    }

    // Show form to edit a user
    public function edit(User $user) {
        $roles = Role::all(); // To display roles in the edit form
        return view('users.edit', compact('user', 'roles'));
    }

    // Update a user in the database
    public function update(Request $request, User $user) {
        $user->update($request->all());
        $user->roles()->sync($request->roles); // Sync roles during update
        return redirect()->route('users.index');
    }

    // Delete a user
    public function destroy(User $user) {
        $user->delete();
        return redirect()->route('users.index');
    }

    // Attach a role to a user
    public function attachRole(Request $request, User $user) {
        $user->roles()->attach($request->role_id);
        return redirect()->route('users.show', $user);
    }

    // Detach a role from a user
    public function detachRole(User $user, Role $role) {
        $user->roles()->detach($role->id);
        return redirect()->route('users.show', $user);
    }
}

