<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Barang extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('dashboard/tambah_barang', [
            'title' => 'Tambah Barang',
        ]);
    }

    public function post(){
        $barang = new \App\Models\Barang();
        $data = [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'harga_barang' => $this->request->getPost('harga_barang'),
            'stok_barang' => $this->request->getPost('stok_barang'),
            'satuan_barang' => $this->request->getPost('satuan_barang'),
            'gambar' => 'default.jpg',
        ];
        $barang->insert($data);
        return redirect()->to('/admin/barang');
    }

    public function update_harga(){
        $barang = new \App\Models\Barang();
        $id_barang = $this->request->getPost('id_barang');
        $data = [
            'id_barang' => $id_barang, 
            'nama_barang' => $this->request->getPost('nama_barang'),
            'harga_beli' => $this->request->getPost('harga_beli'),
            'harga_jual' => $this->request->getPost('harga_jual'),
        ];
        $barang->save($data);
        return redirect()->to('/admin/barang')->with('success', 'Data berhasil diupdate');
    }

    public function edit($id){
        $barang = new \App\Models\Barang();
        $data = $barang->where(
            'id_barang' , $id
        )->first();
        return view('dashboard/edit_barang', [
            'title' => 'Edit Barang',
            'data' => $data,
        ]);
    }

    public function delete($id){
        $barang = new \App\Models\Barang();
        $barang->delete($id);
        return redirect()->to('/admin/barang');
    }
}
