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
Route::get('/about', \App\Http\Livewire\AboutUsController::class);
Route::get('/contact', \App\Http\Livewire\ContactUsController::class);
Route::get('/view-cameras', \App\Http\Livewire\ViewCamerasController::class);
Route::get('/enroll-create-revenue', \App\Http\Livewire\EnrollCreateRevenue::class);
Route::get('/enroll-camera', \App\Http\Livewire\EnrollCamera::class);
Route::get('/camera-detail/{camera_id}/{camera_title}', \App\Http\Livewire\CameraDetail::class);
Route::get('/checkout/{camera_id}/{camera_title}', \App\Http\Livewire\Checkout::class);
Route::get('/checkout-success/{camera_id}/{camera_title}', \App\Http\Livewire\CheckoutSuccess::class);