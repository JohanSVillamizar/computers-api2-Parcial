<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Computer;

//Este seeder asignó categorías específicas a las computadoras ya existentes
class AssignSelectedCategoriesToComputersSeeder extends Seeder
{
    public function run(): void
    {
        $allowedCategoryIds = [4, 6, 11];

        $computers = Computer::all();

        foreach ($computers as $computer) {
            
            $computer->category_id = $allowedCategoryIds[array_rand($allowedCategoryIds)];
            $computer->save();
        }
    }
}
