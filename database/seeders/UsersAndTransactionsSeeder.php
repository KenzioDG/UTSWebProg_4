<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class UsersAndTransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create the users
        DB::table('users')->insert([
            [
                'name' => 'Mr. Vico Lomar',
                'loyalty' => 'Gold',
            ],
            [
                'name' => 'Ms. Fei Fei Li',
                'loyalty' => 'Green',
            ],
        ]);

        // Create the transactions for Mr. Vico Lomar
        $user = DB::table('users')->where('name', 'Mr. Vico Lomar')->first();
        DB::table('transactions')->insert([
            [
                'user_id' => $user->id,
                'coffee' => 'Cappuccino',
                'date' => Carbon::parse('19 March 2023'),
            ],
            [
                'user_id' => $user->id,
                'coffee' => 'Latte',
                'date' => Carbon::parse('20 March 2023'),
            ],
            [
                'user_id' => $user->id,
                'coffee' => 'Espresso',
                'date' => Carbon::parse('21 March 2023'),
            ],
        ]);

        // Create the transactions for Ms. Fei Fei Li
        $user = DB::table('users')->where('name', 'Ms. Fei Fei Li')->first();
        DB::table('transactions')->insert([
            [
                'user_id' => $user->id,
                'coffee' => 'Mocha',
                'date' => Carbon::parse('18 March 2023'),
            ],
            [
                'user_id' => $user->id,
                'coffee' => 'Latte',
                'date' => Carbon::parse('19 March 2023'),
            ],
            [
                'user_id' => $user->id,
                'coffee' => 'Espresso',
                'date' => Carbon::parse('21 March 2023'),
            ],
        ]);
    }
}
