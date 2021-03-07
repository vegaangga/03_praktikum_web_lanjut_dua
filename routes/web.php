<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PostController;
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


   Route::get('/',[CompanyController::class, 'index']);
   Route::get('/about',[CompanyController::class, 'about']);
   Route::get('/profile',[CompanyController::class, 'profile']);
   Route::get('/contact',[CompanyController::class, 'contact']);

//Praktikum 4 Model - Database

Route::get('/',[PostController::class, 'post']);

