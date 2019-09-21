<?php

namespace App\Http\Controllers;//namespace es como el apellido de una clase

use Illuminate\Http\Request;

//es una clase de php que tiene un nombre de espacio
class UserController extends Controller //es solo una clase
{
    //METODOS o acciones
    public function index()//pagina principal
    {
        if (request()->has('empty')) {
            # code...
            $users=[];
        }
        else {
            # code...
            $users=[
                'Joel',
                'Elena',
                'Jorge',
                'Tess',
                'Tommy',
            ];
        }

        return view('users', [
            'users'=> $users,
            'title'=> 'Listado de usuarios'

        ]);//nombre de la vista relatica a la carpeta

    }

    public function show($id)
    {
        return "Mostrando detalle del usuario: {$id}";
    }

    public function create()
    {
        return "usuario Nuevo";
    }
}
