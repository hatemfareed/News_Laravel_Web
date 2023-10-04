<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DashboardController;
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

Route::get('/home', [PagesController::class, 'home'])->name('page.home') ;
Route::get('/about', [PagesController::class, 'about'])->name('page.about') ;
Route::get('/categori', [PagesController::class, 'categori'])->name('page.categori') ;
Route::get('/latest_news', [PagesController::class, 'latest_news'])->name('page.latest_news') ;
Route::get('/contact', [PagesController::class, 'contact'])->name('page.contact') ;
Route::get('/blog', [PagesController::class, 'blog'])->name('page.blog') ;
Route::get('/blog_details', [PagesController::class, 'blog_details'])->name('page.blog_details') ;
Route::get('/elements', [PagesController::class, 'elements'])->name('page.elements') ;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'home'])->name('dashboard.home');
    Route::get('/dashboard/blogs', [DashboardController::class, 'blogs'])->name('dashboard.blogs');
    Route::get('/dashboard/posts', [DashboardController::class, 'posts'])->name('dashboard.posts');
    Route::get('/dashboard/articles', [DashboardController::class, 'articles'])->name('dashboard.articles');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard/users', [DashboardController::class, 'users'])->name('dashboard.users');
    Route::delete('/dashboard/users/{id}',[DashboardController::class, 'destroyUsers'])->name('dashboard.users.destroy');
    Route::post('/dashboard/users/{id}',[DashboardController::class, 'addAbility'])->name('dashboard.users.addAbility');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard/category', [DashboardController::class, 'category'])->name('dashboard.categories');
    Route::post('/dashboard/category',[DashboardController::class, 'addCategory'])->name('dashboard.category.addCategory');
    Route::delete('/dashboard/category/{id}',[DashboardController::class, 'destroyCategory'])->name('dashboard.category.destroy');
    Route::put('/dashboard/category/{id}',[DashboardController::class, 'editCategory'])->name('dashboard.category.edit');
    Route::get('/dashboard/category/{id}',[DashboardController::class, 'showCategory'])->name('dashboard.category.show');
});