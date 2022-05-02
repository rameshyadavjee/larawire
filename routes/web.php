<?php

use Illuminate\Support\Facades\Route;
use Livewire\Component;
use App\Models\User;
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

Route::get('/', function () { return view('welcome'); });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/showusers',[App\Http\Livewire\Showusers::class, Showusers]);
Route::get('/userlist', function () {
     return view('livewire.showusers', ['posts' => User::all()]); });

Route::get('/profile', function () { return view('livewire.profile');} );    