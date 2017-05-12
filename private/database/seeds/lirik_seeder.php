<?php

use Illuminate\Database\Seeder;

class lirik_seeder extends Seeder
{
	private $table = "tp_lirik";

    public function run()
    {
        DB::table($this->table)
		->insert([
			'nomor' => 1,
			'urut_ayat' => 1,
			'lirik' => "No mafondrondrongo li-U, Lowalangi, So'aya,\n tano ba dodoma Ia, faboi olifuga.\n Fahowu'o ia khoma, ena'o ohahau dodoma fefu, Heta ba dodo zilosokhi, ma'o'o niwa'ou.",
			'created_by' => 'Harapan',			
			]);
    }
}
