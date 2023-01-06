<?php


namespace App\Http\Controllers\API\Export;


use App\Exports\ProductsExport;
use App\Http\Controllers\Controller;

class ProductExportController extends Controller
{

    public function exportAllProduct()
    {
        return (new ProductsExport)->download('products.xlsx');
    }
}