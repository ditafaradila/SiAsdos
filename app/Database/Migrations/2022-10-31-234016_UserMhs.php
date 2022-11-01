<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserMhs extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'npm'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '15',
			],
			'password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '8',
			],
            'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
            'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '25',
			],
            'prodi'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '30',
			],
            'tahun_kurikulum'       => [
				'type'           => 'INT',
				'constraint'     => '4',
			],
            'status'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '15',
			],
            'jk'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '15',
			],
            'tempatlahir'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '30',
			],
            'tanggallahir'       => [
				'type'           => 'DATE',
			],
            'alamat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
		]);
		$this->forge->addPrimaryKey('npm', true);
		$this->forge->createTable('user_asdos');
    }

    public function down()
    {
        $this->forge->dropTable('user_mhs');
    }
}
