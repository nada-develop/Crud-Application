<?php

use Illuminate\Database\Seeder;
use App\City;
class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $city = new City();
        // $city->city_name = "Cairo";
        // $city->save();

        City::create(["city_name" => "Cairo"]);
        City::create(["city_name" => "Giza"]);
        City::create(["city_name" => "Aswan"]);
        City::create(["city_name" => "Alex"]);
        City::create(["city_name" => "Matrouh"]);
        City::create(["city_name" => "Suhag"]);
    }
}
