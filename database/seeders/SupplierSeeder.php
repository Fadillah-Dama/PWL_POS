<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_supplier = [
            ['supplier_id' => 1, 'supplier_kode' => 'SPL01', 'supplier_nama' => 'PT Maju Bersama', 'supplier_alamat' => 'Jl. Merdeka No. 1, Jakarta'],
            ['supplier_id' => 2, 'supplier_kode' => 'SPL02', 'supplier_nama' => 'CV Indo Berkah', 'supplier_alamat' => 'Jl. Pahlawan No. 10, Surabaya'],
            ['supplier_id' => 3, 'supplier_kode' => 'SPL03', 'supplier_nama' => 'UD Makmur Jaya', 'supplier_alamat' => 'Jl. Sudirman No. 5, Bandung'],
        ];
        DB::table('m_supplier')->insert($data_supplier);
    }
}
