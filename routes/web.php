<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
 
Route::get('/', [UserController::class, 'user'])->name('user.home');
Route::get('/package', [UserController::class, 'package'])->name('user.package');
Route::get('/help', [UserController::class, 'help'])->name('user.help');
Route::get('/blog', [UserController::class, 'blog'])->name('user.blog');
Route::get('/blog_details', [UserController::class, 'blog_details'])->name('user.blog_details');
Route::get('/elements', [UserController::class, 'elements'])->name('user.elements');
Route::get('/contact', [UserController::class, 'contact'])->name('user.contact');

 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
    //forgotPassword
    Route::get('forgot-password', 'forgotPassword')->name('forgot_password');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
    Route::post('/profile', [App\Http\Controllers\AuthController::class, 'update'])->name('profile.update');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('users', AdminUserController::class);
});

