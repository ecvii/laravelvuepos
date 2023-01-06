<?php

namespace Database\Seeders;

use App\Models\InvoiceTemplate;
use Database\Seeders\traits\TemplateSeederTraits\LargePurchaseInvoiceTemplate;
use Database\Seeders\traits\TemplateSeederTraits\LargeSalesInvoiceTemplate;
use Database\Seeders\traits\TemplateSeederTraits\SmallPurchaseInvoiceTemplate;
use Database\Seeders\traits\TemplateSeederTraits\SmallSalesInvoiceTemplate;
use Database\Seeders\traits\TemplateSeederTraits\ThermalPurchaseInvoiceTemplate;
use Database\Seeders\traits\TemplateSeederTraits\ThermalSalesInvoiceTemplate;
use Illuminate\Database\Seeder;

class InvoiceTemplateTableSeeder extends Seeder
{
    use ThermalSalesInvoiceTemplate,
        ThermalPurchaseInvoiceTemplate,
        SmallSalesInvoiceTemplate,
        SmallPurchaseInvoiceTemplate,
        LargeSalesInvoiceTemplate,
        LargePurchaseInvoiceTemplate;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InvoiceTemplate::query()->truncate();

        $this->thermalSmallSalesInvoiceTemplate();
        $this->thermalSmallPurchaseInvoiceTemplate();

        $this->smallSalesInvoiceTemplate();
        $this->smallPurchaseInvoiceTemplate();
        
        $this->largeSalesInvoiceTemplate();
        $this->largePurchaseInvoiceTemplate();

    }
}