<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        for ($i = 0; $i < 10; $i++) {
            Product::create([
                'name' 	        =>	'name'.$i,
                'description'	=>	'description'.$i,
                'price'			=>	10.5+$i
            ]);
        };
        
    }
}
