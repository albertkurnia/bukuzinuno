<?php

use Illuminate\Database\Seeder;

class lagu_seeder extends Seeder
{
	private $table = "tp_lagu";

	public function run()
	{
		DB::table($this->table)
		->insert([
			'nomor' => 1,
			'judul' => "No mafondrondrongo li-U",
			'lala_note' => "No mafondrondrongo li-U",
			'info_nada' => "4/4 C=do",
			'created_by' => 'Harapan',			
			]);
	}
}
