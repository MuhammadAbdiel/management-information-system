<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = [
            [
                'name' => 'Pakan Burung Ulat',
                'item_type_id' => 2,
                'item_unit_id' => 1,
                'quantity' => 100,
                'price' => 100000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pakan Burung Jangkrik',
                'item_type_id' => 1,
                'item_unit_id' => 1,
                'quantity' => 200,
                'price' => 200000,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        Item::insert($item);
    }
}
