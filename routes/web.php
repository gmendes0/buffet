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
    
    Route::middleware('auth')->group(function(){
        
        Route::get('/novo', 'SiteController@form')->name('novo');
        Route::post('/cadastrar', 'SiteController@cadastrar')->name('cadastrar');
        Route::get('/{id}/update', 'SiteController@formUpdate')->name('atualizar');
        Route::delete('/{id}/del', 'SiteController@deletar')->name('delete');

    });

});
    

Route::get('/home', 'HomeController@index')->name('home');