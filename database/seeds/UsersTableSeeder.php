<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run(){
        $faker = Faker\Factory::create();
        $faker->addProvider(new Xvladqt\Faker\LoremFlickrProvider($faker));

        for($i=0;$i<100;$i++) {
            DB::table('users')->insert([
                'email' => $faker->email,
                'password' => $faker->password(),
                'name' => $faker->name,
                'photo_url' => $faker->imageUrl($width = 640, $height = 480, ['cats'])
            ]);
        }
    }
}
