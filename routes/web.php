<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [HomeController::class, 'index'])->name('home');
// to join
Route::get('/details/{property}', [HomeController::class, 'Details'])->name('details');
// end to join
Route::get('/listing/{type}', [HomeController::class, 'Listing'])->name('listing');

Route::get('/services', function () {
    return view('acred.services');
})->name('services');
Route::get('/about', function () {
    return view('acred.about');
})->name('about');
Route::get('/contact', function () {
    return view('acred.contact');
})->name('contact');
Route::post('/subscribe', [HomeController::class, 'SubscribeMail'])->name('subscribe');

Auth::routes();

// admin routes
Route::get('/admin', [PropertyController::class, 'index'])->name('admin');
Route::get('/admin/create', [PropertyController::class, 'create'])->name('admin.propertyform');
Route::get('/admin/edit/{id}', [PropertyController::class, 'edit'])->name('admin.editpropertyform');
Route::post('/admin/store', [PropertyController::class, 'store'])->name('admin.addproperty');
Route::patch('/admin/update/{property}', [PropertyController::class, 'update'])->name('admin.editproperty');
Route::delete('/admin/destroy/{property}', [PropertyController::class, 'destroy'])->name('admin.deleteproperty');
