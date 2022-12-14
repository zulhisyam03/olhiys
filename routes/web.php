<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserProfileController;
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

Route::get('/tugas', function() { return view('tugasUTS');});

Route::get('/', function() { return view('welcome');});
Route::get('/', [HomeController::class, 'data']);
Route::get('/showBerita/{slug}', [HomeController::class, 'beritaGuest']);
Route::get('/guest-galery', [HomeController::class, 'galery']);
Route::get('/about/page/{page}', [HomeController::class, 'about']);

Route::post('/search', [HomeController::class, 'find']);

Route::post('/contactUs', [GuestController::class, 'store']);


Route::get('/admin', function () {return redirect('/dashboard');})->middleware('auth');
	Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
	Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
	Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
	Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
	Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
	Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
	Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
	Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
	Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');	
Route::group(['middleware' => 'auth'], function () {

	Route::resource('/guestMessage', GuestController::class)->middleware('auth');
	
	Route::get('/berita', [BeritaController::class, 'index']);
	Route::get('/galery', [GaleryController::class, 'index']);
	
	Route::resource('/setaccount', UserProfileController::class)->middleware('auth');
	Route::resource('/setabout', AboutController::class)->middleware('auth');
	//Resource Berita untuk menangani Method tiap Form GET,POST,PATCH,DELETE,CREATE
	Route::resource('/galery', GaleryController::class)->middleware('auth');
	Route::resource('/berita', BeritaController::class)->middleware('auth');
	Route::get('/news', function() {return redirect('/berita');});
	Route::get('findBerita/', function() {return redirect('/berita');});
	Route::get('findGalery/', function() {return redirect('/galery');});
	Route::post('findBerita/', [BeritaController::class,'findBerita']);
	Route::post('findGalery/', [GaleryController::class,'findGalery']);
	
	Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
	Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static'); 
	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static'); 
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');

	//Penyimpanan Data Berita Ke DB
	
});