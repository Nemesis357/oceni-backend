<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\City;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(City::class)->create();
    }
}
