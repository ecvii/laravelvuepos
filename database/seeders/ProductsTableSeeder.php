<?php
namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        Product::query()->truncate();

        DB::table('products')->insert([
            //product id 1
            [
                'title' => 'Cotton Short Sleeve T-shirt',
                'category_id' => 1,
                'brand_id' => 1,
                'group_id' => 2,
                'unit_id' => 3,
                'taxable' => 0,
                'tax_type' => 'custom',
                'product_type' => 'variant',
                'imageURL' => 't-shirt_man.png',
                'created_by' => 1,
            ],
            //product id 2
            [
                'title' => 'Cotton Long Sleeve T-shirt',
                'category_id' => 1,
                'brand_id' => 1,
                'group_id' => 2,
                'unit_id' => 3,
                'taxable' => 0,
                'tax_type' => 'custom',
                'product_type' => 'standard',
                'imageURL' => 'black_full_sleeves.png',
                'created_by' => 1,
            ],
            //product id 3
            [
                'title' => 'Narrow Three Quarter Pant',
                'category_id' => 2,
                'brand_id' => 5,
                'group_id' => 3,
                'unit_id' => 3,
                'taxable' => 0,
                'tax_type' => 'custom',
                'product_type' => 'variant',
                'imageURL' => 'narrow_three_quarter_pant.jpg',
                'created_by' => 2,
            ],

            //product id 4
            [
                'title' => 'Cotton Long Sleeve T-shirt',
                'category_id' => 1,
                'brand_id' => 6,
                'group_id' => 1,
                'unit_id' => 3,
                'taxable' => 0,
                'tax_type' => 'custom',
                'product_type' => 'standard',
                'imageURL' => 'cotton_full_sleves_ash.png',
                'created_by' => 1,
            ],
            //product id 5
            [
                'title' => 'Cotton Black T-shirt',
                'category_id' => 1,
                'brand_id' => 1,
                'group_id' => 2,
                'unit_id' => 3,
                'taxable' => 0,
                'tax_type' => 'custom',
                'product_type' => 'variant',
                'imageURL' => 'black_t-shirt.png',
                'created_by' => 2,
            ],
            //product id 6
            [
                'title' => 'Leather Belt',
                'category_id' => 1,
                'brand_id' => 3,
                'group_id' => 8,
                'unit_id' => 3,
                'taxable' => 0,
                'tax_type' => 'custom',
                'product_type' => 'standard',
                'imageURL' => 'belt.jpg',
                'created_by' => 1,
            ],
            //product id 7
            [
                'title' => 'Jeans Full Pant',
                'category_id' => 2,
                'brand_id' => 2,
                'group_id' => 4,
                'unit_id' => 3,
                'taxable' => 0,
                'tax_type' => 'custom',
                'product_type' => 'standard',
                'imageURL' => 'full_jeans_pant.png',
                'created_by' => 1,
            ],
            //product id 8
            [
                'title' => 'Yellow T-shirt',
                'category_id' => 1,
                'brand_id' => 1,
                'group_id' => 2,
                'unit_id' => 3,
                'taxable' => 0,
                'tax_type' => 'custom',
                'product_type' => 'standard',
                'imageURL' => 'yellow_t-shirt_man.png',
                'created_by' => 2,
            ],
            //product id 9
            [
                'title' => 'Male Red T-shirt',
                'category_id' => 1,
                'brand_id' => 1,
                'group_id' => 2,
                'unit_id' => 3,
                'taxable' => 0,
                'tax_type' => 'custom',
                'product_type' => 'standard',
                'imageURL' => 'red_shirt_man.png',
                'created_by' => 2,
            ],
            //product id 10
            [
                'title' => 'Sporty Track Pants',
                'category_id' => 2,
                'brand_id' => 5,
                'group_id' => 3,
                'unit_id' => 3,
                'taxable' => 0,
                'tax_type' => 'custom',
                'product_type' => 'standard',
                'imageURL' => 'sporty_tracks.jpg',
                'created_by' => 1,
            ],
            //product id 11
            [
                'title' => 'Red Tops',
                'category_id' => 2,
                'brand_id' => 1,
                'group_id' => 5,
                'unit_id' => 3,
                'taxable' => 0,
                'tax_type' => 'custom',
                'product_type' => 'standard',
                'imageURL' => 'red_t-shirt_woman.png',
                'created_by' => 1,
            ],
            //product id 12
            [
                'title' => 'Cotton Full Pant',
                'category_id' => 2,
                'brand_id' => 5,
                'group_id' => 3,
                'unit_id' => 3,
                'taxable' => 0,
                'tax_type' => 'custom',
                'product_type' => 'standard',
                'imageURL' => 'cotton_full_pant_woman.jpg',
                'created_by' => 1,
            ],
            //product id 13
            [
                'title' => 'Jeans Short Pant',
                'category_id' => 2,
                'brand_id' => 1,
                'group_id' => 2,
                'unit_id' => 3,
                'taxable' => 0,
                'tax_type' => 'custom',
                'product_type' => 'standard',
                'imageURL' => 'short_pant.jpg',
                'created_by' => 2,
            ],
            //product id 14
            [
                'title' => 'Leather Wallet',
                'category_id' => 1,
                'brand_id' => 7,
                'group_id' => 6,
                'unit_id' => 3,
                'taxable' => 0,
                'tax_type' => 'custom',
                'product_type' => 'standard',
                'imageURL' => 'no_image.png',
                'created_by' => 1,
            ],
            //product id 15
            [
                'title' => 'Female Scarf',
                'category_id' => 2,
                'brand_id' => 8,
                'group_id' => 9,
                'unit_id' => 3,
                'taxable' => 0,
                'tax_type' => 'custom',
                'product_type' => 'standard',
                'imageURL' => 'no_image.png',
                'created_by' => 2,
            ],
            //product id 16
            [
                'title' => 'Tie',
                'category_id' => 1,
                'brand_id' => 9,
                'group_id' => 10,
                'unit_id' => 3,
                'taxable' => 0,
                'tax_type' => 'custom',
                'product_type' => 'standard',
                'imageURL' => 'black_tie.png',
                'created_by' => 2,
            ],
            //product id 17
            [
                'title' => 'Ladies Belt',
                'category_id' => 2,
                'brand_id' => 3,
                'group_id' => 8,
                'unit_id' => 3,
                'taxable' => 0,
                'tax_type' => 'custom',
                'product_type' => 'standard',
                'imageURL' => 'no_image.png',
                'created_by' => 1,
            ],
            //product id 18
            [
                'title' => 'Ladies Yellow T-shirt',
                'category_id' => 2,
                'brand_id' => 1,
                'group_id' => 2,
                'unit_id' => 3,
                'taxable' => 0,
                'tax_type' => 'custom',
                'product_type' => 'standard',
                'imageURL' => 'no_image.png',
                'created_by' => 2,
            ],
            //product id 19
            [
                'title' => 'Cotton Long Sleeve T-shirt For Ladies',
                'category_id' => 2,
                'brand_id' => 6,
                'group_id' => 1,
                'unit_id' => 3,
                'taxable' => 0,
                'tax_type' => 'custom',
                'product_type' => 'standard',
                'imageURL' => 'no_image.png',
                'created_by' => 1,
            ],
            //product id 20
            [
                'title' => 'Cap',
                'category_id' => 1,
                'brand_id' => 9,
                'group_id' => 11,
                'unit_id' => 3,
                'taxable' => 0,
                'tax_type' => 'custom',
                'product_type' => 'standard',
                'imageURL' => 'no_image.png',
                'created_by' => 2,
            ],
        ]);
    }
}
