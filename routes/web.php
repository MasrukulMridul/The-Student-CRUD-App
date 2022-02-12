<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\studentController;

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

Route::get('/', [studentController::class, 'view']);

Route::get('/students',[studentController::class, 'view']);
Route::get('/students/delete/{id}',[studentController::class, 'delete']);

Route::view('students/add', 'students.add');
Route::post('/students/add', [studentController::class, 'add']);

Route::get('/students/update/{id}',[studentController::class, 'update']);
Route::post('/students/Update', [studentController::class, 'change']);

