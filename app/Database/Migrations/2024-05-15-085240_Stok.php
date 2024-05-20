<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Stok extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_stok' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_barang' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'kuantitas' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'satuan_barang' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'keterangan' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'tanggal_masuk' => [
                'type' => 'DATETIME',
            ],
        ]);

        $this->forge->addKey('id_stok', true);
        $this->forge->addForeignKey('id_barang', 'barangs', 'id_barang');
        
        $this->forge->createTable('stoks');
    }

    public function down()
    {
        $this->forge->dropTable('stoks');
    }
}
