<?php

use App\Http\Controllers\Admin\CategoriesController as AddminCategoriesController;
use App\Http\Controllers\Admin\ContactsController as AdminContactsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PortfolioController as AdminPortfolioController;
use App\Http\Controllers\Admin\PostsController as AdminPostsController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\ServicesController as AdminServicesController;
use App\Http\Controllers\Admin\SubscribersController as AdminSubscribersController;
use App\Http\Controllers\Admin\TestimonyController as AdminTestimonyController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\WebController;
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

Route::group(['as' => 'web.'], function () {

    Route::get('/', [WebController::class, 'index'])->name('index');
    Route::get('/about-us', [WebController::class, 'about'])->name('about');
    Route::view('/why-us', 'web.why-us')->name('why_us');
    Route::view('/our-exparience', 'web.our-exparience')->name('our_exparience');
    Route::get('/contact-us', [WebController::class, 'contact'])->name('contact');
    Route::post('/contact-us', [WebController::class, 'contact_us_store'])->name('contact.store');
    Route::post('/subscriber', [WebController::class, 'subscriber'])->name('subscriber.store');
    Route::resource('posts', PostController::class);
    Route::resource('portfolio', PortfolioController::class);
    Route::resource('services', ServicesController::class);
});
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
    Route::resource('portfolio', AdminPortfolioController::class);
    Route::resource('contacts', AdminContactsController::class);
    Route::resource('subscribers', AdminSubscribersController::class);
    Route::resource('profile', AdminProfileController::class);
    Route::resource('services', AdminServicesController::class);
    Route::resource('testimonies', AdminTestimonyController::class);
    Route::group(['as' => 'news.'], function () {
        Route::resource('categories', AddminCategoriesController::class);
        Route::resource('posts', AdminPostsController::class);
    });
});
