<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('services')->insert([
            [
                'name' => 'Service 1',
                'source' => 'Source A',
                'status' => 'Active',
                'order_number' => 1,
                'phone_number' => '123456789',
                'grant_time' => '2023-03-08 09:00:00',
                'address' => '123 Main St.',
                'email' => 'service1@example.com',
                'expiration_date' => '2024-03-08 09:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Service 2',
                'source' => 'Source B',
                'status' => 'Inactive',
                'order_number' => 2,
                'phone_number' => '987654321',
                'grant_time' => '2023-03-08 10:00:00',
                'address' => '456 Second St.',
                'email' => 'service2@example.com',
                'expiration_date' => '2025-03-08 10:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
