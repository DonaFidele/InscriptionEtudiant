<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


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

Route::get('/', function () {return view('welcome');});

Route::post('/', 'App\Http\Controllers\StudentController@store')->name('student.store');

Route::get('/liste', 'App\Http\Controllers\StudentController@afficherEtudiants')->name('student.liste');

Route::delete('/students/{id}', 'App\Http\Controllers\StudentController@supprimerEtudiant')->name('delete.student');

Route::get('/students/{id}/edit', 'App\Http\Controllers\StudentController@editerEtudiant')->name('edit.student');

Route::put('/students/{id}/update', 'App\Http\Controllers\StudentController@updateEtudiant')->name('update.student');


// Route::get('/student', 'App\Http\Controllers\StudentController@store')->name('student.store');

// 