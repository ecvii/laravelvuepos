<?php


namespace App\Http\Controllers\API\Export;


use App\Exports\InventoryReportExport;
use App\Exports\ProductsExport;
use App\Exports\PurchaseReportExport;
use App\Exports\SalesReportExport;
use App\Http\Controllers\Controller;

class ExportAllReportController extends Controller
{
    public function exportAllSales()
    {
        return (new SalesReportExport)->download('sales_report.xlsx');
    }

    public function exportAllPurchase()
    {
        return (new PurchaseReportExport)->download('purchase_report.xlsx');
    }

    public function exportAllInventory()
    {
        return (new InventoryReportExport)->download('inventory_report.xlsx');
    }
}