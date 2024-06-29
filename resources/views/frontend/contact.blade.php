@extends('frontend.layout')

@section('content')
    <!-- Container to hold the contact form -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Card component to hold the form -->
                <div class="card">
                    <div class="card-header">{{ __('Contact Us') }}</div>

                    <div class="card-body">
                        <!-- Introduction paragraph -->
                        <p>We value your feedback and support. Please feel free to contact us using the form below:</p>

                        <!-- Contact Form -->
                        <form method="POST" action="{{ route('frontend.contact') }}">
                            @csrf

                            <!-- Name Input -->
                            <div class="form-group row">
                                <!-- Label for the name input -->
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <!-- Input field for the name -->
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    <!-- Error message for the name input -->
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Email Input -->
                            <div class="form-group row">
                                <!-- Label for the email input -->
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <!-- Input field for the email -->
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    <!-- Error message for the email input -->
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Message Input -->
                            <div class="form-group row">
                                <!-- Label for the message input -->
                                <label for="message" class="col-md-4 col-form-label text-md-right">{{ __('Message') }}</label>

                                <div class="col-md-6">
                                    <!-- Textarea for the message -->
                                    <textarea id="message" class="form-control @error('message') is-invalid @enderror" name="message" required>{{ old('message') }}</textarea>

                                    <!-- Error message for the message input -->
                                    @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <!-- Submit button to send the message -->
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send Message') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- End Contact Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection