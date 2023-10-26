<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WorkController;

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
    return view('frontend.index');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::post('/send-message',[ContactController::class , 'storeMessage'])->name('sendMessage');

Route::get('/work', function () {
    return view('frontend.work');
});

Route::get('/upload', function () {
    return view('frontend.upload');
});
Route::post('/uploadimg',[WorkController::class , 'uploadImage'])->name('uploadImage');



// test route
Route::get('/test', function () {
    return view('frontend.test');
});
Route::get('/demo', function () {
    return view('frontend.demo');
});