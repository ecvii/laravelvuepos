<?php
namespace Database\Seeders;


use App\Models\OrderItems;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderItems::query()->truncate();

        DB::table('order_items')->insert([
            ['product_id' => '1', 'variant_id' => 1,'type'=>'sales', 'quantity' => -1, 'price' =>250.00, 'discount'=>0.00,   'sub_total'=>250.00, 'tax_id' =>'', 'order_id' =>1],
            ['product_id' => '2', 'variant_id' => 5,'type'=>'sales', 'quantity' => -1, 'price' =>520.00, 'discount'=>0.00,   'sub_total'=>520.00, 'tax_id' =>'', 'order_id' =>1],
            ['product_id' => '7', 'variant_id' => 16,'type'=>'sales', 'quantity' => -1, 'price' =>550.00, 'discount'=>0.00,   'sub_total'=>550.00, 'tax_id' =>'', 'order_id' =>1],
            ['product_id' => '11', 'variant_id' => 22,'type'=>'sales', 'quantity' => -1, 'price' =>550.00, 'discount'=>0.00,   'sub_total'=>550.00, 'tax_id' =>'', 'order_id' =>1],
            ['product_id' => '2', 'variant_id' => 5,'type'=>'sales', 'quantity' => -1, 'price' =>520.00, 'discount'=>0.00,   'sub_total'=>520.00, 'tax_id' =>'', 'order_id' =>2],
            ['product_id' => '6', 'variant_id' => 15,'type'=>'sales', 'quantity' => -1, 'price' =>550.00, 'discount'=>0.00,   'sub_total'=>550.00, 'tax_id' =>'', 'order_id' =>2],
            ['product_id' => '9', 'variant_id' => 19,'type'=>'sales', 'quantity' => -1, 'price' =>550.00, 'discount'=>0.00,   'sub_total'=>550.00, 'tax_id' =>'', 'order_id' =>2],
            ['product_id' => '7', 'variant_id' => 16,'type'=>'sales', 'quantity' => -1, 'price' =>550.00, 'discount'=>0.00,   'sub_total'=>550.00, 'tax_id' =>'', 'order_id' =>2],
            ['product_id' => '11', 'variant_id' => 22,'type'=>'sales', 'quantity' => -1, 'price' =>550.00, 'discount'=>0.00,   'sub_total'=>550.00, 'tax_id' =>'', 'order_id' =>2],
            ['product_id' => '10', 'variant_id' => 21,'type'=>'sales', 'quantity' => -1, 'price' =>550.00, 'discount'=>0.00,   'sub_total'=>550.00, 'tax_id' =>'', 'order_id' =>2],
            ['product_id' => '12', 'variant_id' => 23,'type'=>'sales', 'quantity' => -1, 'price' =>550.00, 'discount'=>0.00,   'sub_total'=>550.00, 'tax_id' =>'', 'order_id' =>2],
            ['product_id' => '8', 'variant_id' => 17,'type'=>'sales', 'quantity' => -1, 'price' =>550.00, 'discount'=>0.00,   'sub_total'=>550.00, 'tax_id' =>'', 'order_id' =>3],
            ['product_id' => '9', 'variant_id' => 19,'type'=>'sales', 'quantity' => -1, 'price' =>550.00, 'discount'=>0.00,   'sub_total'=>550.00, 'tax_id' =>'', 'order_id' =>3],
            ['product_id' => '5', 'variant_id' => 12,'type'=>'sales', 'quantity' => -1, 'price' =>550.00, 'discount'=>0.00,   'sub_total'=>550.00, 'tax_id' =>'', 'order_id' =>4],
            ['product_id' => '1', 'variant_id' => 1,'type'=>'sales', 'quantity' => -1, 'price' =>250.00, 'discount'=>0.00,   'sub_total'=>250.00, 'tax_id' =>'', 'order_id' =>5],
            ['product_id' => '5', 'variant_id' => 11,'type'=>'sales', 'quantity' => -1, 'price' =>550.00, 'discount'=>0.00,   'sub_total'=>550.00, 'tax_id' =>'', 'order_id' =>5],
            ['product_id' => '1', 'variant_id' => 4,'type'=>'sales', 'quantity' => -1, 'price' =>350.00, 'discount'=>0.00,   'sub_total'=>350.00, 'tax_id' =>'', 'order_id' =>6],
            ['product_id' => '6', 'variant_id' => 15,'type'=>'sales', 'quantity' => -1, 'price' =>550.00, 'discount'=>0.00,   'sub_total'=>550.00, 'tax_id' =>'', 'order_id' =>6],
            ['product_id' => '5', 'variant_id' => 12,'type'=>'sales', 'quantity' => -1, 'price' =>550.00, 'discount'=>0.00,   'sub_total'=>550.00, 'tax_id' =>'', 'order_id' =>7],
            ['product_id' => '8', 'variant_id' => 17,'type'=>'sales', 'quantity' => -1, 'price' =>550.00, 'discount'=>0.00,   'sub_total'=>550.00, 'tax_id' =>'', 'order_id' =>8],
            ['product_id' => '12', 'variant_id' => 23,'type'=>'sales', 'quantity' => -1, 'price' =>550.00, 'discount'=>0.00,   'sub_total'=>550.00, 'tax_id' =>'', 'order_id' =>8],
            ['product_id' => '6', 'variant_id' => 15,'type'=>'sales', 'quantity' => -1, 'price' =>550.00, 'discount'=>0.00,   'sub_total'=>550.00, 'tax_id' =>'', 'order_id' =>9],
            ['product_id' => '12', 'variant_id' => 23,'type'=>'sales', 'quantity' => -1, 'price' =>550.00, 'discount'=>0.00,   'sub_total'=>550.00, 'tax_id' =>'', 'order_id' =>9],
            ['product_id' => '4', 'variant_id' => 10,'type'=>'sales', 'quantity' => -1, 'price' =>555.00, 'discount'=>0.00,   'sub_total'=>555.00, 'tax_id' =>'', 'order_id' =>10],
            ['product_id' => '4', 'variant_id' => 10,'type'=>'sales', 'quantity' => -1, 'price' =>555.00, 'discount'=>0.00,   'sub_total'=>555.00, 'tax_id' =>'', 'order_id' =>11],
            ['product_id' => '6', 'variant_id' => 15,'type'=>'sales', 'quantity' => -1, 'price' =>550.00, 'discount'=>20.00,   'sub_total'=>440.00, 'tax_id' =>'', 'order_id' =>12],
            ['product_id' => '2', 'variant_id' => 5,'type'=>'sales', 'quantity' => -1, 'price' =>520.00, 'discount'=>20.00,   'sub_total'=>416.00, 'tax_id' =>'', 'order_id' =>12],
            ['product_id' => '3', 'variant_id' => 6,'type'=>'sales', 'quantity' => -1, 'price' =>600.00, 'discount'=>20.00,   'sub_total'=>480.00, 'tax_id' =>'', 'order_id' =>12],
            ['product_id' => '4', 'variant_id' => 10,'type'=>'receiving', 'quantity' => 1, 'price' =>555.00, 'discount'=>0.00,   'sub_total'=>555.00, 'tax_id' =>'', 'order_id' =>13],
            ['product_id' => '6', 'variant_id' => 15,'type'=>'receiving', 'quantity' => 1, 'price' =>550.00, 'discount'=>0.00,   'sub_total'=>440.00, 'tax_id' =>'', 'order_id' =>13],
            ['product_id' => '2', 'variant_id' => 5,'type'=>'receiving', 'quantity' => 1, 'price' =>520.00, 'discount'=>0.00,   'sub_total'=>416.00, 'tax_id' =>'', 'order_id' =>13],
            ['product_id' => '3', 'variant_id' => 6,'type'=>'receiving', 'quantity' => 1, 'price' =>600.00, 'discount'=>0.00,   'sub_total'=>480.00, 'tax_id' =>'', 'order_id' =>13],

            ['product_id' => '4', 'variant_id' => 10,'type'=>'receiving', 'quantity' => 50, 'price' =>535.00, 'discount'=>0.00,   'sub_total'=>535.00, 'tax_id' =>'', 'order_id' =>14],
            ['product_id' => '4', 'variant_id' => 10,'type'=>'receiving', 'quantity' => 50, 'price' =>535.00, 'discount'=>0.00,   'sub_total'=>535.00, 'tax_id' =>'', 'order_id' =>15],
            ['product_id' => '6', 'variant_id' => 15,'type'=>'receiving', 'quantity' => 50, 'price' =>515.00, 'discount'=>0.00,   'sub_total'=>515.00, 'tax_id' =>'', 'order_id' =>15],
            ['product_id' => '13', 'variant_id' => 22,'type'=>'receiving', 'quantity' => 50, 'price' =>530.00, 'discount'=>0.00,   'sub_total'=>530.00, 'tax_id' =>'', 'order_id' =>16],
            ['product_id' => '10', 'variant_id' => 19,'type'=>'receiving', 'quantity' => 50, 'price' =>515.00, 'discount'=>0.00,   'sub_total'=>515.00, 'tax_id' =>'', 'order_id' =>16],
            ['product_id' => '1', 'variant_id' => 1,'type'=>'receiving', 'quantity' => 50, 'price' =>230.00, 'discount'=>0.00,   'sub_total'=>230.00, 'tax_id' =>'', 'order_id' =>17],
            ['product_id' => '8', 'variant_id' => 17,'type'=>'receiving', 'quantity' => 50, 'price' =>515.00, 'discount'=>0.00,   'sub_total'=>515.00, 'tax_id' =>'', 'order_id' =>17],
            ['product_id' => '16', 'variant_id' => 25,'type'=>'receiving', 'quantity' => 50, 'price' =>575.00, 'discount'=>0.00,   'sub_total'=>575.00, 'tax_id' =>'', 'order_id' =>17],
            ['product_id' => '19', 'variant_id' => 28,'type'=>'receiving', 'quantity' => 50, 'price' =>55.00, 'discount'=>10.00,   'sub_total'=>49.50, 'tax_id' =>'', 'order_id' =>18],
            ['product_id' => '14', 'variant_id' => 23,'type'=>'receiving', 'quantity' => 50, 'price' =>575.00, 'discount'=>10.00,   'sub_total'=>517.50, 'tax_id' =>'', 'order_id' =>18],
            ['product_id' => '17', 'variant_id' => 26,'type'=>'receiving', 'quantity' => 50, 'price' =>55.00, 'discount'=>10.00,   'sub_total'=>49.50, 'tax_id' =>'', 'order_id' =>18],
            ['product_id' => '4', 'variant_id' => 10,'type'=>'receiving', 'quantity' => 50, 'price' =>535.00, 'discount'=>0.00,   'sub_total'=>535.00, 'tax_id' =>'', 'order_id' =>19],
            ['product_id' => '4', 'variant_id' => 10,'type'=>'receiving', 'quantity' => 50, 'price' =>535.00, 'discount'=>0.00,   'sub_total'=>535.00, 'tax_id' =>'', 'order_id' =>20],
            ['product_id' => '6', 'variant_id' => 15,'type'=>'receiving', 'quantity' => 50, 'price' =>515.00, 'discount'=>0.00,   'sub_total'=>515.00, 'tax_id' =>'', 'order_id' =>20],
            ['product_id' => '13', 'variant_id' => 22,'type'=>'receiving', 'quantity' => 50, 'price' =>530.00, 'discount'=>0.00,   'sub_total'=>530.00, 'tax_id' =>'', 'order_id' =>21],
            ['product_id' => '10', 'variant_id' => 19,'type'=>'receiving', 'quantity' => 50, 'price' =>515.00, 'discount'=>0.00,   'sub_total'=>515.00, 'tax_id' =>'', 'order_id' =>21],
            ['product_id' => '1', 'variant_id' => 1,'type'=>'receiving', 'quantity' => 50, 'price' =>230.00, 'discount'=>0.00,   'sub_total'=>230.00, 'tax_id' =>'', 'order_id' =>22],
            ['product_id' => '8', 'variant_id' => 17,'type'=>'receiving', 'quantity' => 50, 'price' =>515.00, 'discount'=>0.00,   'sub_total'=>515.00, 'tax_id' =>'', 'order_id' =>22],
            ['product_id' => '16', 'variant_id' => 25,'type'=>'receiving', 'quantity' => 50, 'price' =>575.00, 'discount'=>0.00,   'sub_total'=>575.00, 'tax_id' =>'', 'order_id' =>22],
            ['product_id' => '19', 'variant_id' => 28,'type'=>'receiving', 'quantity' => 50, 'price' =>55.00, 'discount'=>10.00,   'sub_total'=>49.50, 'tax_id' =>'', 'order_id' =>23],
            ['product_id' => '14', 'variant_id' => 23,'type'=>'receiving', 'quantity' => 50, 'price' =>575.00, 'discount'=>10.00,   'sub_total'=>517.50, 'tax_id' =>'', 'order_id' =>23],
            ['product_id' => '17', 'variant_id' => 26,'type'=>'receiving', 'quantity' => 50, 'price' =>55.00, 'discount'=>10.00,   'sub_total'=>49.50, 'tax_id' =>'', 'order_id' =>23],


        ]);
    }
}
