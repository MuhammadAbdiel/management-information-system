<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier = [
            [
                'code' => 'S0001',
                'name' => 'Supplier 1',
                'address' => 'Jl. Supplier 1',
                'phone_number' => '081234567890',
            ]
        ];

        Supplier::insert($supplier);
    }
}
