<?php

namespace App\Exports;

use App\Models\OrderItems;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Events\AfterSheet;

class PurchaseReportExport implements WithHeadings, FromQuery, WithMapping, WithEvents
{
    use Exportable;

    public function query()
    {
         return OrderItems::query()->join('orders', 'orders.id', '=', 'order_items.order_id')
             ->join('users', 'users.id', '=', 'orders.created_by')
             ->leftJoin('suppliers', 'suppliers.id', '=', 'orders.supplier_id')
             ->select(
                 'orders.id',
                 'orders.date',
                 'orders.type',
                 'orders.total',
                 'orders.invoice_id',
                 'orders.due_amount',
                 DB::raw("suppliers.id as supplier_id"),
                 DB::raw('CONVERT(abs(sum(order_items.quantity)),SIGNED INTEGER) as item_purchased'),
                 DB::raw("CONCAT(users.first_name,' ',users.last_name)  AS full_name"),
                 DB::raw("CONCAT(suppliers.first_name,' ',suppliers.last_name)  AS supplier_name"),
                 DB::raw("users.id as user_id")
             )
             ->where('orders.order_type', '=', 'receiving')
             ->groupBy('order_items.order_id');
    }

    public function map($reportRow): array
    {
        return [
            $reportRow->invoice_id,
            $reportRow->date,
            Lang::get('lang.'.$reportRow->type),
            $reportRow->supplier_name ??  Lang::get('lang.walk_in_supplier'),
            $reportRow->full_name,
            $reportRow->item_purchased,
            number_format((float)$reportRow->total, 2, '.', ''),
            number_format((float)$reportRow->due_amount, 2, '.', ''),
        ];
    }

    public function headings(): array
    {
        return [
            Lang::get('lang.invoice_id'),
            Lang::get('lang.date'),
            Lang::get('lang.received_type'),
            Lang::get('lang.supplier_name'),
            Lang::get('lang.purchase_by'),
            Lang::get('lang.item_purchased'),
            Lang::get('lang.total'),
            Lang::get('lang.due'),
        ];
    }

    //Highlight heading column
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getStyle('A1:H1')->applyFromArray([
                        'font' =>[
                            'bold' => true
                        ],
                        'borders' => [
                            'outline' =>[
                                'color' => ['argb' =>'FFFF0000']
                            ],
                        ]
                    ],
                );
            },
        ];
    }
}
