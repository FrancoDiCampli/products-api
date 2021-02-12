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
       
        $sentence = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, nihil nulla. Modi rerum commodi cumque laudantium deserunt voluptate';
        Branch::create([
            'name' =>'Vida',
            'code' => '1',
            'description' => $sentence,
            'is_patrimonial' =>false,
        ]);

        Branch::create([
            'name' =>'Auto',
            'code' => '2',
            'description' => $sentence,
            'is_patrimonial' =>true,
        ]);

        Branch::create([
            'name' =>'Moto',
            'code' => '3',
            'description' => $sentence,
            'is_patrimonial' =>true,
        ]);
        Branch::create([
            'name' =>'Robo',
            'code' => '4',
            'description' => $sentence,
            'is_patrimonial' =>false,
        ]);
    }
}
