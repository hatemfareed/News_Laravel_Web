<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\dashboardController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/home', [pagesController::class, 'home'])->name('page.home') ;
Route::get('/about', [pagesController::class, 'about'])->name('page.about') ;
Route::get('/categori', [pagesController::class, 'categori'])->name('page.categori') ;
Route::get('/latest_news', [pagesController::class, 'latest_news'])->name('page.latest_news') ;
Route::get('/contact', [pagesController::class, 'contact'])->name('page.contact') ;
Route::get('/blog', [pagesController::class, 'blog'])->name('page.blog') ;
Route::get('/blog_details', [pagesController::class, 'blog_details'])->name('page.blog_details') ;
Route::get('/elements', [pagesController::class, 'elements'])->name('page.elements') ;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [dashboardController::class, 'home'])->name('dashboard.home');
    Route::get('/dashboard/blogs', [dashboardController::class, 'blogs'])->name('dashboard.blogs');
    Route::get('/dashboard/category', [dashboardController::class, 'category'])->name('dashboard.categories');
    Route::get('/dashboard/posts', [dashboardController::class, 'posts'])->name('dashboard.posts');
    Route::get('/dashboard/articles', [dashboardController::class, 'articles'])->name('dashboard.articles');
    Route::get('/dashboard/users', [dashboardController::class, 'users'])->name('dashboard.users');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::delete('/dashboard/users/{id}',[dashboardController::class, 'destroyUsers'])->name('dashboard.users.destroy');
    Route::post('/dashboard/users/{id}',[dashboardController::class, 'addAbility'])->name('dashboard.users.addAbility');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::post('/dashboard/category',[dashboardController::class, 'addCategory'])->name('dashboard.category.addCategory');
});