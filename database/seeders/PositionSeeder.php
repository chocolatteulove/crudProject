<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Position;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('positions')->truncate();
        Position::create([
            'nama_jabatan' => 'Manager',
            'gaji_pokok' => 8000000,
        ]);
        Position::create([
            'nama_jabatan' => 'Staff',
            'gaji_pokok' => 5000000,
        ]);
        Position::create([
            'nama_jabatan' => 'Supervisor',
            'gaji_pokok' => 6000000,
        ]);
        Position::create([
            'nama_jabatan' => 'Intern',
            'gaji_pokok' => 3000000,
        ]);
    }
}
