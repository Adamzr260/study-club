<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // DB::table('students')->insert([
        //     "nim" => "F1E123016",
        //     "name" => "Adam Zuhri Ramadhan",
        //     "prodi" => "Sistem Informasi",
        //     "angkatan"=> "2023",
        //     "alamat"=> "Jl. Radja Yamin"
        // ]);

        $this->call(StudentSeeder::class);

        $this->call(product::class);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
