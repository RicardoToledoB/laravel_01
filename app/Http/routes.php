<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('users/index',[
    'as'=>'usersIndex',
    'uses'=>'UsuarioController@index'
]);

Route::get('users/nuevo',function(){
    return view('users.nuevo');
});

Route::post('users/save',[
	'as'=>'usersSave',
	'uses'=>'UsuarioController@save'

]);

Route::get('users/delete/{id}',[
    'as'=>'usersDelete',
    'uses'=>'UsuarioController@delete'
]);

