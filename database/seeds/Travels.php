<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Travel;


class Travels extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $newTravel = new Travel();
            $newTravel->destinazione = $faker->word();
            $newTravel->nazione_name = $faker->word();
            $newTravel->data_viaggio = $faker->dateTime();
            $newTravel->prezzo = $faker->randomFloat(2);
            /* var_dump($newTravel); */
            $newTravel -> save();
        }
    }
}
