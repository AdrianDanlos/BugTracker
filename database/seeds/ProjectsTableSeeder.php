<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    public function run(){
        $faker = Faker\Factory::create();
        $faker->addProvider(new CompanyNameGenerator\FakerProvider($faker));

        for($i=0;$i<20;$i++) {
            DB::table('projects')->insert([
                'name' => $faker->companyName,
                'description' => $faker->realText($maxNbChars = 200),
                'user_id' => $faker->numberBetween($min = 1, $max = 50), //Make a real Select to get ids
                'group_id' => $faker->numberBetween($min = 1, $max = 50), //Make a real Select to get ids
            ]);
        }
    }
}
