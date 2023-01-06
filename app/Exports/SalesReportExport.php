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

class SalesReportExport implements WithHeadings, FromQuery, WithMapping, WithEvents
{
    use Exportable;

    public function query()
    {
        return OrderItems::query()->join('orders', 'orders.id', '=', 'order_items.order_id')
            ->leftJoin('products', 'products.id', '=', 'order_items.product_id')
            ->join('users', 'users.id', '=', 'orders.created_by')
            ->leftJoin('taxes', 'taxes.id', '=', 'order_items.tax_id')
            ->leftJoin('customers', 'customers.id', '=', 'orders.customer_id')
            ->leftJoin('branches', 'branches.id', 'orders.transfer_branch_id')
            ->select(
                'products.title',
                'orders.id',
                'branches.name as transfer_branch_name',
                'orders.date',
                'orders.type',
                'orders.sub_total',
                'orders.total_tax as tax',
                'orders.total',
                'orders.invoice_id',
                'orders.due_amount',
                DB::raw("CONCAT(users.first_name,' ',users.last_name)  AS created_by"),
                DB::raw("users.id as user_id"),
                DB::raw("CONCAT(customers.first_name,' ',customers.last_name)  AS customer"),
                DB::raw("customers.id as customer_id"),
                DB::raw("((sum(((abs(order_items.quantity)*order_items.price)* order_items.discount)/100))+ 
                (select abs(order_items.sub_total) from order_items where order_items.type ='discount' and order_items.order_id = orders.id)) AS discount"),
                DB::raw('CONVERT(abs(SUM(CASE WHEN order_items.type = "discount" THEN 0 ELSE order_items.quantity END)),SIGNED INTEGER) as item_purchased')
            )
            ->where('orders.order_type', '!=', 'receiving')
            ->where('orders.status', '=', 'done')
            ->where('orders.order_type', '=', 'sales')
            ->groupBy('order_items.order_id');
    }

    public function map($reportRow): array
    {
        return [
            $reportRow->invoice_id,
            $reportRow->date,
            Lang::get('lang.'.$reportRow->type),
            $reportRow->created_by,
            $reportRow->customer ??  Lang::get('lang.walk_in_customer'),
            $reportRow->item_purchased,
            number_format((float)$reportRow->tax, 2, '.', ''),
            number_format((float)$reportRow->discount, 2, '.', ''),
            number_format((float)$reportRow->total, 2, '.', ''),
            number_format((float)$reportRow->due_amount, 2, '.', ''),
        ];
    }

    public function headings(): array
    {
        return [
            Lang::get('lang.invoice_id'),
            Lang::get('lang.date'),
            Lang::get('lang.sales_type'),
            Lang::get('lang.sold_by'),
            Lang::get('lang.sold_to'),
            Lang::get('lang.item_purchased'),
            Lang::get('lang.tax'),
            Lang::get('lang.discount'),
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
