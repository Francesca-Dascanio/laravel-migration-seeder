<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $train = new Train();
            $train->company = $faker->word();
            $train->departure = $faker->city();
            $train->arrival = $faker->city();
            $train->departure_date = $faker->date();
            $train->departure_hour = $faker->time();
            $train->arrival_date = $faker->date();
            $train->arrival_hour = $faker->time();
            $train->train_code = $faker->randomNumber(5, true);
            $train->carriage_number = $faker->randomNumber(1, true);
            $train->train_delay = $faker->boolean();
            $train->train_cancelled = $faker->boolean();
            $train->price = $faker->randomFloat(2);
            $train->change_number = $faker->randomNumber(1, true);
            $train->save();
        }
        

    }
}
