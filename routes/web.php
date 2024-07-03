<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HostelController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*/ 
Main function
Route::get('/', function () {
    return view('welcome');
}); */

//Route
//Get or Post
//function(){ echo 'about page';}
//http://127.0.0.1:8000/ 


/*
 @extends('frontend.layout')

@section('content')
    <h1>User_Profile Page</h1>
@endsection 
*/


// Route to the main layout
Route::get('/', function () {
    return view('frontend.layout');
});

// Routes for various pages
Route::get('home', function () {
    return view('frontend.home');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/hostels', function () {
    return view('frontend.hostels'); 
});

// Authentication routes
Route::get('/login', function () {
    return view('frontend.auth.login');
});

Route::get('/register', function () {
    return view('frontend.auth.register');
});

// User profile route
Route::get('/profile', function () {
    return view('frontend.profile');
})->middleware('auth'); // Example middleware usage for authentication

// Route to show a single hostel by ID
Route::get('/hostels/{id}', [HostelController::class, 'show'])->name('hostels.show');
