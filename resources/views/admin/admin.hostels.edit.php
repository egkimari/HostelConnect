@extends('frontend.layout')

@section('title', 'Edit Hostel')

@section('content')
<div class="container">
    <h1>Edit Hostel</h1>
    <form action="{{ route('admin.hostels.update', $hostel->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Hostel Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $hostel->name }}" required>
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" name="location" value="{{ $hostel->location }}" required>
        </div>
        <div class="form-group">
            <label for="rooms">Rooms</label>
            <input type="number" class="form-control" id="rooms" name="rooms" value="{{ $hostel->rooms }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
