<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_barang' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_barang' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'harga_beli' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'harga_jual' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'stok' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
        ]);

        $this->forge->addKey('id_barang', true);
        $this->forge->createTable('barangs');
    }

    public function down()
    {
        $this->forge->dropTable('barangs');
    }
}
