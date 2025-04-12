<?php




use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ToolsViewController;


Route::get('RandomNumberGenerator', [ToolsViewController::class, 'RandomNumberGenerator'])->name('RandomNumberGenerator');
