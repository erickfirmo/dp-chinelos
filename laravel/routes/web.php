<?php


Route::prefix('/')->namespace('Site')->group(function () {
    Route::get('/', 'SiteController@index');
    Route::get('produto/{single_product}', 'SiteController@produto')->name('produto');
    Route::get('contato', 'SiteController@contato')->name('contato');
    Route::get('sobre', 'SiteController@sobre')->name('sobre');
    Route::get('slogin', 'SiteController@slogin')->name('slogin');
    Route::get('produtos', 'SiteController@produtos')->name('produtos');
    Route::get('produtos/categoria/{category}', 'SiteController@produtosDaCategoria')->name('produtos');

    Route::get('carrinho', 'CarrinhoController@index')->name('carrinho');
    Route::post('cartedit', 'CarrinhoController@cartEdit')->name('cartedit');

    Route::resource('carrinho', 'CarrinhoController');
    Route::get('checkout', 'PedidoController@index')->name('checkout');
    Route::resource('pedido', 'PedidoController');

    Route::get('admin', function () {
        return redirect()->route('admin.home');
    });



});

Auth::routes();


Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function () {
    Auth::routes();
    Route::middleware('auth:admin')->group(function () {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::resource('produtos', 'ProdutoController');
        Route::resource('categorias', 'CategoriaController');
        Route::resource('pedidos', 'PedidoController');

    });    
});