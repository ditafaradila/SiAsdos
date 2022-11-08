<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kurikulum extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
            ],
            'kurikulum' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],


        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('kurikuluma');
    }

    public function down()
    {
        $this->forge->dropTable('kurikuluma');
    }
}
