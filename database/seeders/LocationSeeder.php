<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        
        for ($i=0;$i<10;$i++){
            
            $product = Product::create([
                'name'=>$faker->sentence(),
                
            ]);

            Location::create([
            'name'=> $faker->name,
            'product_id'=> $product->id,
            'stock'=>rand(1,3500),



            ]);
        

        }

        


        //
    }
}
