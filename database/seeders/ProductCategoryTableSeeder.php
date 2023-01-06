<?php
namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::query()->truncate();

        DB::table('product_categories')->insert([
            [
                'name' => 'Men',
                'created_by' => 1,
            ],
            [
                'name' => 'Women',
                'created_by' => 1,
            ],
            [
                'name' => 'Kids',
                'created_by' => 2,
            ],
        ]);
    }
}
