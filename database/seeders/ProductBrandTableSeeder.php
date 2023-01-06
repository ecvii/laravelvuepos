<?php
namespace Database\Seeders;


use App\Models\ProductBrand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductBrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductBrand::query()->truncate();

        DB::table('product_brands')->insert([
            [

                'name' => 'Levi Strauss & Co',
                'created_by' => 1,
            ],
            [
                'name' => 'DIESEL',
                'created_by' => 1,
            ],
            [
                'name' => 'Akris Punto',
                'created_by' => 2,
            ],
            [
                'name' => 'Valentino',
                'created_by' => 1,
            ],
            [
                'name' => 'LEVI’S',
                'created_by' => 1,
            ],
            [
                'name' => 'Calvin Klein',
                'created_by' => 1,
            ],
            [
                'name' => 'Gucci',
                'created_by' => 1,
            ],
            [
                'name' => ' Silk Scarves',
                'created_by' => 1,
            ],
            [
                'name' => 'Dunhill',
                'created_by' => 1,
            ],
        ]);
    }
}
