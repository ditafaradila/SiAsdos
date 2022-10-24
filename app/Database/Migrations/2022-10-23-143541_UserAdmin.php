<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserAdmin extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'username'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '15',
			],
			'password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '8',
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			]
 
		]);
		$this->forge->addPrimaryKey('username', true);
		$this->forge->createTable('user_admin');
    }

    public function down()
    {
        $this->forge->dropTable('user_admin');
    }
}
