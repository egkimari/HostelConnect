@extends('frontend.layout')

@section('title', 'Home')

@section('content')
    <!-- Welcome section with title -->
    <section id="home" class="welcome-section">
        <div class="container">
            <h1 class="display-4">Welcome to HostelConnect - The Ultimate Hostel Solution To Your Housing Problem</h1>
        </div>
    </section>

    <!-- Feature highlights section with slideshow -->
    <section class="feature-highlights">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/hostel1.jpg') }}" alt="Hostel 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/hostel2.jpg') }}" alt="Hostel 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/hostel3.jpg') }}" alt="Hostel 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- Find a hostel section -->
    <section class="find-hostel">
        <div class="container">
            <h2>Find a Hostel</h2>
            <p>Browse available hostels and find the perfect one for you.</p>
            <a href="{{ url('/hostels') }}" class="btn btn-primary">More</a>
        </div>
    </section>

    <!-- Manage bookings section -->
    <section class="manage-bookings">
        <div class="container">
            <h2>Manage Your Bookings</h2>
            <p>Track your bookings and payments with ease.</p>
            <a href="{{ url('/payment-status') }}" class="btn btn-primary">View Payment Status</a>
        </div>
    </section>
@endsection
