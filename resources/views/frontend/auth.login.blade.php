@extends('frontend.layout')

@section('content')
<div class="container">
    <h1>Login</h1>
    <!-- Login Form -->
    <form method="POST" action="{{ route('login') }}">
        @csrf <!-- CSRF protection -->

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

        <!-- Login Button -->
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection
