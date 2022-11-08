<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BentukNilai extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                // 'unsigned'       => true,
                'auto_increment' => true,
            ],
            'mk' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'kurikulum' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'npm' => [
                'type' => 'INT',
                'constraint' => '10',
            ],
            'kelas' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'nilai' => [
                'type' => 'INT',
                'constraint' => '10',
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('nilais');
    }

    public function down()
    {
        $this->forge->dropTable('nilais');
    }
}
