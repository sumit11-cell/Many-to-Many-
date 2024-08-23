<!-- resources/views/roles/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Role Details</h1>
    <p><strong>Name:</strong> {{ $role->name }}</p>
    <p><strong>Users:</strong></p>
    <ul>
        @forelse($role->users as $user)
            <li>{{ $user->name }}</li>
        @empty
            <li>No users assigned to this role.</li>
        @endforelse
    </ul>
    <a href="{{ route('roles.index') }}" class="btn btn-secondary">Back to Roles</a>
</div>
@endsection
