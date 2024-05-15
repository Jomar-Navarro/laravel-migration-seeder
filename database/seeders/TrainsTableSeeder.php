<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 87; $i++){
            $new_train = new Train();
            $new_train->company = $faker->words(2, true);
            $new_train->slug = $this->generateSlug($new_train->company);
            $new_train->departure_station = $faker->words(2, true);
            $new_train->arrival_station = $faker->words(2, true);
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->ean13();
            $new_train->ticket_price = $faker->numberBetween(1, 1000);
            $new_train->carriages_number = $faker->numberBetween(1, 10);

            $new_train->save();
            // dump($new_train);
        }
    }

    private function generateSlug($string){
        $slug = Str::slug($string, '-');
        $original_slug = $slug;


        $exists = Train::where('slug', $slug)->first();
        $c = 1;

        while($exists){
            $slug = $original_slug . '-' . $c;
            $exists = Train::where('slug', $slug)->first();
            $c++;

        }
        return $slug;
    }


}
