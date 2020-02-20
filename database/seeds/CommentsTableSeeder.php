<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    public function run(){
        $faker = Faker\Factory::create();

        for($i=0;$i<100;$i++) {
            DB::table('comments')->insert([
                'description' => $faker->realText($maxNbChars = 200),
                'creator_id' => $faker->numberBetween($min = 1, $max = 50), //Make a real Select to get ids
                'issue_id' => $faker->numberBetween($min = 1, $max = 200), //Make a real Select to get ids
            ]);
        }
    }
}
