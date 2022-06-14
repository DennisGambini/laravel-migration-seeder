<?php

use Illuminate\Database\Seeder;
use App\Holiday;
use Faker\Generator as Faker;

class HolidayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run(Faker $faker){
        for($i = 0; $i < 100; $i++){
            $newHoliday = new Holiday;

            $newHoliday->name = $faker->sentence(2);
            $newHoliday->departure = $faker->dateTimeBetween('-1 week', '+1 week');
            $newHoliday->arrival = $faker->dateTimeBetween('-1 week', '+1 week');
            $newHoliday->price = $faker->randomFloat(2, 50, 30000);
            $newHoliday->img_url = $faker->imageUrl(300, 300, 'Holiday', true);
            $newHoliday->type_of_vacation = $faker->sentence(2);
            $newHoliday->description = $faker->paragraph(3);
            $newHoliday->pets_allowed = $faker->boolean();
            $newHoliday->refound = $faker->boolean();
            $newHoliday->max_people = $faker->numberBetween(1, 19);

            $newHoliday->save();
        }
    
    }
}
