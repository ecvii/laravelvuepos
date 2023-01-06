<?php


namespace Database\Seeders\traits\TemplateSeederTraits;


use Illuminate\Support\Facades\DB;

trait ThermalSalesInvoiceTemplate
{
    public function thermalSmallSalesInvoiceTemplate()
    {
        //Thermal sales
        return DB::table("invoice_templates")->insert([
            'template_type' => 'sales',
            'is_default_template' => 1,
            'invoice_size' => 'thermal',
            'template_title' => 'Thermal Sales Invoice',
            'default_content' =>
                '<div class="pos">
                <div class="pos__item pos__item--header">
                    <!--Invoice Logo-->
                    <img src="{logo_source}" class="img-fluid"
                        alt="">
                    <div class="pos__item--header__title">
                        <h3>{app_name}</h3>
                        <p>Sales Invoice</p>
                        <small>{date} - {time}</small>
                    </div>
                    <!--Invoice Info-->
                    <div class="pos__item--header__info">
                        <p> <span>Invoice ID: {invoice_id}</span> </p>
                        <p> <span>Sold To: {customer_name}</span> </p>
                        <p> <span>Sold By: {employee_name}</span> </p>
                        <p> <span>Phone: {phone_number}</span> </p>
                        <p> <span>Address: {address}</span> </p>
                        <p> <span>TIN: {tin}</span> </p>
                        <p> <span>Note: {note}</span> </p>
                    </div>
                </div>
                <!--Invoice Body-->
                <div class="pos__item pos__item--body">
                    <div class="pos__item--body__content">
                        <table class="">
                            <thead>
                                <tr>
                                    <th>Price</th>
                                    <th>Disc%</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>{item_details}</td></tr>
                            </tbody>
                        </table>
                        <div class="dashed-separator"></div>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Subtotal</td>
                                    <td>{sub_total}</td>
                                </tr>
                                <tr>
                                    <td>Shipment</td>
                                    <td>{shipment_amount}</td>
                                </tr>
                                <tr>
                                    <td>Tax</td>
                                    <td>{tax}</td>
                                </tr>
                                <tr>
                                    <td>Discount</td>
                                    <td>{discount}</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>{total}</td>
                                </tr>
                                <tr>{payment_details}</tr>
                                <tr>
                                    <td>Exchange</td>
                                    <td>{exchange}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="pos__item pos__item--footer">
                    <div class="shipment-address">{shipment_address}</div>
                    <div class="barcode">{barcode}</div>
                </div>
            </div>
            '
        ]);
    }
}