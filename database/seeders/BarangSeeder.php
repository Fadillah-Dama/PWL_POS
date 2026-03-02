<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_barang = [
            // Kategori 1: Elektronik (3 barang)
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG01', 'barang_nama' => 'TV LED 32 Inch', 'harga_beli' => 1500000, 'harga_jual' => 2000000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BRG02', 'barang_nama' => 'Kipas Angin', 'harga_beli' => 150000, 'harga_jual' => 250000],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_kode' => 'BRG03', 'barang_nama' => 'Setrika Listrik', 'harga_beli' => 100000, 'harga_jual' => 150000],
            // Kategori 2: Pakaian (3 barang)
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'BRG04', 'barang_nama' => 'Kemeja Pria', 'harga_beli' => 80000, 'harga_jual' => 120000],
            ['barang_id' => 5, 'kategori_id' => 2, 'barang_kode' => 'BRG05', 'barang_nama' => 'Celana Jeans', 'harga_beli' => 100000, 'harga_jual' => 180000],
            ['barang_id' => 6, 'kategori_id' => 2, 'barang_kode' => 'BRG06', 'barang_nama' => 'Kaos Polos', 'harga_beli' => 30000, 'harga_jual' => 50000],
            // Kategori 3: Makanan (3 barang)
            ['barang_id' => 7, 'kategori_id' => 3, 'barang_kode' => 'BRG07', 'barang_nama' => 'Mie Instan', 'harga_beli' => 2500, 'harga_jual' => 3500],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode' => 'BRG08', 'barang_nama' => 'Roti Gandum', 'harga_beli' => 12000, 'harga_jual' => 15000],
            ['barang_id' => 9, 'kategori_id' => 3, 'barang_kode' => 'BRG09', 'barang_nama' => 'Biskuit Cokelat', 'harga_beli' => 8000, 'harga_jual' => 10000],
            // Kategori 4: Minuman (3 barang)
            ['barang_id' => 10, 'kategori_id' => 4, 'barang_kode' => 'BRG10', 'barang_nama' => 'Air Mineral 600ml', 'harga_beli' => 2000, 'harga_jual' => 3500],
            ['barang_id' => 11, 'kategori_id' => 4, 'barang_kode' => 'BRG11', 'barang_nama' => 'Teh Kotak', 'harga_beli' => 3500, 'harga_jual' => 5000],
            ['barang_id' => 12, 'kategori_id' => 4, 'barang_kode' => 'BRG12', 'barang_nama' => 'Kopi Kaleng', 'harga_beli' => 5000, 'harga_jual' => 8000],
            // Kategori 5: Alat Tulis (3 barang)
            ['barang_id' => 13, 'kategori_id' => 5, 'barang_kode' => 'BRG13', 'barang_nama' => 'Buku Tulis', 'harga_beli' => 3000, 'harga_jual' => 5000],
            ['barang_id' => 14, 'kategori_id' => 5, 'barang_kode' => 'BRG14', 'barang_nama' => 'Pulpen Hitam', 'harga_beli' => 1500, 'harga_jual' => 3000],
            ['barang_id' => 15, 'kategori_id' => 5, 'barang_kode' => 'BRG15', 'barang_nama' => 'Pensil 2B', 'harga_beli' => 1000, 'harga_jual' => 2000],
        ];
        DB::table('m_barang')->insert($data_barang);
    }
}
