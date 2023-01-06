<?php
namespace Database\Seeders;

use App\Models\ProductVariant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductVariantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductVariant::query()->truncate();

        DB::table('product_variants')->insert([
            [
                'sku' => null,
                'product_id' => 1,
                'variant_title' => 'Red,M',
                'attribute_values' => 'Red,M',
                'purchase_price' => 230,
                'selling_price' => 250,
                'enabled' => 1,
                'imageURL'=> 't-shirt_man.png',
                'bar_code'=> null
            ],
            [
                'sku' => null,
                'product_id' => 1,
                'variant_title' => 'Red,L',
                'attribute_values' => 'Red,L',
                'purchase_price' => 210,
                'selling_price' => 230,
                'enabled' => 1,
                'imageURL'=> 'red_shirt_man.png',
                'bar_code'=> null
            ],
            [
                'sku' => null,
                'product_id' => 1,
                'variant_title' => 'White,M',
                'attribute_values' => 'White,M',
                'purchase_price' => 330,
                'selling_price' => 350,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> null
            ],
            [
                'sku' => null,
                'product_id' => 1,
                'variant_title' => 'White,L',
                'attribute_values' => 'White,L',
                'purchase_price' => 330,
                'selling_price' => 350,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> null
            ],
            [
                'sku' => null,
                'product_id' => 2,
                'variant_title' => 'default_variant',
                'attribute_values' => 'default_variant',
                'purchase_price' => 510,
                'selling_price' => 520,
                'enabled' => 1,
                'imageURL'=> null,
                'bar_code'=> null,

            ],
            [
                'sku' => null,
                'product_id' => 3,
                'variant_title' => 'White,M',
                'attribute_values' => 'White,M',
                'purchase_price' => 575,
                'selling_price' => 600,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> null
            ],
            [
                'sku' => null,
                'product_id' => 3,
                'variant_title' => 'White,L',
                'attribute_values' => 'White,L',
                'purchase_price' => 575,
                'selling_price' => 600,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> null
            ],
            [
                'sku' => null,
                'product_id' => 3,
                'variant_title' => 'Black,M',
                'attribute_values' => 'Black,M',
                'purchase_price' => 575,
                'selling_price' => 600,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> null
            ],
            [
                'sku' => null,
                'product_id' => 3,
                'variant_title' => 'Black,L',
                'attribute_values' => 'Black,L',
                'purchase_price' => 575,
                'selling_price' => 600,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> null
            ],
            [
                'sku' => null,
                'product_id' => 4,
                'variant_title' => 'default_variant',
                'attribute_values' => 'default_variant',
                'purchase_price' => 535,
                'selling_price' => 555,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> null
            ],
            [
                'sku' => null,
                'product_id' => 5,
                'variant_title' => 'Black,S',
                'attribute_values' => 'Black,S',
                'purchase_price' => 510,
                'selling_price' => 550,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> null
            ],
            [
                'sku' => null,
                'product_id' => 5,
                'variant_title' => 'Black,M',
                'attribute_values' => 'Black,M',
                'purchase_price' => 515,
                'selling_price' => 550,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> null
            ],
            [
                'sku' => null,
                'product_id' => 5,
                'variant_title' => 'Black,L',
                'attribute_values' => 'Black,L',
                'purchase_price' => 515,
                'selling_price' => 540,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> null
            ],
            [
                'sku' => null,
                'product_id' => 5,
                'variant_title' => 'Black,XL',
                'attribute_values' => 'Black,XL',
                'purchase_price' => 515,
                'selling_price' => 550,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> null
            ],
            [
                'sku' => 951478963,
                'product_id' => 6,
                'variant_title' => 'default_variant',
                'attribute_values' => 'default_variant',
                'purchase_price' => 4500,
                'selling_price' => 5000,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> 963258741
            ],
            [
                'sku' => null,
                'product_id' => 7,
                'variant_title' => 'default_variant',
                'attribute_values' => 'default_variant',
                'purchase_price' => 515,
                'selling_price' => 550,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> null
            ],
            [
                'sku' => null,
                'product_id' => 8,
                'variant_title' => 'default_variant',
                'attribute_values' => 'default_variant',
                'purchase_price' => 515,
                'selling_price' => 550,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> null
            ],

            [
                'sku' => null,
                'product_id' => 9,
                'variant_title' => 'default_variant',
                'attribute_values' => 'default_variant',
                'purchase_price' => 515,
                'selling_price' => 550,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> null
            ],
            [
                'sku' => null,
                'product_id' => 10,
                'variant_title' => 'default_variant',
                'attribute_values' => 'default_variant',
                'purchase_price' => 515,
                'selling_price' => 550,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> null
            ],
            [
                'sku' => null,
                'product_id' => 11,
                'variant_title' => 'default_variant',
                'attribute_values' => 'default_variant',
                'purchase_price' => 515,
                'selling_price' => 550,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> null
            ],
            [
                'sku' => null,
                'product_id' => 12,
                'variant_title' => 'default_variant',
                'attribute_values' => 'default_variant',
                'purchase_price' => 515,
                'selling_price' => 550,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> null
            ],
            [
                'sku' => null,
                'product_id' => 13,
                'variant_title' => 'default_variant',
                'attribute_values' => 'default_variant',
                'purchase_price' => 530,
                'selling_price' => 570,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> null
            ],
            [
                'sku' => null,
                'product_id' => 14,
                'variant_title' => 'default_variant',
                'attribute_values' => 'default_variant',
                'purchase_price' => 575,
                'selling_price' => 600,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> null
            ],
            [
                'sku' => null,
                'product_id' => 15,
                'variant_title' => 'default_variant',
                'attribute_values' => 'default_variant',
                'purchase_price' => 900,
                'selling_price' => 1000,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> null
            ],
            [
                'sku' => 12341234,
                'product_id' => 16,
                'variant_title' => 'default_variant',
                'attribute_values' => 'default_variant',
                'purchase_price' => 1800,
                'selling_price' => 2000,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> 369369258
            ],
            [
                'sku' => null,
                'product_id' => 17,
                'variant_title' => 'default_variant',
                'attribute_values' => 'default_variant',
                'purchase_price' => 55,
                'selling_price' => 60,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> null
            ],
            [
                'sku' => null,
                'product_id' => 18,
                'variant_title' => 'default_variant',
                'attribute_values' => 'default_variant',
                'purchase_price' => 55,
                'selling_price' => 60,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> null
            ],
            [
                'sku' => null,
                'product_id' => 19,
                'variant_title' => 'default_variant',
                'attribute_values' => 'default_variant',
                'purchase_price' => 55,
                'selling_price' => 60,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> null
            ],
            [
                'sku' => null,
                'product_id' => 20,
                'variant_title' => 'default_variant',
                'attribute_values' => 'default_variant',
                'purchase_price' => 2700,
                'selling_price' => 3000,
                'enabled' => 1,
                'imageURL'=> 'no_image.png',
                'bar_code'=> null
            ],
        ]);
    }
}
