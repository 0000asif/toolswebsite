<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AllPostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\RevisionController;
use App\Http\Controllers\BloodShowController;
use App\Http\Controllers\BloodDonerController;
use App\Http\Controllers\MobileAppsController;
use App\Http\Controllers\AllBlogViewController;
use App\Http\Controllers\AllJobsShowController;
use App\Http\Controllers\CustomerLoginController;
use App\Http\Controllers\CustomerProfileController;

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
// Route::get('/', [FrontendController::class, 'home'])->name('frontHome');
Route::fallback(function () {
   return response()->view('errors.404', [], 404);
});


Route::get('CustomerRegistration', [CustomerLoginController::class, 'CustomerRegistration'])->name('CustomerRegistration');
Route::post('CheckCustomerRegistration', [CustomerLoginController::class, 'CheckCustomerRegistration'])->name('CheckCustomerRegistration');

Route::get('/', [FrontendController::class, 'home'])->name('frontHome');
Route::get('/category/{slug}', [FrontendController::class, 'category_view'])->name('frontCategory');

Route::get('/subcategory/{slug}', [FrontendController::class, 'subcategory_view'])->name('frontSubCategory');



Route::get('home_all_post_response', [FrontendController::class, 'home_all_post_response'])->name('home_all_post_response'); // abdullah
Route::get('home_filter_post_response', [FrontendController::class, 'home_filter_post_response'])->name('home_filter_post_response'); // abdullah

// Blog Route
Route::get('/post-details/{slug}', [FrontendController::class, 'post_details'])->name('post.details');
//Single Blog Route
Route::get('/single-post/{slug}', [FrontendController::class, 'single_post'])->name('single.post');

//All post Route
Route::get('all-post', [AllPostController::class, 'all_post'])->name('all.post');
Route::get('all_post_response', [AllPostController::class, 'all_post_response'])->name('all_post_response');
Route::get('get_union_data', [AllPostController::class, 'get_union_data'])->name('get_union_data');
Route::get('get_sub_cat_data', [AllPostController::class, 'get_sub_cat_data'])->name('get_sub_cat_data');
Route::get('get_post_filter_data', [AllPostController::class, 'get_post_filter_data'])->name('get_post_filter_data');
Route::get('get_zila_id_profile_job_page', [AllPostController::class, 'get_zila_id_profile_job_page'])->name('get_zila_id_profile_job_page');

//All blog Route
Route::get('blogs', [AllBlogViewController::class, 'blogs'])->name('blogs');
Route::get('all_blog_response', [AllBlogViewController::class, 'all_blog_response'])->name('all_blog_response');
Route::get('get_blog_filter_data', [AllBlogViewController::class, 'get_blog_filter_data'])->name('get_blog_filter_data');

//single blog view Route
Route::get('/blog-view/{slug}', [FrontendController::class, 'blog_view'])->name('blog.view');

Route::get('/blogcategory/{slug}', [FrontendController::class, 'blogcategory_view'])->name('frontblogCategory');

// Blood Post 
Route::get('blood-post', [BloodShowController::class, 'bloods'])->name('bloods');
Route::get('all_blood_response', [BloodShowController::class, 'all_blood_response'])->name('all_blood_response');
Route::get('post-for-blood', [BloodShowController::class, 'post_for_blood'])->name('post_for_blood');

Route::post('customer-blood-store', [BloodShowController::class, 'storeBloodPost'])->name('bloodpoststore');


//All blood_doner Route
Route::get('all-blood-doners', [BloodDonerController::class, 'blood_doners'])->name('blood_doners');
Route::get('all_blood_doner_response', [BloodDonerController::class, 'all_blood_doner_response'])->name('all_blood_doner_response');
Route::get('get_blood_doner_filter_data', [BloodDonerController::class, 'get_blood_doner_filter_data'])->name('get_blood_doner_filter_data');


//All job Route
Route::get('all-jobs', [AllJobsShowController::class, 'jobs'])->name('jobs');
Route::get('all_job_response', [AllJobsShowController::class, 'all_job_response'])->name('all_job_response');
Route::get('get_job_filter_data', [AllJobsShowController::class, 'get_job_filter_data'])->name('get_job_filter_data');
Route::get('get_upazila_data', [AllJobsShowController::class, 'get_upazila_data'])->name('get_upazila_data');

//single job view Route
Route::get('/job-view/{slug}', [AllJobsShowController::class, 'job_view'])->name('job.view');

Route::get('/jobcategory/{slug}', [AllJobsShowController::class, 'jobcategory_view'])->name('frontjobCategory');


// Mobile Apps
Route::get('mobile-apps', [MobileAppsController::class, 'MobileApss'])->name('MobileApps');
Route::get('/download-apk/{filename}', [MobileAppsController::class, 'downloadApk'])->name('download.apk');
Route::post('saveappsreview', [MobileAppsController::class, 'saveappsreview'])->name('saveappsreview');


// Mahfil Poster 
Route::get('mahfil-poster', [FrontendController::class, 'MahfilPoster'])->name('MahfilPoster');

// Search 
Route::get('search', [SearchController::class, 'search'])->name('search');
Route::get('/search-result/{id}', [SearchController::class, 'SearchShow'])->name('search.result');
Route::get('global-search', [SearchController::class, 'GlobalSearch'])->name('GlobalSearch');



//terms and condition Route
Route::get('terms-and-conditions', [FrontendController::class, 'terms_and_conditions'])->name('terms-and-conditions');

//privacy policy Route
Route::get('privacy-policy', [FrontendController::class, 'privacy_policy'])->name('privacy-policy');

//for ads Route
Route::get('advertisements', [FrontendController::class, 'advertisements'])->name('ads');

// About Us page
Route::get('about-us', [FrontendController::class, 'about_us'])->name('about_us');

Route::get('contact-us', [FrontendController::class, 'contact_us'])->name('contact_us');

// Others 
Route::post('SaveRevision', [RevisionController::class, 'SaveRevision'])->name('SaveRevision');
Route::post('SaveContact', [ContactController::class, 'SaveContact'])->name('SaveContact');
