<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

// Home route
Route::get('/', function () {
    return view('welcome');
});

// User Routes
Route::get('/users', [UserController::class, 'index'])->name('users.index'); // List all users
Route::get('/users/create', [UserController::class, 'create'])->name('users.create'); // Show form to create a new user
Route::post('/users', [UserController::class, 'store'])->name('users.store'); // Store a new user
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show'); // Show a single user
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit'); // Show form to edit a user
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update'); // Update a user
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy'); // Delete a user

// Role Routes
Route::get('/roles', [RoleController::class, 'index'])->name('roles.index'); // List all roles
Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create'); // Show form to create a new role
Route::post('/roles', [RoleController::class, 'store'])->name('roles.store'); // Store a new role
Route::get('/roles/{role}', [RoleController::class, 'show'])->name('roles.show'); // Show a single role
Route::get('/roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit'); // Show form to edit a role
Route::put('/roles/{role}', [RoleController::class, 'update'])->name('roles.update'); // Update a role
Route::delete('/roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy'); // Delete a role


// Attaching and Detaching Roles to Users
Route::post('/users/{user}/roles', [UserController::class, 'attachRole'])->name('users.attachRole'); // Attach a role to a user
Route::delete('/users/{user}/roles/{role}', [UserController::class, 'detachRole'])->name('users.detachRole'); // Detach a role from a user

