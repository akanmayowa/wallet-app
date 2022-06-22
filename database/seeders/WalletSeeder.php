<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class WalletSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();
        $first_user = User::find(1);
        $second_user = User::find(2);
        $counter = 0;
        while ($counter <= 10)
        {
            Wallet::create([
            'user_id' => $faker->randomElement([$first_user->id, $second_user->id]),
            'name' => $faker->name,
            'minimum_balance' => $faker->numberBetween(50000,100000),
            'interest_rate' => $faker->numberBetween(1,10),
            ]);
            $counter++;
         }
    }
}
