<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IssuesTableSeeder extends Seeder
{
    public function run(){
        $faker = Faker\Factory::create();

        for($i=0;$i<100;$i++) {
            DB::table('issues')->insert([
                'title' => $faker->realText($maxNbChars = 30),
                'description' => $faker->realText($maxNbChars = 200),
                'type' => $faker->randomElement(['bug', 'improvement', 'new feature']),
                'status' => $faker->randomElement(['to-do', 'in-progress', 'done', 'review']),
                'priority' => $faker->randomElement(['low', 'medium', 'high']),
                'user_id' => $faker->numberBetween($min = 1, $max = 50), //Make a real Select to get ids
                'project_id' => $faker->numberBetween($min = 1, $max = 50), //Make a real Select to get ids
                'assigned_to_id' => $faker->numberBetween($min = 1, $max = 50), //Make a real Select to get ids
            ]);
        }
    }
}
