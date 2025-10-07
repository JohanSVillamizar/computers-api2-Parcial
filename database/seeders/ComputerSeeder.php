<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Computer;

//Con el proyecto terminado, este seeder se completó para crear los registros de computadoras con las categorías_id correspondientes.
class ComputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Computer::factory()->count(1)->create();
    }
}
