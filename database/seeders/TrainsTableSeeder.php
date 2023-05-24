<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\trains;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $train = new trains();
            $train->company = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->dateTime();
            $train->arrival_time = $faker->dateTimeInInterval($train->departure_time,"+2 days");
            $train->train_code = $faker->realText(2).$faker->numberBetween(1000,9999).$faker->realText(2);
            $train->carriage_number = $faker->numberBetween(0,3);
            $train->save();
        }
    }
}
