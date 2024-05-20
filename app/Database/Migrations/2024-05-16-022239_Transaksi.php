<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_transaksi' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
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
            'nominal' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'tanggal_transaksi' => [
                'type' => 'DATETIME',
            ],
        ]);

        $this->forge->addKey('id_transaksi', true);
        $this->forge->addForeignKey('id_barang', 'barangs', 'id_barang');
        $this->forge->addForeignKey('id_user', 'users', 'id_user');
        $this->forge->createTable('transaksis');
    }

    public function down()
    {
        $this->forge->dropTable('transaksis');
    }
}
