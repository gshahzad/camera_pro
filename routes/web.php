<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', \App\Http\Livewire\HomeController::class);
Route::get('/aboutus', \App\Http\Livewire\AboutUsController::class);
Route::get('/contact_us', \App\Http\Livewire\ContactUsController::class);
Route::get('/view_cameras', \App\Http\Livewire\ViewCamerasController::class);
Route::get('/enroll_camera', \App\Http\Livewire\EnrollCamera::class);
Route::get('/camera_detail/{camera_id}/{camera_title}', \App\Http\Livewire\CameraDetail::class);
Route::get('/checkout/{camera_id}/{camera_title}', \App\Http\Livewire\Checkout::class);