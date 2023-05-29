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
                'name' => 'Pakan Burung Ulat Kandang',
                'item_type_id' => 3,
                'item_unit_id' => 1,
                'quantity' => 10,
                'price' => 495000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pakan Burung Ulat Hongkong',
                'item_type_id' => 4,
                'item_unit_id' => 1,
                'quantity' => 10,
                'price' => 500000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pakan Burung Ulat Jerman',
                'item_type_id' => 5,
                'item_unit_id' => 1,
                'quantity' => 10,
                'price' => 489000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pakan Burung Jangkrik Alam',
                'item_type_id' => 1,
                'item_unit_id' => 1,
                'quantity' => 10,
                'price' => 475000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pakan Burung Jangkrik Kalung',
                'item_type_id' => 2,
                'item_unit_id' => 1,
                'quantity' => 10,
                'price' => 480,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        Item::insert($item);
    }
}
