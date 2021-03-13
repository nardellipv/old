<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
    
    Route::get('/prductos', 'ProductController@listProduct')->name('product.list');
    Route::get('/prductos/{id}/show', 'ProductController@showProduct')->name('product.show');
    Route::post('/prductos/{id}/update', 'ProductController@updateProduct')->name('product.update');
    Route::view('/prductos/nuevo', 'admin.product.add')->name('product.add');
    Route::post('/prductos/add', 'ProductController@storeProduct')->name('product.store');
    Route::get('/prductos/{id}/delete', 'ProductController@deleteProduct')->name('product.delete');

    Route::get('/cliente', 'ClientController@list')->name('client.list');
    Route::get('/cliente/{id}/show', 'ClientController@show')->name('client.show');
    Route::post('/cliente/{id}/update', 'ClientController@updateClient')->name('client.update');
    Route::view('/cliente/nuevo', 'admin.client.add')->name('client.add');
    Route::post('/cliente/add', 'ClientController@storeClient')->name('client.store');
    Route::get('/cliente/{id}/delete', 'ClientController@delete')->name('client.delete');

    Route::get('/servicio/{id}/agregar', 'ClientController@addService')->name('client.addService');
    Route::post('/servicio/{id}/update', 'PointController@updateService')->name('client.updateService');
    Route::post('/servicio/{id}/canjear', 'PointController@exchenge')->name('client.exchenge');
});