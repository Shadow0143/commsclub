<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('/events', [App\Http\Controllers\WelcomeController::class, 'events'])->name('events');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/post-banner', [App\Http\Controllers\FrontendController::class, 'postBanner'])->name('postBanner');
Route::post('/post-services', [App\Http\Controllers\FrontendController::class, 'postServices'])->name('postServices');
Route::post('/media-outlet', [App\Http\Controllers\FrontendController::class, 'mediaOutlet'])->name('mediaOutlet');
Route::post('/testimonial', [App\Http\Controllers\FrontendController::class, 'testimonial'])->name('testimonial');
Route::post('/post-news', [App\Http\Controllers\FrontendController::class, 'news'])->name('news');

Route::get('/edit-banner', [App\Http\Controllers\FrontendController::class, 'editBanner'])->name('editBanner');
Route::get('/edit-service', [App\Http\Controllers\FrontendController::class, 'editService'])->name('editService');
Route::get('/edit-testimonial', [App\Http\Controllers\FrontendController::class, 'editTestimonial'])->name('editTestimonial');
Route::get('/edit-news', [App\Http\Controllers\FrontendController::class, 'editNews'])->name('editNews');

Route::get('/delete-banner', [App\Http\Controllers\FrontendController::class, 'deleteBanner'])->name('deleteBanner');
Route::get('/delete-service', [App\Http\Controllers\FrontendController::class, 'deleteService'])->name('deleteService');
Route::get('/delete-companylogo', [App\Http\Controllers\FrontendController::class, 'deleteCompanyLogo'])->name('deleteCompanyLogo');
Route::get('/delete-testimonial', [App\Http\Controllers\FrontendController::class, 'deleteTestimonial'])->name('deleteTestimonial');
Route::get('/delete-news', [App\Http\Controllers\FrontendController::class, 'deleteNews'])->name('deleteNews');
