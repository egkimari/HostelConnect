@extends('frontend.layout')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Welcome to HostelConnect</h1>
                    <p>Your ultimate platform for finding and managing hostels.</p>
                    <a href="{{ url('/hostels') }}" class="btn btn-primary">Browse Hostels</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="feature-item">
                        <i class="fa fa-search"></i>
                        <h3>Search Hostels</h3>
                        <p>Find the perfect hostel that meets your needs.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-item">
                        <i class="fa fa-list-alt"></i>
                        <h3>List Your Hostel</h3>
                        <p>Are you a hostel owner? List your hostel with us.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-item">
                        <i class="fa fa-user"></i>
                        <h3>User Dashboard</h3>
                        <p>Manage your bookings and profile easily.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
