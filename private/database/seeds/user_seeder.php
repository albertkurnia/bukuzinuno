<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

class user_seeder extends Seeder
{

	private $table = 'tp_user';

	public function run()
	{
		DB::table($this->table)
		->insert([
			'nama' => 'Harapan Jaya Harefa',
			'email' => 'niasharapan@gmail.com',
			'password' => Hash::make('admin123'),
			'role' => 1,
			'row_status' => 1,
			'created_at' => date('Y-m-d H:i:s'),
			'created_by' => 'Harapan',
			]);
	}
}
