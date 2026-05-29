<?php

namespace Tests\Feature;

use Tests\TestCase;

class AnimalTest extends TestCase
{
    public function test_la_aplicacion_responde_correctamente(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_prueba_basica_del_pipeline(): void
    {
        $this->assertTrue(true);
    }
}