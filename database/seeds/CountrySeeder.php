<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // after migation create seeder
        // fake data for countries
        // $faker = Faker::create();
        // foreach(range(1,12) as $index) {
        //     DB::table('countries')->insert([
        //         'country' => $faker->country,
        //         'country_code' => $faker->countryCode,
        //         'currency' => $faker->currencyCode
        //     ]);
        // }
        $sql = file_get_contents(database_path() . '/seeds/country.sql');

        DB::insert($sql);
    }
}
