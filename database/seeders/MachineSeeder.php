<?php

namespace Database\Seeders;

use App\Models\Machine;
use Faker\Factory;
use Illuminate\Database\Seeder;

class MachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $areaEnum = ['stamping','assembly','overmoulding','plating','heat treatement','fineblanking','others'];
        $amgEnum = ['AMG7','AMG8'];
        for ($i = 0;$i<10; $i++) {
            Machine::create([
                'name' => $faker->name,
                'AMG' => $amgEnum[rand(0,1)],
                'area' => $areaEnum[rand(0,6)], // password
            ]);
        };

        
        
            
             
         
    }
}
