<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableUsers extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true
			],
			'nama' => [
				'type' => 'VARCHAR',
				'constraint' => 50
			],	
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => 50
			],					
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => 200
			],
			'role' => [
				'type' => 'VARCHAR',
				'constraint' => 10
			]
		]);
		//

	$this->forge->addKey('id');
	$this->forge->addUniqueKey('email');
	$this->forge->createTable('users');
	}


	//--------------------------------------------------------------------

	public function down()
	{
		//
		$this->forge->dropTable('users');
	}
}
