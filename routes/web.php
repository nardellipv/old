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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/job/birthday', 'JobController@birthday')->name('birthday');

//client
Route::middleware(['auth'])->group(function () {
    Route::get('/cliente/dashboard', 'DashboardController@clientDashboard')->name('clientDashboard');

    Route::get('/cliente/perfil/{id}', 'ClientController@showProfile')->name('client.showProfile');
    Route::post('/cliente/perfil/{id}', 'ClientController@updateProfile')->name('client.updateProfile');

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

    Route::get('/admin/producto/venta/{id}', 'ProductController@sellProduct')->name('product.sell');

    Route::get('/admin/cliente', 'ClientController@list')->name('client.list');
    Route::get('/admin/cliente/{id}/show', 'ClientController@show')->name('client.show');
    Route::post('/admin/cliente/{id}/update', 'ClientController@updateClient')->name('client.update');
    Route::view('/admin/cliente/nuevo', 'admin.client.add')->name('client.add');
    Route::post('/admin/cliente/add', 'ClientController@storeClient')->name('client.store');
    Route::get('/admin/cliente/{id}/delete', 'ClientController@delete')->name('client.delete');
    Route::post('/admin/cliente/enviar-registracion', 'ClientController@sendRegisterMail')->name('client.sendRegisterMail');

    Route::get('/admin/servicio/{id}/agregar', 'ClientController@addService')->name('client.addService');
    Route::post('/admin/servicio/{id}/update', 'PointController@updateService')->name('client.updateService');
    Route::get('/admin/servicio/{id}/canjear/{points}', 'PointController@exchenge')->name('client.exchenge');
    Route::post('/admin/servicio/ver/ver-codigo', 'PointController@exchengeShowCode')->name('point.exchengeShowCode');
    Route::post('/admin/servicio/canjear-codigo/{code}', 'PointController@exchengeCode')->name('point.exchengeCode');

    Route::get('/admin/notificaciones', 'NotificationController@listNotification')->name('notification.list');
    Route::post('/admin/crear', 'NotificationController@createNotification')->name('notification.create');
    Route::get('/admin/borrar/{id}', 'NotificationController@deleteNotification')->name('notification.delete');

    Route::get('/admin/ventas', 'SaleController@saleList')->name('sale.list');
    Route::get('/admin/ventas/detalle/{month}/{year}', 'SaleController@saleDetail')->name('sale.detail');
    Route::get('/admin/agregar/ventas', 'SaleController@saleAdd')->name('sale.add');
    Route::get('/admin/ver/ventas/{id}', 'SaleController@saleShow')->name('sale.show');
    Route::post('/admin/actualizar/ventas/{id}', 'SaleController@saleUpdate')->name('sale.update');
    Route::get('/admin/borrar/ventas/{id}', 'SaleController@saleDelete')->name('sale.delete');
    Route::post('/admin/guardar/ventas', 'SaleController@saleStore')->name('sale.store');
});