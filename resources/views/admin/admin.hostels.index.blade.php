@extends('frontend.layout')

@section('title', 'Manage Hostels')

@section('content')
<div class="container mt-4">
    <h1>Manage Hostels</h1>
    <a href="{{ route('admin.hostels.create') }}" class="btn btn-primary mb-3">Create New Hostel</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Rooms</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hostels as $hostel)
            <tr>
                <td>{{ $hostel->name }}</td>
                <td>{{ $hostel->location }}</td>
                <td>{{ $hostel->rooms }}</td>
                <td>
                    <a href="{{ route('admin.hostels.edit', $hostel->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.hostels.destroy', $hostel->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
