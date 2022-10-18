<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JadwalPiket extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'senin' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'selasa' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'rabu' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'kamis' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'jumat' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'lab' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('jadwalPiket');
    }

    public function down()
    {
        $this->forge->dropTable('jadwalPiket');
    }
}
