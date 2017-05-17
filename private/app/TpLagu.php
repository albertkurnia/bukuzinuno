<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Tplagu extends Model
{
	protected $table = 'tp_lagu';
	protected $primaryKey = 'nomor';
	public $increments = false;
	
	protected $fillable = [
		'nomor', 'judul', 'lala_note', 'info_nada', //'created_by'
	];

	protected $hidden = [
		'created_by', 'created_at', 'updated_by', 'updated_at', 
	];

	public function lirik() {
		return $this->hasMany('App\TpLirik', 'nomor', 'nomor');
	}
}