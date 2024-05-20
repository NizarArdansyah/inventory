<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Barang extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_barang' => 'Laptop',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
                'stok' => 10,
            ],
            [
                'nama_barang' => 'Mouse',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
                'stok' => 10,
            ],
            [
                'nama_barang' => 'Keyboard',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
                'stok' => 10,
            ],
            [
                'nama_barang' => 'Monitor',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
                'stok' => 10,
            ],
            [
                'nama_barang' => 'Printer',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
                'stok' => 10,
            ],
        ];

        // Using Query Builder
        $this->db->table('barangs')->insertBatch($data);
    }
}
