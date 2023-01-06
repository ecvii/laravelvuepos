<?php


namespace Database\Seeders;


use App\Models\CashRegister;
use App\Models\InvoiceTemplate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdCashRegisterTableSeeder extends Seeder
{
    public function run()
    {
        CashRegister::query()->truncate();

        $salesTemplate = InvoiceTemplate::query()->where('invoice_size', 'thermal')
            ->where('template_type', 'sales')->first();
        $purchaseTemplate = InvoiceTemplate::query()->where('invoice_size', 'thermal')
            ->where('template_type', 'receiving')->first();

        DB::table('cash_registers')->insert([
            [
                'title' => 'Main Cash Register',
                'branch_id' => 1,
                'sales_invoice_id' => $salesTemplate->id,
                'receiving_invoice_id' => $purchaseTemplate->id,
                'created_by' => 1,
                'created_at' =>now()
            ],
        ]);
    }
}