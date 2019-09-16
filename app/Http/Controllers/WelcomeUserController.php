<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    //__INVOKE se utiliza cuando la clase tiene un solo metodo
    //y en el controlador ya no se coloca el nombre
    public function __invoke($name, $nickname=null)
    {
        if ($nickname) {
            return "Bienvenido {$name}, tu apodo es: {$nickname}";
        }else {
            return "Bienvenido {$name}, no tienes apodo";
        }
        
    }
}
