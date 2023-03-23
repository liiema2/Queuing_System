<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserLog;

class UserLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        UserLog::create([
            'id' =>1,
            'username' => 'john.doe',
            'ip_address' => '192.168.1.100',
            'action' => 'Cập nhật dịch vụ',
        ]);
    }
}
