<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
            
            $product = Product::all()->pluck('id')->toArray();

            Location::create([
         
            'name'=> $faker->name,
            'product_id'=> $faker->randomElement($product),
            'stock'=>rand(1,3500),



            ]);
        

        }

        


        //
    }
}
