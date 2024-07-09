@extends('frontend.layout')

@section('title', 'Profile')

@section('content_header')
    <h1>Profile</h1>
@endsection

@section('content')
<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">User Profile</h3>
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
            <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
        </div>
    </div>
</div>
@endsection