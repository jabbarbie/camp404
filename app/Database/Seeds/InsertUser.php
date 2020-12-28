<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertUser extends Seeder
{
	public function run()
	{
		//
		$data = [
			'nama' => 'Administrator',
			'email' => 'admnin@camp404.com',
			'password' => password_hash('admin000', PASSWORD_BCRYPT),
			'role' => 'admin'
		];
		$this->db->table('users')->insert($data);
	}
}
