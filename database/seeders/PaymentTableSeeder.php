<?php
namespace Database\Seeders;


use App\Models\Payments;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payments::query()->truncate();

        DB::table('payments')->insert([
            ['date' => now(), 'paid' => 1870.00, 'exchange' => 0.00, 'payment_method' =>1, 'order_id' =>1, 'cash_register_id' =>1,'created_at'=> now()],
            ['date' => now(), 'paid' => 3820.00, 'exchange' => 0.00, 'payment_method' =>1, 'order_id' =>2, 'cash_register_id' =>1,'created_at'=> now()],
            ['date' => now(), 'paid' => 1100.00, 'exchange' => 0.00, 'payment_method' =>1, 'order_id' =>3, 'cash_register_id' =>1,'created_at'=> now()],
            ['date' => now(), 'paid' => 550.00, 'exchange' => 0.00, 'payment_method' =>1, 'order_id' =>4, 'cash_register_id' =>1,'created_at'=> now()],
            ['date' => now(), 'paid' => 800.00, 'exchange' => 0.00, 'payment_method' =>1, 'order_id' =>5, 'cash_register_id' =>1,'created_at'=> now()],
            ['date' => now(), 'paid' => 900.00, 'exchange' => 0.00, 'payment_method' =>1, 'order_id' =>6, 'cash_register_id' =>1,'created_at'=> now()],
            ['date' => now(), 'paid' => -550.00, 'exchange' => 0.00, 'payment_method' =>1, 'order_id' =>7, 'cash_register_id' =>1,'created_at'=> now()],
            ['date' => now(), 'paid' => 1100.00, 'exchange' => 0.00, 'payment_method' =>1, 'order_id' =>8, 'cash_register_id' =>1,'created_at'=> now()],
            ['date' => now(), 'paid' => 1100.00, 'exchange' => 0.00, 'payment_method' =>1, 'order_id' =>9, 'cash_register_id' =>1,'created_at'=> now()],
            ['date' => now(), 'paid' => 555.00, 'exchange' => 0.00, 'payment_method' =>1, 'order_id' =>10, 'cash_register_id' =>1,'created_at'=> now()],
            ['date' => now(), 'paid' => 555.00, 'exchange' => 0.00, 'payment_method' =>1, 'order_id' =>11, 'cash_register_id' =>1,'created_at'=> now()],
            ['date' => now(), 'paid' => 1336.00, 'exchange' => 0.00, 'payment_method' =>1, 'order_id' =>12, 'cash_register_id' =>1,'created_at'=> now()],
            ['date' => now(), 'paid' => 1336.00, 'exchange' => 0.00, 'payment_method' =>1, 'order_id' =>13, 'cash_register_id' =>1,'created_at'=> now()],

            ['date' => now(), 'paid' => 535.00, 'exchange' => 0.00, 'payment_method' =>1, 'order_id' =>14, 'cash_register_id' =>1,'created_at'=> now()],
            ['date' => now(), 'paid' => 1050.00, 'exchange' => 0.00, 'payment_method' =>1, 'order_id' =>15, 'cash_register_id' =>1,'created_at'=> now()],
            ['date' => now(), 'paid' => 1045.00, 'exchange' => 0.00, 'payment_method' =>1, 'order_id' =>16, 'cash_register_id' =>1,'created_at'=> now()],
            ['date' => now(), 'paid' => 1320.00, 'exchange' => 0.00, 'payment_method' =>1, 'order_id' =>17, 'cash_register_id' =>1,'created_at'=> now()],
            ['date' => now(), 'paid' => 616.5, 'exchange' => 0.00, 'payment_method' =>1, 'order_id' =>18, 'cash_register_id' =>1,'created_at'=> now()],
            ['date' => now(), 'paid' => 535.00, 'exchange' => 0.00, 'payment_method' =>1, 'order_id' =>19, 'cash_register_id' =>1,'created_at'=> now()],
            ['date' => now(), 'paid' => 1050.00, 'exchange' => 0.00, 'payment_method' =>1, 'order_id' =>20, 'cash_register_id' =>1,'created_at'=> now()],
            ['date' => now(), 'paid' => 1045.00, 'exchange' => 0.00, 'payment_method' =>1, 'order_id' =>21, 'cash_register_id' =>1,'created_at'=> now()],
            ['date' => now(), 'paid' => 1320.00, 'exchange' => 0.00, 'payment_method' =>1, 'order_id' =>22, 'cash_register_id' =>1,'created_at'=> now()],
            ['date' => now(), 'paid' => 616.5, 'exchange' => 0.00, 'payment_method' =>1, 'order_id' =>23, 'cash_register_id' =>1,'created_at'=> now()],
        ]);
    }
}
