<?php

use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;
use App\Http\Controllers\LangController;
use App\Http\Controllers\LocaleController;

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

Route::get('/home', function () {
    return view('welcome');
});





Route::get('/main', function () {

    return View('main');
});



Route::get('/contact', function () {
    return view('contact');
});





Route::get('/about', function () {
    return view('about');
});





Route::get('/games', function () {
    return view('games');
});


Route::get('/qrcode', function () {
    return view('qrcode');
});



//language route
Route::get('locale/{lang}', [LocaleController::class, 'setLocale']);
