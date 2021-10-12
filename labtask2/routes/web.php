<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CustomerController;

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

// Route::get('/', function () {
//     return view('pages.home');
// });

Route::get('/' , [PagesController::class, 'home'])->name('home');
Route::get('/service' , [PagesController::class, 'service'])->name('service');
Route::get('/teams' , [PagesController::class, 'teams'])->name('teams');
Route::get('/aboutus', [PagesController::class, 'aboutUs'])->name('aboutus');
Route::get('/contact' , [PagesController::class, 'contact'])->name('contact');



Route::get('/pagedata', [PagesController::class, 'pageData'])->name('pagedata');


//customers route

Route::get('/customer/registration',[CustomerController::class, 'registration'])->name('registration');
Route::post('/customer/registration',[CustomerController::class, 'registrationSubmit'])->name('submit');
Route::get('/customer/list',[CustomerController::class, 'list'])->name('list');
Route::get('/customer/login',[CustomerController::class, 'login'])->name('login');
Route::post('/customer/login',[CustomerController::class, 'loginCheck'])->name('check');
Route::post('/customer/contact',[CustomerController::class, 'contactS'])->name('contactS');
Route::get('/customer/contact',[CustomerController::class, 'contact'])->name('contact');



