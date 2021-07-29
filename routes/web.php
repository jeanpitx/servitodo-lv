<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/test', function () {
    return Inertia::render('SafeTest');
})->middleware(['auth', 'verified', 'password.confirm'])->name('test');


Route::resources([
    'categories' => CategoryController::class
]);
Route::get('/trash/categories', [CategoryController::class, 'trashbin'])->middleware(['auth', 'verified', 'password.confirm'])->name('trash.categories');
Route::post('/trash/categories/only', [CategoryController::class, 'trashonly'])->middleware(['auth', 'verified', 'password.confirm'])->name('trash.categories.only');
Route::post('/trash/categories/all', [CategoryController::class, 'trashall'])->middleware(['auth', 'verified', 'password.confirm'])->name('trash.categories.all');

//require __DIR__.'/auth.php';
@include('auth.php');
