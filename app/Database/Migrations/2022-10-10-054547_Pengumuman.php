<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengumuman extends Migration
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
            'nama' => [
                'type'      => 'VARCHAR',
                'constraint' => '50',
            ],
            'npm' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'mk' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ]
        ]);
    }

    public function down()
    {
        //
    }
}
