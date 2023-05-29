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
                'name' => 'Jangkrik Alam',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Jangkrik Kalung',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ulat Kandang',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ulat Hongkong',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ulat Jerman',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        ItemType::insert($itemType);
    }
}
