<?php

namespace Database\Seeders;

use App\Models\InputSource;
use Faker\Factory;
use Illuminate\Database\Seeder;

class InputSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Factory::create();

        for ($i=0; $i<10 ;$i++ ){ 
            InputSource::create([
                'name'=> $faker->name,


            ]);


        }


        
        //
    }
}
