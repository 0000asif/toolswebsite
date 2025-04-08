<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToolsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\RevisionController;
use App\Http\Controllers\MobileAppsController;
use App\Http\Controllers\AllBlogViewController;

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



Route::get('/', [FrontendController::class, 'home'])->name('frontHome');

// View Tools 
Route::get('/tool/{slug}', [ToolsController::class, 'ViewSingleTools'])->name('ViewSingleTools');


Route::get('/category/{slug}', [FrontendController::class, 'category_view'])->name('frontCategory');
Route::get('/subcategory/{slug}', [FrontendController::class, 'subcategory_view'])->name('frontSubCategory');

//All blog Route
Route::get('blogs', [AllBlogViewController::class, 'blogs'])->name('blogs');
Route::get('all_blog_response', [AllBlogViewController::class, 'all_blog_response'])->name('all_blog_response');
Route::get('get_blog_filter_data', [AllBlogViewController::class, 'get_blog_filter_data'])->name('get_blog_filter_data');

//single blog view Route
Route::get('/blog-view/{slug}', [FrontendController::class, 'blog_view'])->name('blog.view');

Route::get('/blogcategory/{slug}', [FrontendController::class, 'blogcategory_view'])->name('frontblogCategory');



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
