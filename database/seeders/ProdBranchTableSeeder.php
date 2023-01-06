<?php


namespace Database\Seeders;


use App\Models\Branch;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdBranchTableSeeder extends Seeder
{
    public function run()
    {
        Branch::query()->truncate();

        DB::table('branches')->insert([
            [
                'name' => 'Main Branch',
                'branch_type' => 'retail',
                'taxable' => 1,
                'is_default' => 1,
                'tax_id' => 1,
                'is_cash_register' => 1,
                'created_by' => 1,
                'created_at' => now()
            ],
        ]);
    }
}