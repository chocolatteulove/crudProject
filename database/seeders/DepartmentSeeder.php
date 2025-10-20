<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departments')->truncate(); // hapus semua data dulu
        Department::create(['nama_departemen' => 'IT']);
        Department::create(['nama_departemen' => 'HRD']);
        Department::create(['nama_departemen' => 'Keuangan']);
        Department::create(['nama_departemen' => 'Marketing']);
    }
}
