<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sentence ='Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero veniam rem veritatis sint eum! Deleniti.';
        
        Branch::create([
            'name' => 'Vida',
            'code' => 'V',
            'description' => $sentence,
            'is_patrimonial' => false,
        ]);
        Branch::create([
            'name' => 'Auto',
            'code' => 'A',
            'description' => $sentence,
            'is_patrimonial' => true,
        ]);
        Branch::create([
            'name' => 'Moto',
            'code' => 'M',
            'description' => $sentence,
            'is_patrimonial' => true,
        ]);
        Branch::create([
            'name' => 'Robo',
            'code' => 'R',
            'description' => $sentence,
            'is_patrimonial' => false,
        ]);
    }
}
