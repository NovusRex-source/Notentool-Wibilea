<?php

use App\Http\Controllers\LernendeController;
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
Route::get('/Cookie', [LoginController::class,'Login']);
Route::get('/Dashboard',  [LernendeController::class,'Rolle']);
Route::get('/EinzelnLernende/{user}', [LernendeController::class,'EinzelnLernende']);
Route::get('/ListeLernende', [LernendeController::class,'ListeLernende']);