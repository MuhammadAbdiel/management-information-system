<?php

namespace Database\Seeders;

use App\Models\Fund;
use Illuminate\Database\Seeder;

class FundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fund = [
            [
                'amount' => 100000000,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        Fund::insert($fund);
    }
}
