<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MK extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'mk' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'nama_mk' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],


        ]);
        $this->forge->addKey('mk', true);
        $this->forge->createTable('matkul');
    }

    public function down()
    {
        $this->forge->dropTable('matkul');
    }
}
