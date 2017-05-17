<?php

namespace App\Http\Controllers;

class CustomController extends Controller
{
	public $status = array();
	public $message = array();

	public function __construct() {
		$this->status = array(
			'OK' => 200,
			'NOT_FOUND' => 404,
			'INTERNAL_SERVER_ERROR' => 500,
			);

		$this->message = array(
			'OK' => 'OK',
			'NOT_FOUND' => 'Not Found',
			'INTERNAL_SERVER_ERROR' => 'Internal Server Error',
			);
	}
}
