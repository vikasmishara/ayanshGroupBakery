<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AyanshGroupController;

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

Route::get('/',[AyanshGroupController::class, 'index'])->name('live.index');

Route::get('/about_us',[AyanshGroupController::class, 'about_us'])->name('live.pages.about_us');
Route::get('/contact_us',[AyanshGroupController::class, 'contact_us'])->name('live.pages.contact');
Route::get('/faq',[AyanshGroupController::class, 'faq'])->name('live.pages.faq');
Route::get('/gallery',[AyanshGroupController::class, 'gallery'])->name('live.pages.gallery');
Route::get('/locations',[AyanshGroupController::class, 'locations'])->name('live.pages.locations');
Route::get('/menu',[AyanshGroupController::class, 'menu'])->name('live.pages.menu');
Route::get('/services',[AyanshGroupController::class, 'services'])->name('live.pages.services');
Route::get('/order_now',[AyanshGroupController::class, 'order_now'])->name('live.pages.order_now');
Route::get('/reservations',[AyanshGroupController::class, 'reservations'])->name('live.pages.reservations');