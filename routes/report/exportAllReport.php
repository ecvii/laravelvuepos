<?php

use App\Http\Controllers\API\Export\ExportAllReportController;
use Illuminate\Support\Facades\Route;

Route::get('export/all/report/sales', [ExportAllReportController::class, 'exportAllSales']);
Route::get('export/all/report/purchase', [ExportAllReportController::class, 'exportAllPurchase']);
Route::get('export/all/report/inventory', [ExportAllReportController::class, 'exportAllInventory']);