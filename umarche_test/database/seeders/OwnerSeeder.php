<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'name' => 'owner_01',
                'email' => 'owner_01@owner.com',
                'password' => Hash::make('owner_001'),
                'created_at' => '2024/01/01 11:11:11',
            ],
            [
                'name' => 'owner_02',
                'email' => 'owner_02@owner.com',
                'password' => Hash::make('owner_002'),
                'created_at' => '2024/01/01 11:11:11',
            ],
            [
                'name' => 'owner_03',
                'email' => 'owner_03@owner.com',
                'password' => Hash::make('owner_003'),
                'created_at' => '2024/01/01 11:11:11',
            ],
        ]);
    }
}
