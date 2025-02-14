<?php

namespace Database\Seeders;
use App\Models\Student;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            Student::create([
                "nim" => "F1E12305$i",
                "name" => "Rizky Rofandi ke-$i",
                "prodi" => "Sistem Informasi",
                "angkatan" => 2000 + $i,
                "alamat" => "Kota Jambi"
            ]);
        }
        Student::create([
            "nim" => "F1E123016",
            "name" => "Adam Zuhri Ramadhans",
            "prodi" => "Sistem Informasi",
            "angkatan"=> "2023",
            "alamat"=> "Jl. Radja Yamin"
        ]);
    }
}
