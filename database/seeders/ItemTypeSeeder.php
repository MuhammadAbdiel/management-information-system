<?php

namespace Database\Seeders;

use App\Models\ItemType;
use Illuminate\Database\Seeder;

class ItemTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $itemType = [
            [
                'name' => 'Jangkrik',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ulat',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        ItemType::insert($itemType);
    }
}
