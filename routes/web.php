<?php

Route::get('/', function(){
    return 'home';
});

Route::get('/usuarios',function(){
    return 'USUARIOS';
});

Route::get('/usuarios/{id}', function($id){
    return "Mostrando detalle del usuario: {$id}";
})->where('id','[0-9]+');
//ACA EN LAS RUTAS IMPORTA MUCHO EL ORDEN
Route::get('/usuarios/nuevo', function(){
    return "usuario Nuevo";
});

Route::get('/saludo/{name}/{nickname?}', function($name, $nickname=null){
    if ($nickname) {
        return "Bienvenido {$name}, tu apodo es: {$nickname}";
    }else {
        return "Bienvenido {$name}, no tienes apodo";
    }
    
});
