<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class TpLirik extends Model
{
	protected $table = 'tp_lirik';
	protected $primaryKey = 'id_lirik';
	protected $fillable = [
		'nomor', 'urut_ayat', 'lirik', 'created_by'
	];

	protected $hidden = [
		'id_lirik', 'created_by', 'created_at', 'updated_by', 'updated_at', 
	];

}