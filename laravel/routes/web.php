<?php

Route::prefix('/')->namespace('Site')->group(function () {
    Route::get('/', 'SiteController@index');
    Route::get('produto/{produto}', 'ProdutoController@show')->name('produto');
    Route::get('carrinho', 'CarrinhoController@index')->name('carrinho');
    
    Route::get('contato', 'ContatoController@index')->name('contato');
    
    Route::get('produtos', 'CategoriaController@ShowCategorias')->name('produtos');
    Route::get('categoria/{categoria}', 'CategoriaController@show')->name('categoria');
 
});

Auth::routes();

Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function () {
    Auth::routes();
    Route::middleware('auth:admin')->group(function () {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::resource('produtos', 'ProdutoController');
        Route::resource('imagens', 'ImagemController');
        Route::resource('categorias', 'CategoriaController');
        Route::resource('tamanhos', 'TamanhoDoProdutoController');
        Route::put('tamanhos', 'TamanhoDoProdutoController@store');


    });    
});