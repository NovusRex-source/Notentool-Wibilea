<?php

use App\Http\Controllers\BerufController;
use App\Http\Controllers\NotenController;
use App\Http\Controllers\SchulfachController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LernendeController;
use App\Http\Controllers\AusbilderController;
use App\Http\Controllers\FachBerufController;
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
Route::post('/Dashboard',  [NotenController::class,'Rolle']);
Route::post('/Cookieset', [LoginController::class,'Login']);

//Noten anzeigen, erstellen, löschen, bearbeiten
Route::get('/Note/{user}', [NotenController::class,'index']);
Route::get('/Note/create/{user}', [NotenController::class,'create']);
Route::post('/Note/post', [NotenController::class,'post']);
Route::get('/Note/destroy/{pkNote}', [NotenController::class,'destroy']);



//Lernende anzeigen, erstellen, löschen, bearbeiten
Route::get('/Lernende/create',  [LernendeController::class,'create']);
Route::get('/Lernende', [LernendeController::class,'index']);
Route::get('/Lernende/post', [LernendeController::class,'post']);
Route::get('/Lernende/destroy/{pkLernende}', [LernendeController::class, 'destroy']);
Route::get('/Lernende/edit/{pkLernende}', [LernendeController::class, 'edit']);
Route::post('/Lernende/update/{pkLernende}', [LernendeController::class, 'update']);


//Schulfächer anzeigen, erstellen, löschen, bearbeiten
Route::view('/Schulfach/create', 'FachErfassen');

Route::get('/Schulfach', [SchulfachController::class,'index']);
Route::get('/Schulfach/post', [SchulfachController::class,'post']);
Route::get('/Schulfach/destroy/{pkFach}', [SchulfachController::class, 'destroy']);
Route::get('/Schulfach/edit/{pkFach}', [SchulfachController::class, 'edit']);
Route::post('/Schulfach/update/{pkFach}', [SchulfachController::class, 'update']);


//Lehrberufe anzeigen, erstellen, löschen, bearbeiten
Route::view('/Lehrberuf/create', 'LehrberufErfassen');

Route::get('/Lehrberuf', [BerufController::class,'index']);
Route::get('/Lehrberuf/post', [BerufController::class,'post']);
Route::get('/Lehrberuf/destroy/{pkLehrberuf}', [BerufController::class, 'destroy']);
Route::get('/Lehrberuf/edit/{pkLehrberuf}', [BerufController::class, 'edit']);
Route::post('/Lehrberuf/update/{pkLehrberuf}', [BerufController::class, 'update']);

//Ausbilder anzeigen, erstellen, löschen, bearbeiten
Route::get('/Ausbilder/create',  [AusbilderController::class,'create']);
Route::get('/Ausbilder', [AusbilderController::class,'index']);
Route::get('/Ausbilder/post', [AusbilderController::class,'post']);
Route::get('/Ausbilder/destroy/{pkAusbilder}', [AusbilderController::class, 'destroy']);
Route::get('/Ausbilder/edit/{pkAusbilder}', [AusbilderController::class, 'edit']);
Route::post('/Ausbilder/update/{pkAusbilder}', [AusbilderController::class, 'update']);

//Verknüpfung von Schulfach und Beruf mit anzeigen, erstellen, löschen, bearbeiten
Route::get('/FachBeruf/{pkFach}', [FachBerufController::class, 'index']);
Route::get('/FachBeruf/destroy/{pkFachLehrberuf}', [FachBerufController::class, 'destroy']);
Route::get('/FachBeruf/create/{pkFach}', [FachBerufController::class, 'create']);
Route::get('/FachBeruf/post/{pkFach}', [FachBerufController::class, 'post']);