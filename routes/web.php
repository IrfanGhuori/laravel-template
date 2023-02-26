<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUs;

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
    return view('welcome');
});
// Web link pages
Route::view('contact', 'contact');
Route::post('queries',[ContactUs::Class,'CollectData']);