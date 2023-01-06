<?php
namespace Database\Seeders;

use App\Models\CashRegisterLog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CashRegisterLogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CashRegisterLog::query()->truncate();

        DB::table('cash_register_logs')->insert([
            ['user_id' => '1', 'cash_register_id' => '1' ,'opening_amount' => '26666' ,'closing_amount' =>'8140' ,'status'=>'closed','opening_time' => '2019-03-10 00:00:00' ,'closing_time' => '2019-04-17 05:51:00','opened_by' => '1','closed_by' => '1', 'note' => 'John doe' ],
            ['user_id' => '1', 'cash_register_id' => '1' ,'opening_amount' => '0' ,'closing_amount' =>'9040','status'=>'closed','opening_time' => '2019-04-18 05:51:00','closing_time' => '2019-06-17 05:58:00', 'opened_by' => '1', 'closed_by' => '2', 'note' => 'Closed 9040' ],
            ['user_id' => '2', 'cash_register_id' => '1' ,'opening_amount' => '0' ,'closing_amount' =>'3000','status'=>'closed','opening_time' => '2019-06-18 06:03:00' ,'closing_time' => '2019-07-17 08:05:00','opened_by' => '2','closed_by' => '1', 'note' => '3000' ],
        ]);
    }
}