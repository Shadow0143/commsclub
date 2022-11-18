<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('/event', [App\Http\Controllers\WelcomeController::class, 'events'])->name('events');
Route::get('/event-details/{id}', [App\Http\Controllers\WelcomeController::class, 'eventDetails'])->name('eventDetails');
Route::get('/blog', [App\Http\Controllers\WelcomeController::class, 'blogs'])->name('blogs');
Route::get('/blogs-details/{id}', [App\Http\Controllers\WelcomeController::class, 'blogDetails'])->name('blogDetails');

Route::get('/job', [App\Http\Controllers\WelcomeController::class, 'jobs'])->name('jobs');
Route::get('/search-job', [App\Http\Controllers\WelcomeController::class, 'searchJobs'])->name('searchJobs');
Route::get('/job-details/{id}', [App\Http\Controllers\WelcomeController::class, 'jobDetails'])->name('jobDetails');




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

Route::get('/create-events', [App\Http\Controllers\EventController::class, 'createEvents'])->name('createEvents');
Route::post('/post-events', [App\Http\Controllers\EventController::class, 'postEvents'])->name('postEvents');
Route::get('/edit-events/{id}', [App\Http\Controllers\EventController::class, 'editEvents'])->name('editEvents');
Route::get('/delete-events', [App\Http\Controllers\EventController::class, 'deleteEvents'])->name('deleteEvents');

Route::get('/create-blogs', [App\Http\Controllers\BlogController::class, 'createBlogs'])->name('createBlogs');
Route::get('/search-blogs', [App\Http\Controllers\WelcomeController::class, 'searchBlogs'])->name('searchBlogs');
Route::post('/post-blogs', [App\Http\Controllers\BlogController::class, 'postBlogs'])->name('postBlogs');
Route::get('/edit-blogs/{id}', [App\Http\Controllers\BlogController::class, 'editBlogs'])->name('editBlogs');
Route::get('/delete-blogs', [App\Http\Controllers\BlogController::class, 'deleteBlogs'])->name('deleteBlogs');

Route::get('/create-job', [App\Http\Controllers\JobController::class, 'createJobs'])->name('createJobs');
Route::post('/store-job', [App\Http\Controllers\JobController::class, 'storeJobs'])->name('storeJobs');
Route::get('/edit-job/{id}', [App\Http\Controllers\JobController::class, 'editJobs'])->name('editJobs');
Route::get('/delete-job', [App\Http\Controllers\JobController::class, 'deleteJobs'])->name('deleteJobs');
Route::post('/store-applicant', [App\Http\Controllers\JobController::class, 'storeApplicant'])->name('storeApplicant');
Route::get('/view-applicant/{id}', [App\Http\Controllers\JobController::class, 'viewApplicant'])->name('viewApplicant');
Route::get('/view-applicant-details', [App\Http\Controllers\JobController::class, 'viewApplicantDetails'])->name('viewApplicantDetails');
Route::get('/reject-applicant', [App\Http\Controllers\JobController::class, 'rejectApplicant'])->name('rejectApplicant');
