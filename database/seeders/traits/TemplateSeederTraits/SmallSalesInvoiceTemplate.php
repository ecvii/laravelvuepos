<?php


namespace Database\Seeders\traits\TemplateSeederTraits;


use Illuminate\Support\Facades\DB;

trait SmallSalesInvoiceTemplate
{

    public function smallSalesInvoiceTemplate()
    {
        //Small sales
        return DB::table("invoice_templates")->insert([
            'template_type' => 'sales',
            'is_default_template' => 0,
            'invoice_size' => 'small',
            'template_title' => 'Small Sales Invoice',
            'default_content' =>
                '<div class="invoice-page-wrapper">
                <div class="thermal-invoice" style="width: 70mm;">
                    <!--Invoice Header-->
                    <div class="text-center invoice-header mb-3">
                    
                        <!--Invoice Logo-->
                        <img src="{logo_source}" class="img-fluid" alt="">
                        <div class="app-name my-2">{app_name}</div>
                        <div class="invoice-type my-2">
                            <span class="text-uppercase font-weight-bold">Sales Invoice</span>
                        </div>
                        <small class="invoice-date">
                            {date} - {time}
                        </small>
                    </div>
    
                    <!--Invoice Info-->
                    <div class="mb-3 font-weight-bold invoice-info">
                        <p>
                            <span>Invoice ID: {invoice_id}</span> 
                        </p>
                         <p >
                            <span>Sold To: {customer_name}</span> 
                        </p>
                        <p>
                            <span>Sold By: {employee_name}</span> 
                        </p>
                        <p>
                            <span>Phone: {phone_number}</span> 
                        </p>
                        <p>
                            <span>Address: {address}</span> 
                        </p>
                        <p>
                            <span>TIN: {tin}</span> 
                        </p>
                        <p>
                            <span>Note: {note}</span> 
                        </p>
                    </div>
    
                    <!--Invoice Body-->
                    <table class="table table-borderless">
                        <tbody class="font-weight-bold">
                            <tr class="border-top border-bottom t-header">
                                <th class="w-25 pl-0">Price</th>
                                <th class="text-right">Qty</th>
                                <th class="text-right">Disc%</th>
                                <th class="text-right pr-0">Total</th>
                            </tr>
                            <tr><td>{item_details}</td></tr>
                            <tr class="t-footer border-top">
                                <td class="text-left">Subtotal</td>
                                <td class="font-weight-bold" colspan="3">{sub_total}</td>
                            </tr>
                            <tr class="t-footer">
                                <td class="text-left">Shipment</td>
                                <td class="font-weight-bold" colspan="3">{shipment_amount}</td>
                            </tr>
                            <tr class="t-footer"> 
                                <td class="text-left">Tax</td>
                                <td class="font-weight-bold" colspan="3">{tax}</td>
                            </tr>
                            <tr class="t-footer">
                                <td class="text-left">Discount</td>
                                <td class="font-weight-bold" colspan="3">{discount}</td>
                            </tr>
                            <tr class="t-footer">
                                <td class="text-left">Total</td>
                                <td class="font-weight-bold" colspan="3">{total}</td>
                            </tr>
                            <tr><td>{payment_details}</td></tr>
                            <tr class="t-footer">
                                <td class="text-left">Exchange</td>
                                <td class="font-weight-bold" colspan="3">{exchange}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="shipment-address">{shipment_address}</div>
                    <div class="text-center">{barcode}</div>
                </div>
            </div>'
        ]);

    }
}