<?php

use Faker\Generator as Faker;
use App\Train;

use Illuminate\Database\Seeder;
class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 1000 ; $i++){
            $train = new Train;
            $train->agency = $faker->company();
            $train->start_station = $faker->cityPrefix();
            $train->arrival_place = $faker->cityPrefix();
            $train->starting_time = $faker->time('H:i');
            $train->arrival_time = $faker->time('H:i');
            $train->train_code = $faker->bothify();
            $train->carriages_num = $faker->numberBetween(1,50);
            $train->in_time = $faker->boolean();
            $train->deleted = $faker->boolean();
            $train->save();
        }
    }
}
