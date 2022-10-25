<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Materi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'namate' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'matkul' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'pertemuan' => [
                'type' => 'INT',
                'constraint' => '2',
            ],
            'semester' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'berkas' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('materi');
    }

    public function down()
    {
        //
    }
}
