<?php
namespace Database\Seeders;

use App\Models\ProductAttribute;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductVariantAttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductAttribute::query()->truncate();

        DB::table('product_attributes')->insert([
            [ 'name' => 'Color', 'created_by' => 1],
            [ 'name' => 'Size', 'created_by' => 1]
         ]);
    }
}
