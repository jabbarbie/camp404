<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableSiswa extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true
			],
			'nis' => [
				'type' => 'VARCHAR',
				'constraint' => 8
			],	
			'nama' => [
				'type' => 'VARCHAR',
				'constraint' => 50
			],					
			'tgl_lahir' => [
				'type' => 'DATE'
			]
		]);
		//

		$this->forge->addKey('id');
		$this->forge->addUniqueKey('nis');
		$this->forge->createTable('siswa');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('siswa');
		
	}
}
