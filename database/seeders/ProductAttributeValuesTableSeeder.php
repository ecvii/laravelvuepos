<?php
namespace Database\Seeders;



use App\Models\ProductAttribute;
use App\Models\ProductAttributeValue;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductAttributeValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductAttributeValue::query()->truncate();

        DB::table('product_attribute_values')->insert([
            [
                'product_id' => 1,
                'attribute_id' => 1,
                'values' => ',Red,White',
            ],
            [
                'product_id' => 1,
                'attribute_id' => 2,
                'values' => ',M,L',
            ],
            [
                'product_id' => 2,
                'attribute_id' => 1,
                'values' => ',Grey',
            ],
            [
                'product_id' => 2,
                'attribute_id' => 2,
                'values' => ',L',
            ],
            [
                'product_id' => 3,
                'attribute_id' => 1,
                'values' => ',White,Black',
            ],
            [
                'product_id' => 3,
                'attribute_id' => 2,
                'values' => ',M,L',
            ],
            [
                'product_id' => 4,
                'attribute_id' => 1,
                'values' => ',Green',
            ],
            [
                'product_id' => 4,
                'attribute_id' => 2,
                'values' => ',L',
            ],
            [
                'product_id' => 5,
                'attribute_id' => 1,
                'values' => ',Black',
            ],
            [
                'product_id' => 5,
                'attribute_id' => 2,
                'values' => ',S,M,L,XL',
            ],
            [
                'product_id' => 6,
                'attribute_id' => 1,
                'values' => ',Black',
            ],
            [
                'product_id' => 6,
                'attribute_id' => 2,
                'values' => ',M',
            ],
            [
                'product_id' => 7,
                'attribute_id' => 1,
                'values' => ',Grey',
            ],
            [
                'product_id' => 7,
                'attribute_id' => 2,
                'values' => ',M',
            ],
            [
                'product_id' => 8,
                'attribute_id' => 1,
                'values' => ',Green',
            ],
            [
                'product_id' => 8,
                'attribute_id' => 2,
                'values' => ',M',
            ],
            [
                'product_id' => 9,
                'attribute_id' => 1,
                'values' => ',Red',
            ],
            [
                'product_id' => 9,
                'attribute_id' => 2,
                'values' => ',M',
            ],
            [
                'product_id' => 10,
                'attribute_id' => 1,
                'values' => ',Black',
            ],
            [
                'product_id' => 10,
                'attribute_id' => 2,
                'values' => ',M',
            ],
            [
                'product_id' => 11,
                'attribute_id' => 1,
                'values' => ',Red',
            ],
            [
                'product_id' => 11,
                'attribute_id' => 2,
                'values' => ',S',
            ],
            [
                'product_id' => 12,
                'attribute_id' => 1,
                'values' => ',Grey',
            ],
            [
                'product_id' => 12,
                'attribute_id' => 2,
                'values' => ',M',
            ],
            [
                'product_id' => 13,
                'attribute_id' => 1,
                'values' => ',Green',
            ],
            [
                'product_id' => 13,
                'attribute_id' => 2,
                'values' => ',M,',
            ],
            [
                'product_id' => 14,
                'attribute_id' => 1,
                'values' => ',Red',
            ],
            [
                'product_id' => 14,
                'attribute_id' => 2,
                'values' => ',L',
            ],
            [
                'product_id' => 15,
                'attribute_id' => 1,
                'values' => ',Green',
            ],
            [
                'product_id' => 15,
                'attribute_id' => 2,
                'values' => ',XL',
            ],

            [
                'product_id' => 16,
                'attribute_id' => 1,
                'values' => ',Purple',
            ],
            [
                'product_id' => 16,
                'attribute_id' => 2,
                'values' => ',M',
            ],
            [
                'product_id' => 17,
                'attribute_id' => 1,
                'values' => ',Purple',
            ],
            [
                'product_id' => 17,
                'attribute_id' => 2,
                'values' => ',M',
            ],
            [
                'product_id' => 18,
                'attribute_id' => 1,
                'values' => ',Purple',
            ],
            [
                'product_id' => 18,
                'attribute_id' => 2,
                'values' => ',M',
            ],
            [
                'product_id' => 19,
                'attribute_id' => 1,
                'values' => ',Purple',
            ],
            [
                'product_id' => 19,
                'attribute_id' => 2,
                'values' => ',M',
            ],
            [
                'product_id' => 20,
                'attribute_id' => 1,
                'values' => ',Purple',
            ],
            [
                'product_id' => 20,
                'attribute_id' => 2,
                'values' => ',M',
            ],

    ]);
    }
}
