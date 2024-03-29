<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            $train = new Train();
            $train->agency = $faker->randomElement(['Trenitalia', 'Italo',]);
            $train->departure_station = $faker->randomElement(['Napoli Afragola', 'Torino Porta Susa', 'Milano Centrale', 'Milano Porta Garibaldi', 'Napoli Centrale', 'Venezia Santa Lucia', 'Reggio Emilia Mediopadana', 'Bologna Centrale', 'Firenze Santa Maria Novella', 'Roma Tiburtina', 'Roma Termini']);
            do {
                $train->arrival_station = $faker->randomElement(['Napoli Afragola', 'Torino Porta Susa', 'Milano Centrale', 'Milano Porta Garibaldi', 'Napoli Centrale', 'Venezia Santa Lucia', 'Reggio Emilia Mediopadana', 'Bologna Centrale', 'Firenze Santa Maria Novella', 'Roma Tiburtina', 'Roma Termini']);
            } while ($train->departure_station === $train->arrival_station);
            $train->date = $faker->randomElement(['2024-01-17', '2024-01-18', '2024-01-19', '2024-01-20']);
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->bothify('??#?#?');
            $train->carriages_number = $faker->numberBetween(5, 15);
            $train->in_time = $faker->boolean();
            $train->deleted = $faker->boolean();
            $train->save();
        }
    }
}
