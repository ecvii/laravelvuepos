<?php
namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::query()->truncate();

        DB::table('orders')->insert([
            ['date' => now(), 'order_type' => 'sales', 'sub_total'=>1870,    'total_tax'=>0,  'total'=>1870.00,  'type' => 'customer', 'profit' => 100.00, 'status' =>'done','all_discount' => 0 , 'customer_id' =>null, 'branch_id' =>1,'created_by' =>1,'invoice_id' =>'POS1000', 'created_at' =>now(), 'updated_at' =>now()],
            ['date' => now(), 'order_type' => 'sales', 'sub_total'=>3820,    'total_tax'=>0,  'total'=>3820.00,  'type' => 'customer', 'profit' => 220.00,  'status' =>'done','all_discount' => 0 , 'customer_id' =>null, 'branch_id' =>1,'created_by' =>1,'invoice_id' =>'POS1001', 'created_at' =>now(), 'updated_at' =>now() ],
            ['date' => now(), 'order_type' => 'sales', 'sub_total'=>1100,    'total_tax'=>0,  'total'=>1100.00,  'type' => 'customer', 'profit' => 70.00,  'status' =>'done','all_discount' => 0 ,  'customer_id' =>null,'branch_id' =>1,'created_by' =>1,'invoice_id' =>'POS1002', 'created_at' =>now(), 'updated_at' =>now()],
            ['date' => now(), 'order_type' => 'sales', 'sub_total'=>550,     'total_tax'=>0,  'total'=>550.00,  'type' => 'customer', 'profit' => 35.00,  'status' =>'done', 'all_discount' => 0 , 'customer_id' =>null,'branch_id' =>1,'created_by' =>1,'invoice_id' =>'POS1003', 'created_at' =>now(), 'updated_at' =>now()],
            ['date' => now(), 'order_type' => 'sales', 'sub_total'=>800,     'total_tax'=>0,  'total'=>800.00,  'type' => 'customer', 'profit' => 60.00,  'status' =>'done','all_discount' => 0 ,  'customer_id' =>null,'branch_id' =>1,'created_by' =>1,'invoice_id' =>'POS1004', 'created_at' =>now(), 'updated_at' =>now()],
            ['date' => now(), 'order_type' => 'sales', 'sub_total'=>900,     'total_tax'=>0,  'total'=>900.00,  'type' => 'customer', 'profit' => 55.00,  'status' =>'done', 'all_discount' => 0 , 'customer_id' =>null,'branch_id' =>1,'created_by' =>1,'invoice_id' =>'POS1005', 'created_at' =>now(), 'updated_at' =>now()],
            ['date' => now(), 'order_type' => 'sales', 'sub_total'=>550,    'total_tax'=>0,  'total'=>550.00,  'type' => 'customer', 'profit' => 0.00,  'status' =>'done', 'all_discount' => 0 , 'customer_id' =>null,'branch_id' =>1,'created_by' =>1,'invoice_id' =>'POS1006', 'created_at' =>now(), 'updated_at' =>now()],
            ['date' => now(), 'order_type' => 'sales', 'sub_total'=>1100,    'total_tax'=>0,  'total'=>1100.00,  'type' => 'customer', 'profit' => 70.00,  'status' =>'done','all_discount' => 0 ,  'customer_id' =>null,'branch_id' =>1,'created_by' =>2,'invoice_id' =>'POS1007', 'created_at' =>now(), 'updated_at' =>now()],
            ['date' => now(), 'order_type' => 'sales', 'sub_total'=>1100,    'total_tax'=>0,  'total'=>1100.00,  'type' => 'customer', 'profit' => 70.00,  'status' =>'done', 'all_discount' => 0 , 'customer_id' =>null,'branch_id' =>1,'created_by' =>2,'invoice_id' =>'POS1008', 'created_at' =>now(), 'updated_at' =>now()],
            ['date' => now(), 'order_type' => 'sales', 'sub_total'=>555,     'total_tax'=>0,  'total'=>555.00,  'type' => 'customer', 'profit' => 20.00,  'status' =>'done', 'all_discount' => 0 , 'customer_id' =>null,'branch_id' =>1,'created_by' =>2,'invoice_id' =>'POS1009', 'created_at' =>now(), 'updated_at' =>now()],
            ['date' => now(), 'order_type' => 'sales', 'sub_total'=>555,    'total_tax'=>0,  'total'=>555.00,  'type' => 'customer', 'profit' => 0.00,  'status' =>'done', 'all_discount' => 0 , 'customer_id' =>null,'branch_id' =>1,'created_by' =>2,'invoice_id' =>'POS1010', 'created_at' =>now(), 'updated_at' =>now()],
            ['date' => now(), 'order_type' => 'sales', 'sub_total'=>1336,   'total_tax'=>0,  'total'=>1336.00,  'type' => 'customer', 'profit' => 264.00,  'status' =>'done', 'all_discount' => 20 ,'customer_id' =>'1', 'branch_id' =>1,'created_by' =>2,'invoice_id' =>'POS1011', 'created_at' =>now(), 'updated_at' =>now()],
            
            ['date' => now(), 'order_type' => 'receiving', 'sub_total'=>740,   'total_tax'=>0,  'total'=>1336.00,  'type' => 'supplier', 'profit' => 0.00,  'status' =>'done', 'all_discount' => 0 , 'customer_id' =>null,'branch_id' =>1,'created_by' =>2,'invoice_id' =>'POS1012', 'created_at' =>now(), 'updated_at' =>now()],
            ['date' => now(), 'order_type' => 'receiving', 'sub_total'=>535,   'total_tax'=>0,  'total'=>535.00,  'type' => 'supplier', 'profit' => 0.00,  'status' =>'done', 'all_discount' => 0 , 'customer_id' =>null,'branch_id' =>1,'created_by' =>2,'invoice_id' =>'POS1013', 'created_at' =>now(), 'updated_at' =>now()],
            ['date' => now(), 'order_type' => 'receiving', 'sub_total'=>1050,   'total_tax'=>0,  'total'=>1050.00,  'type' => 'supplier', 'profit' => 0.00,  'status' =>'done', 'all_discount' => 0 , 'customer_id' =>null,'branch_id' =>1,'created_by' =>2,'invoice_id' =>'POS1014', 'created_at' =>now(), 'updated_at' =>now()],
            ['date' => now(), 'order_type' => 'receiving', 'sub_total'=>1045,   'total_tax'=>0,  'total'=>1045.00,  'type' => 'supplier', 'profit' => 0.00,  'status' =>'done', 'all_discount' => 0 , 'customer_id' =>null,'branch_id' =>1,'created_by' =>2,'invoice_id' =>'POS1015', 'created_at' =>now(), 'updated_at' =>now()],
            ['date' => now(), 'order_type' => 'receiving', 'sub_total'=>1045,   'total_tax'=>0,  'total'=>1320.00,  'type' => 'supplier', 'profit' => 0.00,  'status' =>'done', 'all_discount' => 0 , 'customer_id' =>null,'branch_id' =>1,'created_by' =>2,'invoice_id' =>'POS1016', 'created_at' =>now(), 'updated_at' =>now()],
            ['date' => now(), 'order_type' => 'receiving', 'sub_total'=>616.5,   'total_tax'=>0,  'total'=>616.5,  'type' => 'supplier', 'profit' => 0.00,  'status' =>'done', 'all_discount' => 10 , 'customer_id' =>null,'branch_id' =>1,'created_by' =>2,'invoice_id' =>'POS1017', 'created_at' =>now(), 'updated_at' =>now()],
            ['date' => now(), 'order_type' => 'receiving', 'sub_total'=>740,   'total_tax'=>0,  'total'=>1336.00,  'type' => 'supplier', 'profit' => 0.00,  'status' =>'done', 'all_discount' => 0 , 'customer_id' =>null,'branch_id' =>1,'created_by' =>2,'invoice_id' =>'POS1018', 'created_at' =>now(), 'updated_at' =>now()],
            ['date' => now(), 'order_type' => 'receiving', 'sub_total'=>535,   'total_tax'=>0,  'total'=>535.00,  'type' => 'supplier', 'profit' => 0.00,  'status' =>'done', 'all_discount' => 0 , 'customer_id' =>null,'branch_id' =>1,'created_by' =>2,'invoice_id' =>'POS1019', 'created_at' =>now(), 'updated_at' =>now()],
            ['date' => now(), 'order_type' => 'receiving', 'sub_total'=>1050,   'total_tax'=>0,  'total'=>1050.00,  'type' => 'supplier', 'profit' => 0.00,  'status' =>'done', 'all_discount' => 0 , 'customer_id' =>null,'branch_id' =>1,'created_by' =>2,'invoice_id' =>'POS1020', 'created_at' =>now(), 'updated_at' =>now()],
            ['date' => now(), 'order_type' => 'receiving', 'sub_total'=>1045,   'total_tax'=>0,  'total'=>1045.00,  'type' => 'supplier', 'profit' => 0.00,  'status' =>'done', 'all_discount' => 0 , 'customer_id' =>null,'branch_id' =>1,'created_by' =>2,'invoice_id' =>'POS1021', 'created_at' =>now(), 'updated_at' =>now()],
            ['date' => now(), 'order_type' => 'receiving', 'sub_total'=>1045,   'total_tax'=>0,  'total'=>1320.00,  'type' => 'supplier', 'profit' => 0.00,  'status' =>'done', 'all_discount' => 0 , 'customer_id' =>null,'branch_id' =>1,'created_by' =>2,'invoice_id' =>'POS1022', 'created_at' =>now(), 'updated_at' =>now()],

        ]);
    }
}
