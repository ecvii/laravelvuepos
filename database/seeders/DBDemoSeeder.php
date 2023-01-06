<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DBDemoSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            CustomerTableSeeder::class,
            SupplierTableSeeder::class,
            EmailTemplateTableSeeder::class,
            SmsTemplateTableSeeder::class,
            TaxTableSeeder::class,
            SettingsTableSeeder::class,
            InvoiceTemplateTableSeeder::class,
            ProductBrandTableSeeder::class,
            ProductGroupTableSeeder::class,
            ProductVariantAttributesTableSeeder::class,
            ProductCategoryTableSeeder::class,
            CustomerGroupTableSeeder::class,
            ProductsTableSeeder::class,
            ProductAttributeValuesTableSeeder::class,
            ProductVariantsTableSeeder::class,
            RolesTableSeed::class,
            BranchesTableSeeder::class,
            CashRegisterTableSeeder::class,
            PaymentMethodsTableSeeder::class,
            ProductUnitsTableSeeder::class,
            OrderTableSeeder::class,
            OrderItemTableSeeder::class,
            PaymentTableSeeder::class,
            CashRegisterLogsTableSeeder::class,
            ShortcutKeyTableSeeder::class,
            RestaurantTableSeeder::class,
            AdjustStockTableSeeder::class,
            ShippingAreaTableSeeder::class,
            ]);
    }
}