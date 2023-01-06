<?php
namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
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
            [
                'name' => 'Sub Branch',
                'branch_type' => 'retail',
                'taxable' => 0,
                'is_default' => 0,
                'tax_id' => 0,
                'is_cash_register' => 1,
                'created_by' => 1,
                'created_at' => now()
            ],
            [
                'name' => 'Main Branch Restaurant',
                'branch_type' => 'restaurant',
                'taxable' => 0,
                'is_default' => 0,
                'tax_id' => 0,
                'is_cash_register' => 1,
                'created_by' => 1,
                'created_at' => now()
            ],
            [
                'name' => 'Sub Branch Restaurant',
                'branch_type' => 'restaurant',
                'taxable' => 0,
                'is_default' => 0,
                'tax_id' => 0,
                'is_cash_register' => 1,
                'created_by' => 1,
                'created_at' => now()
            ],
        ]);
    }
}
