<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Absen extends Migration
{
    public function up()
    {

        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'npm_asdos' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
            ],
            'mata_kuliah' => [
                'type' => 'VARCHAR',
                'constraint' => '40',
            ],
            'ruang' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'kelas_praktikan' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'hari' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'jam_masuk' => [
                'type' => 'TIME',
                'constraint' => 'true',
            ],
            'kondisi_lab' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('absen');
    }

    public function down()
    {
        $this->forge->dropTable('absen');
    }
}
