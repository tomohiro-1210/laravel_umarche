<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'name' => 'admin_01',
                'email' => 'admin_01@admin.com',
                'password' => Hash::make('admin_001'),
                'created_at' => '2024/01/01 11:11:11',
            ],
            [
                'name' => 'admin_02',
                'email' => 'admin_02@admin.com',
                'password' => Hash::make('admin_002'),
                'created_at' => '2024/01/01 11:11:11',
            ],
            [
                'name' => 'admin_03',
                'email' => 'admin_03@admin.com',
                'password' => Hash::make('admin_003'),
                'created_at' => '2024/01/01 11:11:11',
            ],
        ]);
    }
}
