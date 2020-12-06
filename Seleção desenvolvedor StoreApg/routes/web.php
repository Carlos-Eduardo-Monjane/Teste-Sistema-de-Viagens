<?php

Route::get('/', function () {
    return view('main');
})->middleware('auth');


Route::post('viagem', 'TesteController@distancia')->name('viagem')->middleware('auth');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
