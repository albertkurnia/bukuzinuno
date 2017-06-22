<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tplagu;

class SearchController extends CustomController
{

	private $search_result = "search_result";
	private $search_form = "welcome";

    public function index(Request $request) {
    	if(property_exists($request, 'q'))
	    	$cari = e($request->q);
	    else
	    	$cari = '';
	    	
    	$data = TpLagu::select('*')
    	->join('tp_lirik as l', 'l.nomor', 'tp_lagu.nomor')
    	->where('tp_lagu.nomor', 'like', '%'.$cari.'%')->orWhere('tp_lagu.judul', 'like', '%'.$cari.'%')->get();
    	return view($this->search_result, ['data' => $data, 'input' => $request->only('q')]);
    }

    public function cari() {
    	return view($this->search_form);
    }
}
