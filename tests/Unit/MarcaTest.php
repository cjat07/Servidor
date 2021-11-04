<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Models\Marca;
use Illuminate\Database\Eloquent\Collection;

class MarcaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_to_marca_has_many_vehiculos()
    {
        $marca= new Marca;
        $this->assertInstanceOf(Collection::class, $marca->vehiculos);
    }

 
}
