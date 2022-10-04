<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jadwal extends Migration
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
            'jam' => [
                'type'      => 'VARCHAR',
                'constraint' => '15',
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
        ]);
    }

    public function down()
    {
        
    }
}
