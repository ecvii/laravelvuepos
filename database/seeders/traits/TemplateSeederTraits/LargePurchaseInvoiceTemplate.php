<?php


namespace Database\Seeders\traits\TemplateSeederTraits;


use Illuminate\Support\Facades\DB;

trait LargePurchaseInvoiceTemplate
{
    public function largePurchaseInvoiceTemplate()
    {
        //Large purchase
        return DB::table("invoice_templates")->insert([
            'template_type' => 'receiving',
            'is_default_template' => 0,
            'invoice_size' => 'large',
            'template_title' => 'Large Purchase Invoice',
            'default_content' =>
                '<div class="invoice-page-wrapper">
                <div class="thermal-invoice" style="width: 95mm;">
                    <!--Invoice Header-->
                    <div class="text-center invoice-header mb-3">
                    
                        <!--Invoice Logo-->
                       <img src="{logo_source}" width="100" class="img-fluid" alt="">
                        <div class="app-name my-2">{app_name}</div>
                        <div>
                            <h6 class="text-uppercase font-weight-bold">Purchase Invoice</h6>
                        </div>
                        <small class="font-weight-bold">
                            {date} - {time}
                        </small>
                    </div>
    
                    <!--Invoice Info-->
                    <div class="mb-3 font-weight-bold invoice-info">
                        <p class="mb-1">
                            <span class="font-weight-bold">Invoice ID: </span> {invoice_id}
                        </p>
                         <p class="mb-1">
                            <span class="font-weight-bold">Supplier: </span> {supplier_name}
                        </p>
                        <p class="mb-1">
                            <span class="font-weight-bold">TIN: </span> {tin}
                        </p>
                        <p class="mb-1">
                            <span class="font-weight-bold">Purchased By: </span> {employee_name}
                        </p>
                    </div>
    
                    <!--Invoice Body-->
                    <table class="table table-borderless">
                        <tbody class="font-weight-bold">
                            <tr class="border-top border-bottom t-header">
                                <th class="pl-0">Items</th>
                                <th class="text-right">Qty</th>
                                <th class="text-right">Price</th>
                                <th class="text-right">Discount</th>
                                <th class="text-right pr-0">Total</th>
                            </tr>
                            <tr><td>{item_details}</td></tr>
                            <tr class="t-footer border-top">
                                <td>Subtotal</td>
                                <td class="font-weight-bold" colspan="4">{sub_total}</td>
                            </tr>
                            <tr class="t-footer">
                                <td>Tax</td>
                                <td class="font-weight-bold" colspan="4">{tax}</td>
                            </tr>
                            <tr class="t-footer">
                                <td>Discount</td>
                                <td class="font-weight-bold" colspan="4">{discount}</td>
                            </tr>
                            <tr class="t-footer">
                                <td>Total</td>
                                <td class="font-weight-bold" colspan="4">{total}</td>
                            </tr>
                            <tr><td>{payment_details}</td></tr>
                            <tr class="t-footer">
                                <td>Exchange</td>
                                <td class="font-weight-bold" colspan="4">{exchange}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-center">{barcode}</div>
                </div>
            </div>'
        ]);  //Large purchase ends
    }

}