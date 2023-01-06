<?php
namespace Database\Seeders;

use App\Models\Tax;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tax::query()->truncate();

        DB::table('taxes')->insert([
            ['name' => 'Zero Tax', 'percentage' => 0, 'is_default' => 1],
            ['name' => '5% Tax', 'percentage' => 5, 'is_default' => 0],
            ['name' => '15% Tax', 'percentage' => 15, 'is_default' => 0],
        ]);
    }
}
