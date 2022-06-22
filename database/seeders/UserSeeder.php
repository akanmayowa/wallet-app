<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $counter = 0;
        while ($counter <= 10)
        {
            User::create([
                'name' => $faker->userName,
                'email' => $faker->unique->email,
                'password' => Hash::make('123456'),
                'bvn_number' => $faker->numerify('##########'),
                'nim' => $faker->numerify('##########'),
                'address' => $faker->address,
                'sex' => $faker->randomElement(['male', 'female']),
                'phone_number' => $faker->numerify('##########'),
            ]);


           User::create([
                'name' => $faker->userName,
                'email' => $faker->unique->email,
                'password' => Hash::make('123456'),
                'bvn_number' => $faker->numerify('##########'),
                'nim' => $faker->numerify('##########'),
                'address' => $faker->address,
                'sex' => $faker->randomElement(['male', 'female']),
                'phone_number' => $faker->numerify('##########'),
            ]);

            User::create([
                'name' => $faker->userName,
                'email' => $faker->unique->email,
                'password' => Hash::make('123456'),
                'bvn_number' => $faker->numerify('##########'),
                'nim' => $faker->numerify('##########'),
                'address' => $faker->address,
                'sex' => $faker->randomElement(['male', 'female']),
                'phone_number' => $faker->numerify('##########'),
            ]);

            $counter ++;
        }
    }
}
