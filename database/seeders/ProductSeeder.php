<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = array (
            'vida'=>'pago unico',
            'robo'=>'robo atm',           
            'auto'=>'auto todo riesgo');
          
          
    for ($i=1; $i < 4; $i++) { 
        foreach ($products as $key => $value) {    
            $branch = Branch::where('name','LIKE','%'.$key.'%')->select(['id','name'])->first();        
            Product::create([
            'name'=>$value,
            'price' => rand(200,1000),
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'branch_id'=>$branch['id'],
          ]);
         
        }
    }
    }
}
