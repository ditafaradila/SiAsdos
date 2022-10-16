<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PengumumanModel extends Migration
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
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'deskripsi' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => 'true',
            ],
            'update_at' => [
                'type' => 'DATETIME',
                'null' => 'true',
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pengumumanlain');
    }

    public function down()
    {
        $this->forge->dropTable('pengumumanlain');
    }
}
