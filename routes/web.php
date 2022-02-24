<?php

use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('welcome');
})->middleware(['auth', 'verified']);

Route::get('/contact-us',[ContactController::class,'contact']);
Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');
Route::get('/inquiry-form',[InquiryController::class,'inquiry']);
Route::post('/send-massage', [InquiryController::class, 'sendInquiry'])->name('inquiry.send');
Route::get('/index', [PackageController::class, 'addpackage'])->name('package.view');
Route::get('admin/packages/create', [PackageController::class, 'create'])->name('create');
Route::post('/package-created', [PackageController::class, 'store'])->name('package.created');
Route::get('/index', [CustomerController::class, 'addcustomer'])->name('customer.view');
Route::get('admin/packages/index', [PackageController::class, 'index'])->name('packages.index');
Route::post('/customer-created', [CustomerController::class, 'store'])->name('customer.created');
Route::post('/customer-deleted', [CustomerController::class, 'destory'])->name('customer.deleted');
Route::get('/search', [SearchController::class, 'search'])->name('search.package');


//Admin Routes
Route::prefix('admin')->name('admin.')->group(function() {
    Route::resources([
        'roles' => RoleController::class,
        'users' => UserController::class,
    ]);
});