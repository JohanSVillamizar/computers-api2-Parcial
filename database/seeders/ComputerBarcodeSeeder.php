<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Computer;
use Illuminate\Support\Str;

//Este seeder asigna códigos de barras a las computadoras que no los tienen
class ComputerBarcodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $computers = Computer::whereNull('computers_barcode')->get();
        foreach ($computers as $computer) {
            $computer->computers_barcode = Str::upper(Str::random(12));
            $computer->save();
        }
    }
}
