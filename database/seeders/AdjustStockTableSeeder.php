<?php
namespace Database\Seeders;


use App\Http\Controllers\API\AdjustProductStockController;
use App\Models\AdjustProductStockType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdjustStockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdjustProductStockType::query()->truncate();

        DB::table('adjust_product_stock_types')->insert([
            [
                'title' => 'Damaged Product',
                'created_by' => 1,
                'created_at' => now()
            ],
        ]);
    }
}
