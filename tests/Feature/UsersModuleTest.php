<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /**
     * @test
     * para no colocar test en cada prueba lo colocamos aca
     */
    
     function carga_lista_usuarios()
    {
        //Simulamos una peticion de tipo get a la URL de la direccion /usuarios 
        //y asi probar que esta URL carga correctamente
        $response = $this->get('/usuarios');
        $response->assertStatus(200);
        //y comprobamos que cuanto se cargue la url pueda verifica que exita el texto USUARIOS
        $response->assertSee('USUARIOS');//USUARIOS hace referencia a que este texto debe de existir en la page principal
    }

    /** @test */
    function carga_detalles_usuarios()
    {
        $response = $this->get('/usuarios/5');
        $response->assertStatus(200);
        $response->assertSee('Mostrando detalle del usuario: 5');
    }

    /** @test */
    function creacion_nuevo_usuario()
    {
        $response = $this->get('/usuarios/nuevo');
        $response->assertStatus(200);
        $response->assertSee('usuario Nuevo');
    }
}
