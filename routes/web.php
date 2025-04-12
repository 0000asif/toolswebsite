<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SEOController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RevisionController;
use App\Http\Controllers\AppsReviewController;
use App\Http\Controllers\MobileAppsController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\TermsAndConditionController;

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
   return view('frontend.font-pages.index');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

// Auth Route Middleware group 
Route::middleware(['auth'])->prefix('dashboard')->group(function () {

   // Permission route
   Route::resource('permission', PermissionController::class);
   // Route::get('permission/{id}/delete', [PermissionController::class, 'destroy'])->name('permission.delete');

   // Role route
   Route::resource('role', RoleController::class);
   Route::get('role/{id}/delete', [RoleController::class, 'destroy'])->name('role.delete');
   Route::get('give-permission/{id}', [RoleController::class, 'AddPermission'])->name('add.permission');
   Route::put('give-permission/{id}', [RoleController::class, 'GivePermission'])->name('giv.permission');

   // ------- user route ------

   Route::resource('user', UserController::class);
   Route::get('/user/{id}/delete', [UserController::class, 'destroy']);

   //------category Route -----------
   Route::resource('category', CategoryController::class);

   //------category Route -----------
   Route::resource('subcategory', SubCategoryController::class);

   // ------ blog Route -----------
   Route::resource('tools', BlogController::class);
   Route::get('pending_post', [BlogController::class, 'pending'])->name('pending.post');
   Route::get('approved_post', [BlogController::class, 'approved'])->name('approved.post');
   Route::get('blog-trash', [BlogController::class, 'BlogTrashView'])->name('BlogTrashView');
   Route::get('BlogTrash/{id}', [BlogController::class, 'BlogTrash'])->name('BlogTrash');
   Route::get('BlogRestor/{id}', [BlogController::class, 'BlogRestor'])->name('BlogRestor');
   Route::get('preview-post/{slug}', [BlogController::class, 'PreviewPost'])->name('PreviewPost');

   //--------Customer Route ----------
   Route::resource('customer', CustomerController::class);
   Route::post('update-customer/{id}', [CustomerController::class, 'UpdateCustomer'])->name('UpdateCustomer');

   //------Customer add route 
   Route::post('customer-add', [CustomerController::class, 'addCustomer'])->name('customer.add');


   //--------Blog Category Route ----------
   Route::resource('blog-category', BlogCategoryController::class);

   //--------Post Route ----------
   Route::resource('blog', PostController::class);
   Route::get('pending_blog', [PostController::class, 'pending'])->name('pending.blog');
   Route::get('approved_blog', [PostController::class, 'approved'])->name('approved.blog');
   Route::get('preview-blog/{slug}', [PostController::class, 'PreviewBlog'])->name('PreviewBlog');


   // Mobile Apps ---------- 
   Route::resource('mobileapps', MobileAppsController::class);
   Route::resource('appsreview', AppsReviewController::class);


   // // About page route
   // Route::resource('contact-us', ContactUsController::class); 
   // Route::resource('invest-policy', InvestPolicyController::class);
   // Route::resource('refund-policy', RefundPolicyController::class); 

   Route::resource('privacy-policy', PrivacyPolicyController::class);
   Route::resource('terms-condition', TermsAndConditionController::class);
   Route::resource('setting', SettingController::class);
   Route::resource('revision', RevisionController::class);
   Route::get('confirmed-revision', [RevisionController::class, 'ConfiremRevision'])->name('ConfiremRevision');
   Route::get('cancel-revision', [RevisionController::class, 'CancelRevision'])->name('CancelRevision');
   Route::get('trash-revision', [RevisionController::class, 'TrashRevision'])->name('TrashRevision');

   Route::resource('about', AboutController::class);
   Route::resource('contact', ContactController::class);
   Route::get('completed-contact', [ContactController::class, 'CompletedContact'])->name('CompletedContact');
   Route::get('cancel-contact', [ContactController::class, 'CancelContact'])->name('CancelContact');
   Route::get('trash-contact', [ContactController::class, 'TrashContact'])->name('TrashContact');
   Route::resource('tag', TagController::class);

   // SEO Route
   Route::get('ContactPageSeo', [SEOController::class, 'ContactPageSeo'])->name('ContactPageSeo');
   Route::post('SaveContactPageSeo', [SEOController::class, 'SaveContactPageSeo'])->name('SaveContactPageSeo');
   
   Route::get('AddsPageSeo', [SEOController::class, 'AddsPageSeo'])->name('AddsPageSeo');
   Route::get('PosterPageSeo', [SEOController::class, 'PosterPageSeo'])->name('PosterPageSeo');
   Route::get('BloodDonnerPageSeo', [SEOController::class, 'BloodDonnerPageSeo'])->name('BloodDonnerPageSeo');
   Route::get('BloodPostPageSeo', [SEOController::class, 'BloodPostPageSeo'])->name('BloodPostPageSeo');
   Route::get('LoginPageSeo', [SEOController::class, 'LoginPageSeo'])->name('LoginPageSeo');
   Route::get('RegPageSeo', [SEOController::class, 'RegPageSeo'])->name('RegPageSeo');
   Route::get('JobPageSeo', [SEOController::class, 'JobPageSeo'])->name('JobPageSeo');
   
});
   
require __DIR__ . '/frontend.php';
require __DIR__ . '/profile.php';
require __DIR__ . '/asif.php';

// Privacy Policy & Terms Condition :  'meta_title',
//         'meta_description',
//         'meta_keywords',
//         'view'

