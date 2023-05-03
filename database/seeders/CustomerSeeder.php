<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = [
            [
                'code' => 'C0001',
                'name' => 'Customer 1',
                'address' => 'Jl. Customer 1',
                'phone_number' => '081234567890',
            ]
        ];

        Customer::insert($customer);
    }
}
