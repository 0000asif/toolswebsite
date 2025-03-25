<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CustomerLoginController;
use App\Http\Controllers\CustomerProfileController;
use App\Http\Controllers\ProfileWishListController;

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

// Route::get('/', function () {
//    return view('frontend.index');
// });
Auth::routes();

// Auth Route Middleware group 
Route::middleware('customer.auth')->group(function () {
   Route::get('profile', [CustomerProfileController::class, 'CustomerProfile'])->name('CustomerProfile');
   Route::get('CustomerLogout', [CustomerLoginController::class, 'CustomerLogout'])->name('CustomerLogout');

   Route::get('blood-doner', [CustomerProfileController::class, 'BloodDoner'])->name('BloodDoner');
   Route::post('donerstore', [CustomerProfileController::class, 'BloodDonerStore'])->name('BloodDoner.store');

   //show customer Blood donor
   Route::get('customer-blood-donor', [CustomerProfileController::class, 'CustomerBloodDonor'])->name('customer.blood_donor');

   //Route for Customer profile update 5/1/25
   Route::get('customer-update', [CustomerProfileController::class, 'CustomerUpdate'])->name('customer.update');
   Route::post('customer-update-store', [CustomerProfileController::class, 'CustomerUpdateStore'])->name('customer.updatestore');


   //Route for customer password update 5/1/25
   Route::get('customer-password-update', [CustomerProfileController::class, 'CustomerPasswordUpdate'])->name('customer.passwordupdate');
   Route::post('customer-password-update-store', [CustomerProfileController::class, 'CustomerPasswordUpdateStore'])->name('customer.passwordupdatestore');

   //Route for favorite list 6/1/25 
   Route::get('customer-favorite-list', [CustomerProfileController::class, 'CustomerFavoriteList'])->name('customer.favoriteList');
   Route::post('favorite-list-delete', [CustomerProfileController::class, 'CustomerFavoriteListDelete'])->name('customer.favoriteListDelete');;

   //show customer post 
   Route::get('customer-blog', [CustomerProfileController::class, 'CustomerPost'])->name('customer.post');

   //show customer blog 
   Route::get('customer-post', [CustomerProfileController::class, 'CustomerBlog'])->name('customer.blog');

   //show customer job post created
   Route::get('customer-job-post', [CustomerProfileController::class, 'CustomerJobPosts'])->name('customer.jobpost');
   Route::post('customer-job-post-store', [CustomerprofileController::class, 'CustomerJobPostStore'])->name('customer.jobpoststore');

   // Route for customer job post Store
   Route::get('customer-job-post-add', [CustomerProfileController::class, 'CustomerJobPostAdd'])->name('customer.jobpostadd');

   // Route for customer post store
   Route::get('customer-post-add', [CustomerprofileController::class, 'CustomerPostAdd'])->name('customer.postadd');
   Route::post('customer-post-store', [CustomerprofileController::class, 'CustomerPostStore'])->name('customer.poststore');

   // Route for customer blog store
   Route::get('customer-blog-add', [CustomerprofileController::class, 'CustomerBlogAdd'])->name('customer.blogadd');
   Route::post('customer-blog-store', [CustomerprofileController::class, 'CustomerBlogStore'])->name('customer.blogstore');

   // Route for mahfil poster add 
   Route::get('customer-mahfil-poster-add', [CustomerprofileController::class, 'CusMahfilPoserAdd'])->name('CusMahfilPoserAdd');
   Route::post('customer-blog-store', [CustomerprofileController::class, 'CustomerBlogStore'])->name('customer.blogstore');

   // Wishlist routes
   Route::post('saveAddToFev', [ProfileWishListController::class, 'saveAddToFev'])->name('saveAddToFev');
});
