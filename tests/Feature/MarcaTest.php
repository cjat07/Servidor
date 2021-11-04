<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MarcaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_json_marcas_total_vehiculos()
    {
        $this->get('/api/marcas')->assertStatus(200);

    }

    public function test_get_json_marcas()
    {
        $this->get('/api/getmarcas')->assertStatus(200);

    }    
}
