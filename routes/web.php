<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome', [
        'products' => Product::latest()->paginate(4)
    ]);
});

Route::get('/dashboard', function () {
    $products = Product::paginate(10);
    return view('products.index', ['products' => $products]);
})->middleware(['auth'])->name('dashboard');

Route::resource('products', ProductController::class);

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
