<?php
namespace Database\Seeders;

use App\Models\ShippingArea;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingAreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ShippingArea::query()->truncate();

        DB::table("shipping_areas")->insert([
            [
                'area' => 'Washington',
                'price' => '200',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'area' => 'New York',
                'price' => '55',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'area' => 'Florida',
                'price' => '250',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
        ]);
    }
}
