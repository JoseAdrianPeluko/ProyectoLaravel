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

Auth::routes();

Route::get('/{scope?}', function ($scope = "") {

    $products = \App\Product::orderBy("categoria")->get();
    $categorias = $products->groupBy("categoria");
    if ($scope) {
        $products = \App\Product::where('categoria', $scope)->get();
    }
    
//    dd(Auth::user()->order->cantidad);
// dd(\App\User::find(Auth::user()->order_id)->order());
// dd(Auth::user()->order());
    return view('welcome', compact("categorias", "products"));
})->name("index");



//Route::get('/{role}', function () {
//    //mandarle la vista dependiendo de lo que recibo
//})->middleware("auth","role");

Route::group(['middleware' => 'role', 'prefix' => 'admin'], function () {

    Route::resource('table', 'TableController');
 
    Route::get('order/home', 'OrderController@home')->name("order.home");
    
Route::get('order/edit/{$estado}/{$id}', 'OrderController@edit');

    Route::resource('order', 'OrderController', ['except' => [
    'edit']]);
    
        Route::get('order/edit/{estado}/{id}', 'OrderController@edit');



//    Route::resource('admin', 'AdminController');
//    Route::resource('photo', 'PhotoController', ['only' => [
//    'index', 'show'
//]]);
//
//Route::resource('camarero', 'camareroController', ['except' => [
//    'create', 'store', 'update', 'destroy'
//]]);
});
