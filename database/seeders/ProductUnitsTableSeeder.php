<?php
namespace Database\Seeders;

use App\Models\ProductUnit;
use App\Models\ProductVariant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductUnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductUnit::query()->truncate();

        DB::table('product_units')->insert([
            ['name' => 'Litre', 'short_name' => 'lt', 'created_by' => '1'],
            ['name' => 'Kilogram', 'short_name' => 'kg', 'created_by' => '2'],
            ['name' => 'Pieces', 'short_name' => 'pc', 'created_by' => '3']
            // ['name' => 'Piece', 'short_name' => 'ps', 'created_by' => '3']
        ]);
    }
}
