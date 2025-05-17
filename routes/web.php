<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
Route::get('/', function () {
return view('welcome');
});
<<<<<<< Updated upstream
Route::resource('products', ProductController::class);
=======

Route::get('/dashboard', function () {
    $products = Product::paginate(10);
    return view('products.index', ['products' => $products]);
})->middleware(['auth'])->name('dashboard');

Route::resource('products', ProductController::class)->middleware(['auth']);

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
>>>>>>> Stashed changes
