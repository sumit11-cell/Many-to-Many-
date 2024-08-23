<!-- resources/views/users/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>User Details</h1>
    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Roles:</strong></p>
    <ul>
        @foreach($user->roles as $role)
            <li>{{ $role->name }}</li>
        @endforeach
    </ul>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to Users</a>
</div>
@endsection
