@extends('frontend.layout')

@section('content')
    <style>
        body {
            background-image: url('{{ asset("Images/about.jpg") }}');
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

    <!-- Header Section -->
    <header>
        <div class="container">
            <h1>About HostelConnect</h1>
        </div>
    </header>

    <!-- Main Content Section -->
    <main>
        <section id="about" class="dark-bg">
            <div class="container">
                <div class="main-content">
                    <h2>What Is HostelConnect?</h2>
                    <p>
                        HostelConnect, created by Erick Githinji and Karen Kavuu, is an innovative web application aimed at revolutionizing the way students and landlords interact with hostel accommodations. HostelConnect offers a one-stop shop for landlords managing their properties and students looking for lodging options near their colleges.
                    </p>
                    <p>
                        HostelConnect provides a user-friendly experience where students can browse hostel listings tailored to their needs and preferences. Each listing includes detailed information such as facilities, location, cost, and reviews, enabling informed decisions about housing choices.
                    </p>
                    <p>
                        For landlords, HostelConnect simplifies listing and managing hostel properties. It includes tools for reservations, payments, and tenant communications, optimizing occupancy rates and profitability.
                    </p>
                    <p>
                        HostelConnect focuses on customer satisfaction and quality control, fostering a community where students and landlords can interact effectively. With its features and commitment to service, HostelConnect sets new standards in the hostel industry.
                    </p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <p>&copy; 2024 HostelConnect. All rights reserved.</p>
            
        </div>
    </footer>

@endsection
