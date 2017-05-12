<?php

namespace App\Http\Controllers;

class CustomController extends Controller implements \ArrayAccess 
{
	public $status = array();

	public function __construct() {
		$this->status = array(
			'OK' => 200,
			'NOT_FOUND' => 404,
			'INTERNAL_SERVER_ERROR' => 500,
			);
	}

	public function offsetSet($offset, $value) {
		if (is_null($offset)) {
			$this->status[] = $value;
		} else {
			$this->status[$offset] = $value;
		}
	}

	public function offsetExists($offset) {
		return isset($this->status[$offset]);
	}

	public function offsetUnset($offset) {
		unset($this->status[$offset]);
	}

	public function offsetGet($offset) {
		return isset($this->status[$offset]) ? $this->status[$offset] : null;
	}
}
