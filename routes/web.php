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


Route::namespace('Buffet')->group(function(){

    Route::get('/', 'SiteController@index')->name('inicio');
    Route::get('/produto/{id}', 'SiteController@detalhes')->name('detalhes');
    
    Route::middleware(['auth', 'acesso-i'])->group(function(){
        
        Route::get('/item/lista', 'SiteController@tabela')->name('item-tabela');
        Route::get('/novo', 'SiteController@form')->name('novo');
        Route::post('/cadastrar', 'SiteController@cadastrar')->name('cadastrar');
        Route::get('/{id}/update', 'SiteController@formUpdate')->name('atualizar');
        Route::delete('/{id}/del', 'SiteController@deletar')->name('delete');
        Route::put('/salvar/{id}', 'SiteController@salvar')->name('salvar');

    });

    Route::get('/access/error-msg/{nivel}', 'SiteController@erroAcesso')->name('acesso-erro');

});

// Route::get('/home', 'HomeController@index')->name('home');