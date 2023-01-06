<?php
namespace Database\Seeders;

use App\Models\CustomerGroup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomerGroup::query()->truncate();

        DB::table('customer_groups')->insert([
            ['title' => 'Default', 'discount' => 0, 'is_default' => 1, 'created_by' => 1],
            ['title' => 'Elite', 'discount' => 10, 'is_default' => 0, 'created_by' => 2],
            ['title' => 'Titan', 'discount' => 15, 'is_default' => 0, 'created_by' => 1],
            ['title' => 'Special', 'discount' => 12, 'is_default' => 0, 'created_by' => 2],
            ['title' => 'General', 'discount' => 0, 'is_default' => 0, 'created_by' => 1],
        ]);
    }
}
