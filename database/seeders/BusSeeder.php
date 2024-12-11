<?php

namespace Database\Seeders;

use App\Models\Bus;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bus::create([
            'kode' => 'B001',
            'nama' => 'Bus Eksekutif',
            'tujuan' => 'Jakarta - Bandung',
            'harga' => 150000,
            'jenis' => 'eksekutif',
            'jadwal_keberangkatan' => '2024-12-15',
            'supir' => 'John Doe'
        ]);
        Bus::create([
            'kode' => 'B002',
            'nama' => 'Rosalia Indah',
            'tujuan' => 'tangerang - Bandung',
            'harga' => 200000,
            'jenis' => 'ekonomi',
            'jadwal_keberangkatan' => '2025-12-15',
            'supir' => 'Arif'
        ]);
    }
}
