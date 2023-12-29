<?php

use App\Http\Controllers\HomeController;
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


Route::get('/register',[HomeController::class,'register']);
Route::post('/register',[HomeController::class,'store']);
Route::get('/index1',[HomeController::class,'index1']);
Route::get('/login',[HomeController::class,'login']);
Route::get('/index2',[HomeController::class,'index2']);
Route::get('/index3',[HomeController::class,'index3']);
Route::get('/eventManagement',[HomeController::class,'eventManagement']);

Route::get('/formElements',[HomeController::class,'formElements']);
Route::get('/formWizard',[HomeController::class,'formWizard']);
Route::get('/formSummerNote',[HomeController::class,'formSummerNote']);
Route::get('/addProfessors',[HomeController::class,'addProfessors']);
Route::post('/addProfessors',[HomeController::class,'storeProfessorsInfo']);
Route::get('/allProfessors',[HomeController::class,'allProfessors']);
Route::get('/delete_professors_data/{id}',[HomeController::class,'delete_professors_data']);


