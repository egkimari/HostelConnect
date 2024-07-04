
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HostelController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandlordController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and assigned to the "web" middleware group.
| Now create something great!
|
*/

// Route to the main layout (example)
Route::get('/', function () {
    return view('frontend.layout');
});

// Route for home page
Route::get('/home', function () {
    return view('frontend.home');
})->name('home');

// Route for about page
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

// Route for contact page (GET and POST)
Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Route for displaying all hostels (resourceful)
Route::resource('/hostels', HostelController::class)->names([
    'index' => 'hostels.index',
    'create' => 'hostels.create',
    'store' => 'hostels.store',
    'show' => 'hostels.show',
    'edit' => 'hostels.edit',
    'update' => 'hostels.update',
    'destroy' => 'hostels.destroy',
]);

// Authentication routes
Auth::routes();

// Custom login and register routes (optional)
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Admin Routes
Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    // Add more admin routes here
});

// Landlord Routes
Route::prefix('landlord')->middleware('auth:landlord')->group(function () {
    Route::get('/', [LandlordController::class, 'index'])->name('landlord.dashboard');
    // Add more landlord routes here
});

// Student Routes
Route::prefix('student')->middleware('auth:student')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('student.dashboard');
    // Add more student routes here
});

//Grouping routes that require user authentication
Route::middleware(['auth'])->group(function () {
    // Route for authenticated user's profile (example)
    Route::get('/profile', function () {
        return view('frontend.profile');
    });
});

// Example of a single route using HomeController
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Additional routes specific to your application can be added here


Route::middleware(['auth'])->group(function () {
    // Route for authenticated user's profile (example)
    Route::get('/profile', function () {
        return view('frontend.profile');
    });
});

// Example of a single route using HomeController
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Hostel
Route::get('/hostels', [HostelController::class, 'index'])->name('hostels.index');
Route::get('/hostels/create', [HostelController::class, 'create'])->name('hostels.create');
Route::post('/hostels', [HostelController::class, 'store'])->name('hostels.store');

Route::get('/hostels/{id}', [HostelController::class, 'show'])->name('hostels.show');

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/payment-status', [PaymentStatusController::class, 'index'])->name('payment-status');
