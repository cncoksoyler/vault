<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Location;
use App\Models\User;
use App\Models\InputSource;
use App\Models\StockDetail;
use Faker\Factory;
use Illuminate\Database\Seeder;


class StockDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create();
        $product = Product::all()->pluck('id')->toArray();
        $location = Location::all()->pluck('id')->toArray();
        $user = User::all()->pluck('id')->toArray();
        $inputSource = InputSource::all()->pluck('id')->toArray();

        for($i=0;$i<10;$i++){
            StockDetail::create([

            'product_id'=>$faker->randomElement($product),
            'location_id'=>$faker->randomElement($location),
            'user_id'=>$faker->randomElement($user),
            'input_source_id'=>$faker->randomElement($inputSource),
            'quantitiy'=>rand(5,150),

        ]);

        

        }
    }

       
    }
