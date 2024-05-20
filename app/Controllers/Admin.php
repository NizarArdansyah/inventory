<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    public function index()
    {
        //
    }

    public function barang()
    {
        // get data barang
        $barang = new \App\Models\Barang();
        $data = $barang->find();
        // return dd($data);
        return view('dashboard/kelola_barang', 
            [
                'title' => 'Kelola Barang',
                'data' => $data,
            ]
        );
    }

    public function kelola_stok()
    {
        $barang = new \App\Models\Barang();
        $data = $barang->find();
        $data = $barang->join('stoks', 'stoks.id_barang = barangs.id_barang')->findAll();

        return view('dashboard/kelola_stok', [
            'title' => 'Barang Masuk',
            'data' => $data,
        ]);
    }

    public function transaksi()
    {
        $transaksi = new \App\Models\Transaksi();
        $data = $transaksi->getTransaksiWithDetails();
        return view('dashboard/transaksi', [
            'title' => 'Transaksi',
            'data' => $data
        ]);
    }


}
