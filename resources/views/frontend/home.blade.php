@extends('layouts.app')

@section('content')
<style>
    body {
        background-image: url('C:\Users\egith\Desktop\HostelConnect\public\Images\background.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .card {
        background: rgba(255, 255, 255, 0.8);
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ __('Home') }}</div>
                <div class="card-body text-center">
                    <h1>Welcome to HostelConnect</h1>
                    <p>Find and manage hostel accommodations easily with HostelConnect.</p>
                    <a href="{{ route('hostels') }}" class="btn btn-primary">View Hostels</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
