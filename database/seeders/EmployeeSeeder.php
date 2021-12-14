<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            ['role' => 'quản trị hệ thống', 'name' => 'AnhA', 'sex' => 'nam', 'phone' => '123456786', 'numbercard' => '000000', 'email' => 'anha@gmai', 'address' => 'chợA'],
            ['role' => 'quản lý phòng ', 'name' => 'AnhB', 'sex' => 'nam', 'phone' => '123456787', 'numbercard' => '000001', 'email' => 'anhb@gmai', 'address' => 'chợB'],
            ['role' => 'lễ tân ', 'name' => 'AnhC', 'sex' => 'nam', 'phone' => '123456788', 'numbercard' => '000002', 'email' => 'anhc@gmai', 'address' => 'chợC'],
            ['role' => 'quản lý dịch vụ', 'name' => 'AnhD', 'sex' => 'nam', 'phone' => '123456789', 'numbercard' => '000003', 'email' => 'anhd@gmai', 'address' => 'chợD'],
        ]);
    }
}
