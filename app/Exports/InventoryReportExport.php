<?php

namespace App\Exports;

use App\Models\ProductVariant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Events\AfterSheet;

class InventoryReportExport implements WithHeadings, FromQuery, WithMapping, WithEvents
{
    use Exportable;

    public function query()
    {
         return ProductVariant::query()->select(
             'orders.date',
             'product_variants.id',
             'product_variants.sku',
             'product_variants.product_id',
             'product_variants.variant_title',
             'product_variants.purchase_price',
             'product_variants.selling_price',
             'products.title',
             'products.taxable',
             'product_categories.name as category_name',
             'product_brands.name as brand_name',
             'product_groups.name as group_name',
             'products.taxable',
             'products.tax_type',
             'products.tax_id',
             'product_variants.re_order as re_order',
             'product_variants.bar_code as barcode',
             DB::raw('CONVERT(sum(order_items.quantity),SIGNED INTEGER) as inventory')
         )
             ->leftJoin('order_items', 'order_items.variant_id', '=', 'product_variants.id')->groupBy('order_items.variant_id')
             ->leftJoin('products', 'products.id', '=', 'product_variants.product_id')
             ->leftJoin('product_categories', 'products.category_id', '=', 'product_categories.id')
             ->leftJoin('product_brands', 'products.brand_id', '=', 'product_brands.id')
             ->leftJoin('orders', 'orders.id', '=', 'order_items.order_id')
             ->leftJoin('product_groups', 'products.group_id', '=', 'product_groups.id')->where('product_variants.enabled', 1);
    }

    public function map($reportRow): array
    {
        return [
            $reportRow->title,
            $reportRow->sku,
            $reportRow->barcode,
            $reportRow->variant_title == 'default_variant' ? '' :  $reportRow->variant_title ,
            $reportRow->category_name,
            $reportRow->group_name,
            $reportRow->brand_name,
            $reportRow->purchase_price,
            $reportRow->selling_price,
            number_format((float)$reportRow->inventory, 2, '.', ''),
        ];
    }

    public function headings(): array
    {
        return [
            Lang::get('lang.title'),
            Lang::get('lang.sku'),
            Lang::get('lang.barcode'),
            Lang::get('lang.variant_title'),
            Lang::get('lang.category_name'),
            Lang::get('lang.group_name'),
            Lang::get('lang.brand_name'),
            Lang::get('lang.purchase_price'),
            Lang::get('lang.selling_price'),
            Lang::get('lang.inventory'),
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
