<?php

Route::prefix('/')->namespace('Site')->group(function () {

    Route::get('/', 'SiteController@index');
    Route::get('produto/{produto}', 'SiteController@produto')->name('produto');
    Route::get('contato', 'SiteController@contato')->name('contato');
    Route::get('sobre', 'SiteController@sobre')->name('sobre');
    Route::get('produtos', 'SiteController@produtos')->name('produtos');

    Route::get('carrinho', 'CarrinhoController@index')->name('carrinho');

    Route::resource('pedidos', 'PedidoController');
    Route::resource('carrinho', 'CarrinhoController@carrinho');
 
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


    });    
});