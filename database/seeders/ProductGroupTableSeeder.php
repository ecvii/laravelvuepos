<?php
namespace Database\Seeders;

use App\Models\ProductGroup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductGroup::query()->truncate();

        DB::table('product_groups')->insert([
            [
                'name' => 'Shirt',
                'created_by' => 1,
            ],

            [
                'name' => 'T-Shirt',
                'created_by' => 1,
            ],
            [
                'name' => 'Pants',
                'created_by' => 2,
            ],
            [
                'name' => 'Jeans',
                'created_by' => 1,
            ],
            [
                'name' => 'Tops',
                'created_by' => 1,
            ],
            [
                'name' => 'Bags',
                'created_by' => 2,
            ],
            [
                'name' => 'Winter Wear',
                'created_by' => 2,
            ],
            [
                'name' => 'Belt',
                'created_by' => 2,
            ],
            [
                'name' => 'Scarf',
                'created_by' => 2,
            ],
            [
                'name' => 'Tie',
                'created_by' => 2,
            ],
            [
                'name' => 'Cap',
                'created_by' => 2,
            ],
        ]);

    }
}
