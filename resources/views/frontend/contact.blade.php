@extends('frontend.layout')

@section('title', 'Contact Us')

@section('content')
<div class="container">
    <h1>Contact Us</h1>
    <p>If you have any questions, please feel free to contact us through the form below.</p>
    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Your Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Your Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</div>
@endsection
