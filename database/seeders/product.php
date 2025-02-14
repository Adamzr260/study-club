<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class product extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("products")->insert([
            "code" => rand(),
            "name" => "Mouse",
            "description" => "Hardware computer",
            "qty"=> 4,
            "price"=> 12000
        ]);
        DB::table("products")->insert([
            "code" => rand(),
            "name" => "Keyboard",
            "description" => "Hardware computer",
            "qty"=> 4,
            "price"=> 15000
        ]);
        DB::table("products")->insert([
            "code" => rand(),
            "name" => "Laptop",
            "description" => "Hardware computer",
            "qty"=> 4,
            "price"=> 17000
        ]);
    }
}

