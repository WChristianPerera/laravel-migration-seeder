<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            Train::create([
                'company' => $faker->company(),
                'departure_station' => $faker->city(),
                'arrival_station' => $faker->city(),
                'departure_time' => $faker->time(),
                'arrival_time' => $faker->time(),
                'train_code' => $faker->bothify('?####'),
                'number_of_carriages' => rand(1, 30),
                'in_time' => $faker->boolean(),
                'deleted' => $faker->boolean(),
            ]);
        }
    }
}
