<?php
namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supplier::query()->truncate();
        DB::table('suppliers')->insert([
            'first_name' => 'Adam',
            'last_name' => 'Ross',
            'email' => 'ally18@pfannerstill.com',
            'company' => 'Buckridge, Rosenbaum and Senger',
            'phone_number' => '77255956',
            'address'=>'4857 Rinehart Road , Tamarac',

        ]);
        DB::table('suppliers')->insert([
            'first_name' => 'Harry',
            'last_name' => 'Jones',
            'email' => 'jacklyn.kiehn@huel.info',
            'company' => 'Welch Inc',
            'phone_number' => '88136835',
            'address'=>'3582 Mayo Street,Lexington',

        ]);

        DB::table('suppliers')->insert([
            'first_name' => 'James',
            'last_name' => 'Delos',
            'email' => 'james.gibson@oconnell.com',
            'company' => 'Spencer LLC',
            'phone_number' => '35793577',
            'address'=>'1032 Lady Bug Drive,Garden City',

        ]);
    }
}
