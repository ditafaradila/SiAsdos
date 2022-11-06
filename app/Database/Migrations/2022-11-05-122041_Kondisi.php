<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kondisi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kondisi' => [
                'type'           => 'VARCHAR',
                'constraint'     => '30',
                'unsigned'       => true,
                'auto_increment' => false,
            ],
            'kondisi' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
        ]);
        $this->forge->addKey('id_kondisi', true);
        $this->forge->createTable('kondisi');
    }

    public function down()
    {
        //
    }
}
