<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupsTableSeeder extends Seeder
{
    public function run(){
        $faker = Faker\Factory::create();
        $faker->addProvider(new CompanyNameGenerator\FakerProvider($faker));
        $faker->addProvider(new Xvladqt\Faker\LoremFlickrProvider($faker));

        for($i=0;$i<20;$i++) {
            DB::table('groups')->insert([
                'name' => $faker->companyName,
                'description' => $faker->realText($maxNbChars = 200),
                'user_id' => $faker->numberBetween($min = 1, $max = 50), //Make a real Select to get ids
                'logo_url' => $faker->imageUrl($width = 640, $height = 480, ['cats'])
            ]);
        }
    }
}
