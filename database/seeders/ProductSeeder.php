<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Faker\Factory;
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
        $name 
        $faker = Factory::create();
        $categories = Category::all()->pluck('id')->toArray();
        $unitEnum = ['piece', 'package', 'meter','kg'];
        for ($i = 0;$i<10; $i++) {
            $name = $faker->name;
            
            Product::create([
                
                'name' => $name,
                
                'slug' => Str::slug($name) ,
                'barcode_code' => $faker->numerify('#######'),
                'product_code' => $faker->asciify('###-###-###'),
                'description' => $faker->text(),
                'category_id' => $faker->randomElement($categories),
                'unit' =>$unitEnum[rand(0,3)],
                'min_stock' => $faker->randomFloat($nbMaxDecimals = 5, $min = 0, $max = 20),
                'remaining' => $faker->randomFloat($nbMaxDecimals = 5, $min = 0, $max = 20),
                'image' => $faker->imageUrl(100, 100, 'cats')
                 // password
            ]);
        };
    }
}
