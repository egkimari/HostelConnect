@extends('frontend.layout')

@section('title', 'Create Hostel')

@section('content')
<div class="container mt-4">
    <h1>Create Hostel</h1>
    <form action="{{ route('admin.hostels.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Hostel Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" name="location" required>
        </div>
        <div class="form-group">
            <label for="rooms">Rooms</label>
            <input type="number" class="form-control" id="rooms" name="rooms" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
