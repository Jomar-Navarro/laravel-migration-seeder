<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 87; $i++){
            $new_train = new Train();
            $new_train->company;
            $new_train->slug;
            $new_train->company;
            $new_train->company;
            $new_train->company;
            $new_train->company;
            $new_train->company;
            $new_train->company;
            $new_train->company;
            $new_train->company;
            $new_train->company;
        }
    }
}
