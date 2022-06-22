<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Account;
use App\Models\Transaction;
use App\Models\Wallet;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Seeder;


class TransactionSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();
        $first_user = User::find(1);
        $second_user = User::find(2);
        $first_account_holder = Wallet::find(1);
        $second_account_holder = Wallet::find(2);
        $counter = 0;
        while ($counter <= 10)
        {
            Transaction::create([
                'wallet_id' => $faker->randomElement([$first_account_holder->id,$second_account_holder->id]),
                'sender_id' => $faker->randomElement([$first_user->id, $second_user->id]),
                'receiver_id' => $faker->randomElement([$first_user->id, $second_user->id]),
                'description' => $faker->text,
                'charges' => $faker->numberBetween(10,1000),
                'amount' => $faker->randomFloat(3, 10000, 50000),
                'transaction_date' => Carbon::now()
            ]);
                $counter++;
        }
    }
}
