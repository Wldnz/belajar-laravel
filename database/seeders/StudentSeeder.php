<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["name" => "Wildan","score" => 80],
            ["name" => "Izhar","score" => 70],
            ["name" => "Al Haqq","score" => 90],
        ];

        DB::table("students")->insert($data);
    }
}
