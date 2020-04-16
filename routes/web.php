<?php
 Route::get('/','TaskController@index');
 Route::get('index_page','TaskController@index_page');
 Route::get('add_page','TaskController@add_page');
 Route::delete('delete/{id}','TaskController@destroy') ;
 Route::post('store','TaskController@store');
 Route::post('edit/{id}', 'TaskController@edit');
 Route::patch('update/{id}', 'TaskController@update');