<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClienteVehiculoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_cliente_and_vehiculo()
    {
        $this->post('/api/crear', [
            'nombre' => 'Duilio',
            'cedula' => '1234567',
            'placa' => 'QLR77C',
            'tipo_id' => 1,
            'marca_id' => 2
        ])->assertStatus(200);  

    }
        // $response = $this->get('/');

        // $response->assertStatus(200);
    // public function it_visit_page_of_marca()
    // {
    //     $this->post('/api/crear', [
    //         'nombre' => 'Duilio',
    //         'cedula' => '1234567',
    //         'placa' => 'QLR77C',
    //         'tipo_id' => 1,
    //         'marca_id' => 2
    //     ])->assertRedirect('home');
    // }       
}
