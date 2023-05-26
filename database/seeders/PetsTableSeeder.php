<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pet;
use Faker\Generator as Faker;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 10; $i++){
            $newPet = new Pet();
            $newPet->type = 'cane';
            $newPet->race = 'Bull dog francese';
            $newPet->name = $faker->firstName();
            $newPet->data_of_birth = $faker->date('Y_m_d');
            $newPet->adopted = false;
            $newPet->save();
        }
    }
}
