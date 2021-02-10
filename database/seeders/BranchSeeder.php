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
        
        Branch::create([
            'name'=>'vida',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adips atque asperiores. Libero laborum incidunt numquam excepturi, maiores blanditiis.',
        ]);
        Branch::create([
            'name'=>'robo',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adips atque asperiores. Libero laborum incidunt numquam excepturi, maiores blanditiis.',
        ]);
        Branch::create([
            'name'=>'auto',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adips atque asperiores. Libero laborum incidunt numquam excepturi, maiores blanditiis.',
        ]);
    }
}
