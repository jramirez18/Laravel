<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUserTest extends TestCase
{
    /** @test */
    public function bienvenida_users_con_nickname()
    {
        $response = $this->get('/saludo/jorge/yorch');

        $response->assertStatus(200);
        $response->assertSee('Bienvenido jorge, tu apodo es: yorch');
    }

    /** @test */
    public function bienvenida_users_sin_nickname()
    {
        $response = $this->get('/saludo/jorge');

        $response->assertStatus(200);
        $response->assertSee('Bienvenido jorge, no tienes apodo');
    }
}
