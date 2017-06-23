<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Tplagu;
use DB;

class SearchController extends CustomController
{

  private $search_result = "search_result";
  private $search_form = "welcome";

  public function index(Request $request) {
    $input = Input::all();
    $data = [];
    if(!isset($input['q'])) {
      //do nothing
    } else {
      $cari = e($input['q']);
      $data = DB::table("tp_lagu as lg")
      ->select('lg.id_lagu', 'lg.nomor', 'lg.judul', 'lg.lala_note', 'lr.lirik')
      ->join('tp_lirik as lr', function($join) {
        $join->on('lr.nomor', '=', 'lg.nomor');
        $join->on('lr.ayat', '=', DB::raw(1));
      })
      ->where('lg.nomor', 'like', '%'.$cari.'%')
      ->orWhere('lg.judul', 'like', '%'.$cari.'%')->get();
    }
    return view($this->search_result, ['data' => $data, 'input' => $request->only('q')]);
  }

  public function cari() {
    return view($this->search_form);
  }
}