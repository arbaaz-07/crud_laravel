<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\participant;
use Faker\Factory as Faker;

class participantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        for ($i=0; $i <20; $i++) { 
            $participant=new participant;
            $participant->name=$faker->name;
            $participant->email=$faker->email;
            $participant->hobby="sports";
            $participant->save();
        }
       
    }
}
