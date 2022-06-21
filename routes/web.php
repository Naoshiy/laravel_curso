<?php

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
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('materials', [EventController::class, 'materials']);
Route::get('create/material_enter', [EventController::class, 'create_material_view']);
Route::post('create', [EventController::class, 'material_enter']);
// datatable
Route::get('data_view/view_material_enter',[EventController::class, 'material_view']);
Route::get('data_view',[EventController::class, 'material'])->name('data_view');




// Route::get('contact', function() {
//     return view('contact');
// });

// Route::get('Material-Enter', function(){
//     return view('material_enter');
// });

// Route::get('materials', [EventController::class, 'materials']);
