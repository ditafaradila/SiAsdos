<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Absenmahasiswa extends Migration
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
            'namaMhs' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'npmMhs' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'mata_kuliah' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'ruang' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'kelas' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'hari' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'jam_masuk' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'semester' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('absenmahasiswa');
    }

    public function down()
    {
        //
    }
}
