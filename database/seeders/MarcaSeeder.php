<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marcas')->insert([
            ['marca' => 'Mazda'],
            ['marca' => 'BMW'],
            ['marca' => 'CHEVROLET'],
            ['marca' => 'KIA'],
            ['marca' => 'RENAULT']
        ]);
    }
}
