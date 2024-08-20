<?php

use App\Http\Controllers\admin\accounts\AccountController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\categories\CategoriesController;
use App\Http\Controllers\admin\products\ProductsController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/shop', function () {
    return view('user.shop');
})->name('shop');

Route::get('category/{id}', [HomeController::class, 'category', 'index'])->name('category');

Route::post('search', [HomeController::class, 'search'])->name('search');

Route::get('product/{id}', [HomeController::class, 'show'])->name('product.show');
Route::post('/products/{product}/reviews', [HomeController::class, 'store'])->middleware('auth ')->name('reviews.store');


//Login & Register
Route::prefix('auth')
    ->as('auth.')
    ->group(function () {
        Route::get('login', [LoginController::class, 'showFormLogin'])->name('login');
        Route::post('login', [LoginController::class, 'login']);

        Route::post('logout', [LoginController::class, 'logout'])->name('logout');

        Route::get('register', [RegisterController::class, 'showFormRegister'])->name('register');
        Route::post('register', [RegisterController::class, 'register']);

        Route::prefix('password')
            ->as('password.')
            ->group(function () {
                Route::get('forgot', [ForgotPasswordController::class, 'forgot'])->name('forgot');
                Route::post('forgot', [ForgotPasswordController::class, 'forgotPassword']);
            });

    });
Route::get('reset/{token}', [ForgotPasswordController::class, 'reset']);
Route::post('reset/{token}', [ForgotPasswordController::class, 'resetPassword'])->name('reset.password');



Route::prefix('admin')
    ->as('admin.')
    ->group(function () {

        Route::get('home', [AdminController::class, 'index'])->name('home');

        Route::prefix('categories')
            ->as('categories.')
            ->group(function (){
                Route::get('/', [CategoriesController::class, 'index'])->name('index');

                Route::get('create', [CategoriesController::class, 'create'])->name('create');
                Route::post('store', [CategoriesController::class, 'store'])->name('store');

                Route::get('edit/{id}', [CategoriesController::class, 'edit'])->name('edit');
                Route::put('update', [CategoriesController::class, 'update'])->name('update');

                Route::get('destroy/{id}', [CategoriesController::class, 'destroy'])->name('destroy');
            });

        Route::prefix('products')
            ->as('products.')
            ->group(function (){
                Route::get('/', [ProductsController::class, 'index'])->name('index');

                Route::get('create', [ProductsController::class, 'create'])->name('create');
                Route::post('store', [ProductsController::class, 'store'])->name('store');

                Route::get('{id}/edit', [ProductsController::class, 'edit'])->name('edit');
                Route::patch('{id}/update', [ProductsController::class, 'update'])->name('update');

                Route::delete('destroy/{id}', [ProductsController::class, 'destroy'])->name('destroy');
            });

        Route::prefix('accounts')
            ->as('accounts.')
            ->group(function (){
                Route::get('/', [AccountController::class, 'index'])->name('index');

                Route::get('create', [AccountController::class, 'create'])->name('create');
                Route::post('store', [AccountController::class, 'store'])->name('store');

                Route::get('{id}', [AccountController::class, 'show'])->name('show');

                Route::get('{id}/edit', [AccountController::class, 'edit'])->name('edit');
                Route::PATCH('{id}', [AccountController::class, 'update'])->name('update');

                Route::delete('{id}', [AccountController::class, 'destroy'])->name('destroy');
            });
    });


