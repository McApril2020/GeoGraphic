<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create();
        // foreach(range(1,10) as $index) {
        //     DB::table('states')->insert([
        //         'state' => $faker->state,
        //         'country_id' => $faker->buildingNumber,
        //         'state_code' => $faker->stateAbbr
        //     ]);
        // }

        $sql = file_get_contents(database_path() . '/seeds/state.sql');

        DB::insert($sql);
    }
}
