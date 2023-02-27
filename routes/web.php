<?php

use App\Http\Controllers\NotenController;
use App\Http\Controllers\SchulfachController;
use App\Http\Controllers\LoginController;
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
Route::view('/', 'Login');
Route::view('/Schulfach/create', 'FachErfassen');



Route::get('/Dashboard',  [NotenController::class,'Rolle']);
Route::get('/EinzelnLernende/{user}', [NotenController::class,'EinzelnLernende']);
Route::get('/ListeLernende', [NotenController::class,'ListeLernende']);
Route::get('/ListeAusbilder', [NotenController::class,'ListeAusbilder']);
Route::get('/Cookieset', [LoginController::class,'Login']);


Route::get('/Schulfach', [SchulfachController::class,'index']);
Route::get('/Schulfach/post', [SchulfachController::class,'post']);
Route::get('/Schulfach/destroy/{pkFach}', [SchulfachController::class, 'destroy']);
Route::get('/Schulfach/edit/{pkFach}', [SchulfachController::class, 'edit']);
Route::post('/Schulfach/update/{pkFach}', [SchulfachController::class, 'update']);
