<?php

/*Route::get('/', function () {
    return view('site.home.index');
});*/

Route::get('/', 'SiteController@index');


Auth::routes();

Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function () {
    Auth::routes();
    Route::middleware('auth:admin')->group(function () {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::resource('produtos', 'ProdutoController');
        Route::resource('imagens', 'ImagemController');
        Route::resource('categorias', 'CategoriaController');  
    });    
});