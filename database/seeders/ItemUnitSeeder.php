<?php

namespace Database\Seeders;

use App\Models\ItemUnit;
use Illuminate\Database\Seeder;

class ItemUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $itemUnit = [
            [
                'name' => 'Unit',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        ItemUnit::insert($itemUnit);
    }
}
