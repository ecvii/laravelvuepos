<?php
namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::query()->truncate();

        DB::table('customers')->insert([
            'first_name' => 'Francis',
            'last_name' => 'Casper',
            'email' => 'client1@demo.com',
            'phone_number' => '52304935',
            'address' => '4568 Romano Street,Cambridge',
            'company' => 'Schiller-Lebsack',
            'customer_group' => 1,
        ]);

        DB::table('customers')->insert([
            'first_name' => 'Elvie',
            'last_name' => 'Hamill',
            'email' => 'elza38@koelpin.com',
            'address' => '281 Doctors Drive,Santa Monica',
            'company' => 'Windler PLC',
            'phone_number' => '31043918',
            'customer_group' => 1,

        ]);

        DB::table('customers')->insert([
            'first_name' => 'Candida',
            'last_name' => 'Arpin',
            'email' => 'damien90@reinger.com',
            'company' => 'Doyle-Conn',
            'phone_number' => '48665323',
            'address'=>'5 Woodside Court Sevierville',
            'customer_group' => 1,
        ]);
    }
}
