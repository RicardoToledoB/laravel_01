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

Route::delete('users/delete/{id}',[
    'as'=>'usersDelete',
    'uses'=>'UsuarioController@delete'
]);

Route::get('users/edit/{id}',[
    'as'=>'userEdit',
    'uses'=>'UsuarioController@edit'
]);


Route::put('users/update/{id}',[
   'as'=>'userUpdate',
   'uses'=>'UsuarioController@update'
    
]);
