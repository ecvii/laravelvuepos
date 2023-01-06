<?php
namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::query()->truncate();

        DB::table('roles')->insert([
            ['title' => 'Manager', 'permissions' => 'a:14:{i:0;s:19:"can_manage_products";i:1;s:17:"can_manage_brands";i:2;s:21:"can_manage_categories";i:3;s:17:"can_manage_groups";i:4;s:28:"can_manage_variant_attribute";i:5;s:16:"can_manage_sales";i:6;s:19:"can_manage_receives";i:7;s:26:"can_manage_customer_groups";i:8;s:20:"can_manage_customers";i:9;s:30:"can_close_others_cash_register";i:10;s:25:"can_see_inventory_reports";i:11;s:24:"can_see_register_reports";i:12;s:25:"can_see_receiving_reports";i:13;s:17:"can_add_suppliers";}', 'created_by' => '1'],
            ['title' => 'Asst. Manager', 'permissions' => 'a:9:{i:0;s:16:"can_manage_sales";i:1;s:17:"can_add_suppliers";i:2;s:17:"can_see_suppliers";i:3;s:19:"can_manage_receives";i:4;s:20:"can_manage_customers";i:5;s:17:"can_see_customers";i:6;s:26:"can_manage_customer_groups";i:7;s:23:"can_see_customer_groups";i:8;s:30:"can_close_others_cash_register";}', 'created_by' => '1'],
        ]);
    }
}
