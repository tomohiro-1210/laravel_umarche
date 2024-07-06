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
                'name' => 'owner_11',
                'email' => 'owner_11@owner.com',
                'password' => Hash::make('ownertest'),
                'created_at' => '2024/01/01 11:11:11',
            ],
            [
                'name' => 'owner_12',
                'email' => 'owner_12@owner.com',
                'password' => Hash::make('ownertest'),
                'created_at' => '2024/01/01 11:11:11',
            ],
            [
                'name' => 'owner_13',
                'email' => 'owner_13@owner.com',
                'password' => Hash::make('ownertest'),
                'created_at' => '2024/01/01 11:11:11',
            ],
            [
                'name' => 'owner_14',
                'email' => 'owner_14@owner.com',
                'password' => Hash::make('ownertest'),
                'created_at' => '2024/01/01 11:11:11',
            ],
            [
                'name' => 'owner_15',
                'email' => 'owner_15@owner.com',
                'password' => Hash::make('ownertest'),
                'created_at' => '2024/01/01 11:11:11',
            ],
            [
                'name' => 'owner_16',
                'email' => 'owner_16@owner.com',
                'password' => Hash::make('ownertest'),
                'created_at' => '2024/01/01 11:11:11',
            ],
            [
                'name' => 'owner_17',
                'email' => 'owner_17@owner.com',
                'password' => Hash::make('ownertest'),
                'created_at' => '2024/01/01 11:11:11',
            ],
            [
                'name' => 'owner_18',
                'email' => 'owner_18@owner.com',
                'password' => Hash::make('ownertest'),
                'created_at' => '2024/01/01 11:11:11',
            ],
            [
                'name' => 'owner_19',
                'email' => 'owner_19@owner.com',
                'password' => Hash::make('ownertest'),
                'created_at' => '2024/01/01 11:11:11',
            ],
            [
                'name' => 'owner_21',
                'email' => 'owner_21@owner.com',
                'password' => Hash::make('ownertest'),
                'created_at' => '2024/01/01 11:11:11',
            ],
            [
                'name' => 'owner_22',
                'email' => 'owner_22@owner.com',
                'password' => Hash::make('ownertest'),
                'created_at' => '2024/01/01 11:11:11',
            ],
            [
                'name' => 'owner_23',
                'email' => 'owner_23@owner.com',
                'password' => Hash::make('ownertest'),
                'created_at' => '2024/01/01 11:11:11',
            ],
            [
                'name' => 'owner_24',
                'email' => 'owner_24@owner.com',
                'password' => Hash::make('ownertest'),
                'created_at' => '2024/01/01 11:11:11',
            ],
            [
                'name' => 'owner_25',
                'email' => 'owner_25@owner.com',
                'password' => Hash::make('ownertest'),
                'created_at' => '2024/01/01 11:11:11',
            ],
            [
                'name' => 'owner_26',
                'email' => 'owner_26@owner.com',
                'password' => Hash::make('ownertest'),
                'created_at' => '2024/01/01 11:11:11',
            ],
            [
                'name' => 'owner_27',
                'email' => 'owner_27@owner.com',
                'password' => Hash::make('ownertest'),
                'created_at' => '2024/01/01 11:11:11',
            ],
            [
                'name' => 'owner_28',
                'email' => 'owner_28@owner.com',
                'password' => Hash::make('ownertest'),
                'created_at' => '2024/01/01 11:11:11',
            ],
            [
                'name' => 'owner_29',
                'email' => 'owner_29@owner.com',
                'password' => Hash::make('ownertest'),
                'created_at' => '2024/01/01 11:11:11',
            ],
        ]);
    }
}
