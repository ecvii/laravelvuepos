<?php
namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->truncate();
        DB::table('users')->insert([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'admin@demo.com',
            'password' => Hash::make('123456'),
            'verified' => 1,
            'is_admin' => 1,
            'user_type' => 'staff',
            'branch_id' =>1,
            'token' => ''
        ]);

        DB::table('users')->insert([
            'first_name' => 'Robert',
            'last_name' => 'Smith',
            'email' => 'robert@demo.com',
            'password' => Hash::make('123456'),
            'verified' => 1,
            'is_admin' => 0,
            'role_id' => 2,
            'user_type' => 'staff',
            'token' => '',
            'branch_id' =>2,
        ]);

        DB::table('users')->insert([
            'first_name' => 'Joan',
            'last_name' => 'Toy',
            'email' => 'joan@demo.com',
            'phone_number' => '123456789',
            'password' => Hash::make('123456'),
            'verified' => 1,
            'is_admin' => 0,
            'role_id' => 2,
            'user_type' => 'staff',
            'token' => '',
            'branch_id' =>1,
        ]);

        DB::table('users')->insert([
            'first_name' => 'Kade',
            'last_name' => 'Kiehn',
            'email' => 'kade@demo.com',
            'phone_number' => '123456789',
            'password' => Hash::make('123456'),
            'verified' => 1,
            'is_admin' => 0,
            'role_id' => 1,
            'user_type' => 'staff',
            'token' => '',
            'branch_id' =>1,
        ]);

        DB::table('users')->insert([
            'first_name' => 'Ali',
            'last_name' => 'Banet',
            'email' => 'banet@demo.com',
            'company' => 'Banet Multimedia',
            'phone_number' => '1230456789',
            'password' => Hash::make('123456'),
            'avatar'=>'default.jpg',
            'verified' => 1,
            'is_admin' => 0,
            'role_id' => 1,
            'user_type' => 'staff',
            'token' => '',
            'branch_id' =>2,
        ]);
    }
}
