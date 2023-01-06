<?php
namespace Database\Seeders;

use App\Models\RestaurantTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RestaurantTable::query()->truncate();

        DB::table('restaurant_tables')->insert([
            [
                'name' => 'Table 1',
                'branch_id' => 3,
                'status' => 'available',
                'created_by' => 1,
                'created_at' => now()
            ],
            [
                'name' => 'Table 2',
                'branch_id' => 3,
                'status' => 'available',
                'created_by' => 1,
                'created_at' => now()
            ],
            [
                'name' => 'Table 3',
                'branch_id' => 3,
                'status' => 'available',
                'created_by' => 1,
                'created_at' => now()
            ],
            [
                'name' => 'Table 4',
                'branch_id' => 4,
                'status' => 'available',
                'created_by' => 1,
                'created_at' => now()
            ],
            [
                'name' => 'Table 5',
                'branch_id' => 4,
                'status' => 'available',
                'created_by' => 1,
                'created_at' => now()
            ],
            [
                'name' => 'Table 6',
                'branch_id' => 4,
                'status' => 'available',
                'created_by' => 1,
                'created_at' => now()
            ],
            [
                'name' => 'Table 7',
                'branch_id' => 4,
                'status' => 'available',
                'created_by' => 1,
                'created_at' => now()
            ],
            [
                'name' => 'Table 8',
                'branch_id' => 4,
                'status' => 'available',
                'created_by' => 1,
                'created_at' => now()
            ],
            [
                'name' => 'Table 9',
                'branch_id' => 4,
                'status' => 'available',
                'created_by' => 1,
                'created_at' => now()
            ],
            [
                'name' => 'Table 10',
                'branch_id' => 4,
                'status' => 'available',
                'created_by' => 1,
                'created_at' => now()
            ],
        ]);
    }
}
