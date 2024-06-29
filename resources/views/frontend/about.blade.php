@extends('frontend.layout')
@section('content') <!-- Begin content section -->

    <!-- Header Section -->
    <header>
        <div class="container">
            <h1>About HostelConnect</h1>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li> <!-- Navigation link to Home -->
                    <li><a href="/hostels">Hostels</a></li> <!-- Navigation link to Hostels -->
                    <li><a href="/about">About</a></li> <!-- Active link to current page (About) -->
                    <li><a href="/contact">Contact</a></li> <!-- Navigation link to Contact page -->
                    <li><a href="/login">Log in</a></li> <!-- Navigation link to Log in page -->
                    <li><a href="/signup">Sign up</a></li> <!-- Navigation link to Sign up page -->
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content Section -->
    <main>
        <section id="about" class="dark-bg"> <!-- About section with dark background -->
            <div class="container">
                <div class="main-content">
                    <h2>Welcome to HostelConnect</h2>
                    <p>
                        HostelConnect is your go-to platform for finding and booking hostels near your university. Whether you're a student looking for affordable housing or a landlord listing properties, HostelConnect provides a seamless experience with its user-friendly interface and extensive hostel listings.
                    </p>
                    <p>
                        Our mission is to simplify the process of finding student accommodations by offering a wide range of options and detailed information about each hostel. Join HostelConnect today and discover the perfect place to call home during your university years.
                    </p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <p>&copy; 2024 HostelConnect. All rights reserved.</p>
            <div class="social-icons">
                <a href="#">Instagram</a>
                <a href="#">LinkedIn</a>
            </div>
        </div>
    </footer>

@endsection <!-- End content section -->
