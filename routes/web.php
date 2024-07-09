<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HostelController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Landlord\DashboardController as LandlordDashboardController;
use App\Http\Controllers\Landlord\HostelController as LandlordHostelController;
use App\Http\Controllers\Landlord\ProfileController as LandlordProfileController;
use App\Http\Controllers\Student\DashboardController as StudentDashboardController;
use App\Http\Controllers\Student\HostelController as StudentHostelController;
use App\Http\Controllers\Student\ProfileController as StudentProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PaymentStatusController;
use App\Models\User;  // Import User model for the check-roles route
use Illuminate\Support\Facades\DB;  // Import DB facade for the check-roles route

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

// Route for home page
Route::get('/', [HomeController::class, 'index'])->name('home');

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

// Landlord Routes
Route::prefix('landlord')->middleware('auth:landlord')->group(function () {
    Route::get('/', [LandlordDashboardController::class, 'index'])->name('landlord.dashboard');
    Route::resource('/hostels', LandlordHostelController::class)->names([
        'index' => 'landlord.hostels.index',
        'create' => 'landlord.hostels.create',
        'store' => 'landlord.hostels.store',
        'show' => 'landlord.hostels.show',
        'edit' => 'landlord.hostels.edit',
        'update' => 'landlord.hostels.update',
        'destroy' => 'landlord.hostels.destroy',
    ]);
    Route::get('/profile', [LandlordProfileController::class, 'index'])->name('landlord.profile');
    Route::post('/profile', [LandlordProfileController::class, 'update'])->name('landlord.profile.update');
});

// Student Routes
Route::prefix('student')->middleware('auth')->group(function () {
    Route::get('/dashboard', [StudentDashboardController::class, 'index'])->name('student.dashboard');
    Route::resource('/hostels', StudentHostelController::class)->names([
        'index' => 'student.hostels.index',
        'show' => 'student.hostels.show',
    ]);
    Route::get('/profile', [StudentProfileController::class, 'index'])->name('student.profile');
    Route::post('/profile', [StudentProfileController::class, 'update'])->name('student.profile.update');
});

// Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    // Hostels Routes
    Route::get('/hostels', [AdminController::class, 'index'])->name('admin.hostels.index');
    Route::get('/hostels/create', [AdminController::class, 'createHostel'])->name('admin.hostels.create');
    Route::post('/hostels', [AdminController::class, 'storeHostel'])->name('admin.hostels.store');
    Route::get('/hostels/{id}/edit', [AdminController::class, 'editHostel'])->name('admin.hostels.edit');
    Route::put('/hostels/{id}', [AdminController::class, 'updateHostel'])->name('admin.hostels.update');
    Route::delete('/hostels/{id}', [AdminController::class, 'destroyHostel'])->name('admin.hostels.destroy');

    // Users Routes
    Route::get('/users', [AdminController::class, 'manageUsers'])->name('admin.users.index');
    Route::get('/users/create', [AdminController::class, 'createUser'])->name('admin.users.create');
    Route::post('/users', [AdminController::class, 'storeUser'])->name('admin.users.store');
    Route::get('/users/{id}/edit', [AdminController::class, 'editUser'])->name('admin.users.edit');
    Route::put('/users/{id}', [AdminController::class, 'updateUser'])->name('admin.users.update');
    Route::delete('/users/{id}', [AdminController::class, 'destroyUser'])->name('admin.users.destroy');
});

// Check Roles Route (for debugging or admin purposes)
Route::get('/check-roles', function () {
    $users = User::select('id', 'name', 'email', 'is_admin')->get();
    $admins = DB::table('admins')->get();
    return response()->json(['users' => $users, 'admins' => $admins]);
});
