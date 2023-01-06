<?php

namespace App\Exports;

use App\Models\ProductVariant;
use Illuminate\Support\Facades\Lang;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Events\AfterSheet;

class ProductsExport implements WithHeadings, FromQuery, WithMapping, WithEvents
{
    use Exportable;

    public function query()
    {
         return ProductVariant::query()->with(['product', 'orderItems']);
    }

    public function map($variant): array
    {
        return [
            $variant->product->title ?? null,
            $variant->variant_title === 'default_variant' ? null : $variant->variant_title,
            $variant->sku ?? null,
            $variant->bar_code ?? null,
            $variant->product->description ?? null,
            $variant->product->group->name ?? null,
            $variant->product->brand->name ?? null,
            $variant->product->category->name ?? null,
            $variant->purchase_price ?? null,
            $variant->selling_price ?? null,
            number_format((float)$variant->orderItems->sum('quantity'), 2, '.', '')

        ];
    }

    public function headings(): array
    {
        return [
            Lang::get('lang.name'),
            Lang::get('lang.variant_name'),
            Lang::get('lang.sku'),
            Lang::get('lang.barcode'),
            Lang::get('lang.description'),
            Lang::get('lang.group'),
            Lang::get('lang.brand'),
            Lang::get('lang.category'),
            Lang::get('lang.purchase_price'),
            Lang::get('lang.selling_price'),
            Lang::get('lang.quantity'),
        ];
    }

    //Highlight heading column
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getStyle('A1:k1')->applyFromArray([
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
