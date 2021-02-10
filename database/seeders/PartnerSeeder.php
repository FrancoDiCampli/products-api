<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $galeno = Partner::create([
            'name'=>'Galeno',
            'cuit' => '23222333449',
            'address'=>'25 dde Mayo 345',
            'phone'=>'43242233',
            'email'=>'admin@galeno.com',
            'package'=>'galeno',
            'base_url_api'=>'api/galeno',
            'image'=>'img/galeno.png',
          ]);
    
    }
}
