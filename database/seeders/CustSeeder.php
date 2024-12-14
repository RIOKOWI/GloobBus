<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Customer::create([
            'nama' => 'Rio Achyar',
            'alamat' => 'Puri Jaya',
            'phone' => '08953845650474'
        ]);
        Customer::create([
            'nama' => 'Muhammad Turtusi Afrizal Perdana',
            'alamat' => 'Cilongok',
            'phone' => '089525340303'
        ]);
        Customer::create([
            'nama' => 'Pandri',
            'alamat' => 'Tangerang',
            'phone' => '089625338590'
        ]);
    }
}
