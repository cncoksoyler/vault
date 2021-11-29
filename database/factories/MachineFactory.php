<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


class MachineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

       $areaEnum = ['stamping','assembly','overmoulding','plating','heat treatement','fineblanking','others'];
       $amgEnum = ['AMG7','AMG8'];
        return [
            
            'name' => $this->faker->name(),
            'AMG' => $amgEnum[rand(0,1)],
            'area' => $areaEnum[rand(0,6)], // password
            
        ];
        
      
    }
}
