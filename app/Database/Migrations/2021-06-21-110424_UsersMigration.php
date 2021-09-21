<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsersMigration extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'username'		=> ['type' => 'varchar', 'constraint' => 100],
			'email'			=> ['type' => 'varchar', 'constraint' => 120],
			'password'		=> ['type' => 'varchar', 'constraint' => 120],
			'name'			=> ['type' => 'varchar', 'constraint' => 120],
		]);

		$this->forge->addKey('username', true );
		$this->forge->createTable('tb_users');
	}

	public function down()
	{
		$this->forge->dropTable('tb_users');
	}
}
