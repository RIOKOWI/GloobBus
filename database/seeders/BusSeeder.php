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
            'kode' => 'KB001',
            'nama' => 'Pahala Kencana',
            'tujuan' => 'Jakarta - Yogyakarta',
            'harga' => 250000  ,
            'jenis' => 'Eksekutif  ',
            'jadwal_keberangkatan' => '2024-1-20',
            'supir' => 'Budi Santoso'
        ]);
        Bus::create([
            'kode' => 'KB002',
            'nama' => 'Rosalia Indah',
            'tujuan' => 'Surabaya - Jakarta  ',
            'harga' => 220000  ,
            'jenis' => 'Ekonomi  ',
            'jadwal_keberangkatan' => '2025-1-21',
            'supir' => 'Andi Wijaya'
        ]);
        Bus::create([
            'kode' => 'KB003',
            'nama' => 'Rosalia Indah',
            'tujuan' => 'tangerang - Bandung',
            'harga' => 220000,
            'jenis' => 'Ekonomi',
            'jadwal_keberangkatan' => '2025-12-15',
            'supir' => 'Rudi Hartono'
        ]);
        Bus::create([
            'kode' => 'KB004',
            'nama' => 'Sumber Alam',
            'tujuan' => 'Bandung - Surabaya',
            'harga' => 800000,
            'jenis' => 'Bisnis',
            'jadwal_keberangkatan' => '2025-1-20',
            'supir' => 'Dedi Setiawan'
        ]);
        Bus::create([
            'kode' => 'KB005',
            'nama' => 'Kramat Djati',
            'tujuan' => 'Jakarta - Cirebon',
            'harga' => 120000,
            'jenis' => 'Ekonomi',
            'jadwal_keberangkatan' => '2025-12-15',
            'supir' => 'Zainal Arifin'
        ]);
        Bus::create([
            'kode' => 'KB006',
            'nama' => 'Gunung Harta',
            'tujuan' => 'Jakarta - Bali',
            'harga' => 350000,
            'jenis' => 'Eksekutif',
            'jadwal_keberangkatan' => '2025-1-15',
            'supir' => 'Joko Prasetyo'
        ]);
        Bus::create([
            'kode' => 'KB007',
            'nama' => 'Murni Jaya',
            'tujuan' => 'Jakarta - Lampung',
            'harga' => 200000,
            'jenis' => 'Bisnis',
            'jadwal_keberangkatan' => '2025-1-19',
            'supir' => 'Hendra Wibowo'
        ]);
        Bus::create([
            'kode' => 'KB008',
            'nama' => 'Laksana',
            'tujuan' => 'Semarang - Jakarta',
            'harga' => 250000,
            'jenis' => 'Eksekutif',
            'jadwal_keberangkatan' => '2025-1-18',
            'supir' => 'Sudirman'
        ]);
        Bus::create([
            'kode' => 'KB009',
            'nama' => 'Sumber Alam',
            'tujuan' => 'Solo - Jakarta',
            'harga' => 210000,
            'jenis' => 'Bisnis  ',
            'jadwal_keberangkatan' => '2025-1-30',
            'supir' => 'Eko Prasetyo'
        ]);
        Bus::create([
            'kode' => 'KB010',
            'nama' => 'ALS (Antar Lintas Sumatra)',
            'tujuan' => 'Medan - Jakarta',
            'harga' => 350000,
            'jenis' => 'Eksekutif  ',
            'jadwal_keberangkatan' => '2025-1-11',
            'supir' => 'Arif Hidayat' 
        ]);
    }
}
