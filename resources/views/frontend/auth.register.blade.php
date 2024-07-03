@extends('frontend.layout')

@section('content')
<div class="container">
    <h1>Register</h1>
    <!-- Registration Form -->
    <form method="POST" action="{{ route('register') }}">
        @csrf <!-- CSRF protection -->

        <!-- Name Field -->
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <!-- Email Field -->
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <!-- Password Field -->
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <!-- Confirm Password Field -->
        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
        </div>

        <!-- Register Button -->
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
@endsection
