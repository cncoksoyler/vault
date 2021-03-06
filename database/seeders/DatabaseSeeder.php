<?php

namespace Database\Seeders;

use App\Models\InputSource;
use App\Models\Location;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        $this->call(CategorySeeder::class);

        $this->call(MachineSeeder::class);

        $this->call(ProductSeeder::class);

        $this->call(InputSourceSeeder::class);

        $this->call(LocationSeeder::class);

        $this->call(StockDetailSeeder::class);
       

    }
}
