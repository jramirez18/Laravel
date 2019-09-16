<?php

Route::get('/', function(){
    return 'home';
});

//las rutas deben de apuntar al CONTROLADOR seguido de un @ y el nombre del metodo
Route::get('/usuarios','UserController@index');

Route::get('/usuarios/{id}','UserController@show')
    ->where('id','[0-9]+');

//ACA EN LAS RUTAS IMPORTA MUCHO EL ORDEN
Route::get('/usuarios/nuevo', 'UserController@create');

Route::get('/saludo/{name}/{nickname?}','WelcomeUserController');
