<?php

use Illuminate\Support\Facades\Route;

Route::get('/clear', function() {
    \Artisan::call('config:clear');
    \Artisan::call('cache:clear');
    \Artisan::call('config:cache');
    \Artisan::call('view:clear');
    return 'FINISHED';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//client
Route::middleware(['auth'])->group(function () {
    Route::get('/cliente/dashboard', 'DashboardController@clientDashboard')->name('clientDashboard');

    Route::get('/cliente/perfil/{id}', 'ClientController@showProfile')->name('client.showProfile');
    Route::post('/cliente/perfil/{id}', 'ClientController@updateProfile')->name('client.updateProfile');

    Route::get('/cliente/ver/{id}', 'PointController@clientShowExchange')->name('point.showExchengeClient');
    Route::get('/cliente/canjear/{id}', 'DashboardController@clientExchange')->name('point.exchengeClient');

    Route::get('/cliente/listado', 'PointController@listExchange')->name('point.listExchengeClient');
});


//admin
Route::middleware(['auth','UserType'])->group(function () {
    Route::get('/admin/dashboard', 'DashboardController@dashboard')->name('dashboard');
    
    Route::get('/admin/prductos', 'ProductController@listProduct')->name('product.list');
    Route::get('/admin/prductos/{id}/show', 'ProductController@showProduct')->name('product.show');
    Route::post('/admin/prductos/{id}/update', 'ProductController@updateProduct')->name('product.update');
    Route::view('/admin/prductos/nuevo', 'admin.product.add')->name('product.add');
    Route::post('/admin/prductos/add', 'ProductController@storeProduct')->name('product.store');
    Route::get('/admin/prductos/{id}/delete', 'ProductController@deleteProduct')->name('product.delete');

    Route::get('/admin/cliente', 'ClientController@list')->name('client.list');
    Route::get('/admin/cliente/{id}/show', 'ClientController@show')->name('client.show');
    Route::post('/admin/cliente/{id}/update', 'ClientController@updateClient')->name('client.update');
    Route::view('/admin/cliente/nuevo', 'admin.client.add')->name('client.add');
    Route::post('/admin/cliente/add', 'ClientController@storeClient')->name('client.store');
    Route::get('/admin/cliente/{id}/delete', 'ClientController@delete')->name('client.delete');

    Route::get('/admin/servicio/{id}/agregar', 'ClientController@addService')->name('client.addService');
    Route::post('/admin/servicio/{id}/update', 'PointController@updateService')->name('client.updateService');
    Route::post('/admin/servicio/{id}/canjear', 'PointController@exchenge')->name('client.exchenge');

    Route::get('/admin/categoria/', 'CategoryController@list')->name('category.list');
    Route::post('/admin/categoria/add', 'CategoryController@addCategory')->name('category.add');
    Route::post('/admin/categoria/{id}/update', 'CategoryController@updateCategory')->name('category.update');
    Route::get('/admin/categoria/{id}/delete', 'CategoryController@deleteCategory')->name('category.delete');

    Route::get('/admin/showchangeQR/{id}', 'PointController@showChangeQr')->name('point.showChangeQr');
    Route::get('/admin/changeQR/{id}', 'PointController@ChangeQr')->name('point.ChangeQr');
});

