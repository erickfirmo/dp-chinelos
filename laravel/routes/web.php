<?php


Route::get('/', function () {
    return view('site.layouts.site');

});

Route::get('/login', 'Auth/LoginController@showLoginForm')->name('login');

Auth::routes();

Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('produtos', 'ProdutoController');
        Route::resource('imagens', 'ImagemController');
        Route::resource('categorias', 'CategoriaController');      
});



