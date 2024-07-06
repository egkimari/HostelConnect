@extends('frontend.layout')

@section('title', 'Home')

@section('content') <!-- Welcome section with background image -->


<section class="welcome-section" style="background-image: url('{{ asset('\Images\home.jpg') }}');">
        <div class="container text-center">
            <h1>Welcome to HostelConnect - The Ultimate Hostel Solution To Your Housing Problem</h1>
        </div>
    </section>

    <!-- Feature highlights section -->
    <section class="feature-highlights">
        <div class="container">
            <div class="row">
                <!-- Hostel 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/hostel1.jpg') }}" class="card-img-top" alt="Hostel 1">
                        <div class="card-body">
                            <h5 class="card-title">Hostel 1</h5>
                        </div>
                    </div>
                </div>
                <!-- Hostel 2 - Add similar cards as needed -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/hostel2.jpg') }}" class="card-img-top" alt="Hostel 2">
                        <div class="card-body">
                            <h5 class="card-title">Hostel 2</h5>
                        </div>
                    </div>
                </div>
                <!-- Hostel 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/hostel3.jpg') }}" class="card-img-top" alt="Hostel 3">
                        <div class="card-body">
                            <h5 class="card-title">Hostel 3</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Find a hostel section -->
    <section class="find-hostel">
        <div class="container text-center">
            <h2>Find a Hostel</h2>
            <p>Browse available hostels and find the perfect one for you.</p>
            <a href="{{ route('hostels.index') }}" class="btn btn-primary">Browse Hostels</a>
        </div>
    </section>

    <!-- Manage bookings section -->
    <section class="manage-bookings">
        <div class="container text-center">
            <h2>Manage Your Bookings</h2>
            <p>Track your bookings and payments with ease.</p>
            <a href="{{ route('payment.status') }}" class="btn btn-primary">View Payment Status</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>&copy; 2024 HostelConnect. All rights reserved.</p>
        </div>
    </footer>

@endsection
