<?php

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

Route::get('/', function () {
    return view('welcome');
})->name("index");

Auth::routes();

//Route::get('/{role}', function () {
//    //mandarle la vista dependiendo de lo que recibo
//})->middleware("auth","role");

Route::group(['middleware' => 'role','prefix' => 'admin'], function () {
    
    Route::resource('table', 'TableController');
    
    Route::resource('order', 'OrderController', ['except' => [
    'create', 'store', 'update', 'destroy'
]]);
    
//    Route::resource('admin', 'AdminController');
    
//    Route::resource('photo', 'PhotoController', ['only' => [
//    'index', 'show'
//]]);
//
//Route::resource('camarero', 'camareroController', ['except' => [
//    'create', 'store', 'update', 'destroy'
//]]);
});