<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Stok extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $db = \Config\Database::connect();
        
        // Subquery to get item_id from inventory
        $subquery = $db->table('stoks')->select('id_barang');

        // Query to get items not in inventory
        $builder = $db->table('barangs');
        // $builder->whereNotIn('id_barang', $subquery);
        $query = $builder->get();
        $data = $query->getResultArray();

        return view('dashboard/tambah_stok', [
            'title' => 'Tambah Barang',
            'data' => $data,
        ]);
    }

    public function post()
    {
        $barang = new \App\Models\Barang();
        $stok = new \App\Models\Stok();

        $idBarang = $this->request->getPost('id_barang');
        $kuantitas = $this->request->getPost('kuantitas');
        $satuanBarang = $this->request->getPost('satuan_barang');
        $keterangan = $this->request->getPost('keterangan');


        $data_stok = [
            'id_barang' => $idBarang,
            'kuantitas' => $kuantitas,
            'satuan_barang' => $satuanBarang,
            'keterangan' => $keterangan,
            'tanggal_masuk' => date('Y-m-d H:i:s'),
        ];

        $data = $barang->where('id_barang', $idBarang)->first();

        if ($data) {
            $data['stok'] = $data['stok'] + $kuantitas;
            $stok->save($data_stok);
            $barang->update($data['id_barang'], $data);
        } else {
            $stok->save($data_stok);
        }

        return redirect()->to('/admin/kelola_stok')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $stok = new \App\Models\Stok();
        $barang = new \App\Models\Barang();
        $data = null;
        
        $data = $stok->join('barangs', 'barangs.id_barang = stoks.id_barang')->where(
            'id_stok', $id
        )->first();

        if(!$data){
            $data = $stok->find($id);
        }

        return view('dashboard/edit_stok', [
            'title' => 'Edit Barang',
            'data' => $data,
        ]);
    }

    public function update()
    {
        $stok = new \App\Models\Stok();
        $barang = new \App\Models\Barang();
        $data = [
            'id_stok' => $this->request->getPost('id_stok'),
            'id_barang' => $this->request->getPost('id_barang'),
            'kuantitas' => $this->request->getPost('kuantitas'),
            'satuan_barang' => $this->request->getPost('satuan_barang'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];

        //update stok in barang table
        $data_barang = $barang->find($this->request->getPost('id_barang'));
        $data_barang['stok'] = $data_barang['stok'] + $this->request->getPost('kuantitas');
        $barang->save($data_barang);
        
        $stok->save($data);
        return redirect()->to('/admin/kelola_stok')->with('success', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $stok = new \App\Models\Stok();
        $stok->delete($id);
        return redirect()->to('/admin/kelola_stok')->with('success', 'Data berhasil dihapus');
    }
}
