<?php
namespace Database\Seeders;

use App\Models\SmsTemplate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SmsTemplateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SmsTemplate::query()->truncate();
        // Email Header
        DB::table("sms_templates")->insert([
            'template_type' => 'pos_sms',
            'template_subject' => 'Sales sms',
            'default_content' =>
                'Hi, {first_name} Thanks for shopping with {app_name}. Your invoice is {invoice_id} Total amount {total}'
        ]);

        // Customer Welcome sms

        DB::table("sms_templates")->insert([
            'template_type' => 'customer_welcome_sms',
            'template_subject' => 'Customer Welcome sms',
            'default_content' =>
                'Hi, {first_name} Thanks for join with {app_name}'
        ]);


    }
}
