<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Train;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 10; $i++){
            $newTrain = new Train();

            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->randomElement(['Palermo', 'Napoli', 'Milano']);
            $newTrain->arrival_station = $faker->randomElement(['Palermo', 'Napoli', 'Milano']);
            $newTrain->departure_time = $faker->dateTimeBetween('-1Day', '+1Day');
            $newTrain->arrival_time = $faker->dateTimeBetween('-1Day', '+1Day');
            $newTrain->train_code = $faker->randomDigit();
            $newTrain->wagon_number = $faker->randomDigit();
            $newTrain->on_time = $faker->boolean(50);
            $newTrain->cancelled = $faker->boolean(50);

            $newTrain->save();
        }
    }
}
