<?php

Auth::routes();

Route::get('/', function () {
        return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/invoices', 'InvoiceController@index');
    Route::get('/invoice/create', 'InvoiceController@create');
    Route::post('/invoice/create', 'InvoiceController@store');
    Route::delete('/invoice/{invoice}', 'InvoiceController@destroy');
    Route::get('home', function() {
        return view('home');
    });
});