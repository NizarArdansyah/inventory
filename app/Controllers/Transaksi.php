<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Transaksi extends BaseController
{
    public function index()
    {
        //
    }

    public function create(){
        $session = session();
        $userData = $session->get();
        $db = \Config\Database::connect();
        
        // // Subquery to get item_id from inventory
        // $subquery = $db->table('stoks')->select('id_barang');

        // // Query to get items not in inventory
        // $builder = $db->table('barangs');
        // $builder->whereIn('id_barang', $subquery);
        // $query = $builder->get();
        // $data = $query->getResultArray();
        
        // get data from barang where stok > 0
        $barang = new \App\Models\Barang();
        $data = $barang->where('stok >', 0)->findAll();


        return view('dashboard/tambah_transaksi', [
            'title' => 'Tambah Barang',
            'data' => $data,
            'user' => $userData,
        ]);
    }

    public function post(){
        // save data transaksi to db
        $transaksi = new \App\Models\Transaksi();
        $barang = new \App\Models\Barang();
        
        $idUser = $this->request->getPost('id_user');
        $idBarang = $this->request->getPost('id_barang');
        $kuantitas = $this->request->getPost('kuantitas');
        $nominal = $this->request->getPost('nominal');

        $data_barang = [
            'id_user' => $idUser,
            'id_barang' => $idBarang,
            'kuantitas' => $kuantitas,
            'nominal' => $nominal,
            'tanggal_transaksi' => date('Y-m-d H:i:s'),
        ];

        $barangs = $barang->where('id_barang', $idBarang)->first();
        
        if ($barangs['stok'] > 1) {
            $barangs  ['stok'] = $barangs['stok'] - $kuantitas;
            $transaksi->save($data_barang);
            $barang->update($barangs['id_barang'], $barangs);
        } else {
            return redirect()->to('/admin/transaksi')->with('error', 'Stok barang tidak mencukupi');
        }
        
        return redirect()->to('/admin/transaksi')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id){
        $transaksi = new \App\Models\Transaksi();
        $data = $transaksi->find($id);
        return view('dashboard/edit_transaksi', [
            'title' => 'Edit Transaksi',
            'data' => $data,
        ]);
    }

    public function update($id){
        $transaksi = new \App\Models\Transaksi();
        $data = [
            'id_barang' => $this->request->getPost('id_barang'),
            'kuantitas' => $this->request->getPost('kuantitas'),
            'nominal' => $this->request->getPost('nominal'),
            'tanggal_transaksi' => date('Y-m-d H:i:s'),
        ];
        $transaksi->update($id, $data);
        return redirect()->to('/admin/transaksi')->with('success', 'Data berhasil diubah');
    }

    public function delete($id){
        $transaksi = new \App\Models\Transaksi();
        $transaksi->delete($id);
        return redirect()->to('/admin/transaksi')->with('success', 'Data berhasil dihapus');
    }


}
