<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB,Str,Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 50; $i++){
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'username' => $faker->userName,
                'password' => $faker->password,
                'phone' =>  $faker->phoneNumber,
                'is_admin' => $faker->boolean($chanceOfGettingTrue = 5),
                'webinar_id' => $faker->numberBetween($min = 1, $max = 3),
                'transaction_id' => $i,
                'created_at' => $faker->dateTime(),
            ]);
        }
    }
}
