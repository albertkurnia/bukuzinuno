<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\TpLagu;

class LaguController extends CustomController
{

	private $list_lagu = "daftar_lagu";
	
	public function index() {
		try {
			$data = TpLagu::with('lirik')->get();
			return view($this->list_lagu, ['data' => $data]);
		} catch(\Exception $e) {
			if($e instanceof ModelNotFoundException) {
				return response()->json($this->message['NOT_FOUND'], $this->status['NOT_FOUND']);
			} else {
				return response()->json($e->getMessage(), $this->status['INTERNAL_SERVER_ERROR']);
			}
		}

	}

	public function show($nomor) {
		(int) $param = e($nomor);
		try {
			return TpLagu::where('nomor', $param)->with('lirik')->first();
		} catch(\Exception $e) {
			if($e instanceof ModelNotFoundException) {
				return response()->json($this->message['NOT_FOUND'], $this->status['NOT_FOUND']);
			} else {
				return response()->json($e->getMessage(), $this->status['NOT_FOUND']);
			}
		}
	}

	public function store(Request $request) {
		try {
			$o = new TpLagu;
			$o->nomor = $request->input('nomor');
			$o->judul = $request->input('judul');
			$o->lala_note = $request->input('lalaNote');
			$o->info_nada = $request->input('infoNada');
			$o->created_at = date('Y-m-d H:i:s');
			$o->created_by = $request->input('createdBy');
			$o->save();
			return response()->json($this->message['OK'], $this->status['OK']);
		} catch(QueryException $e) {
			return response()->json($e->getMessage(), $this->status['SERVER_INTERNAL_ERROR']);
		}
	}

	public function update(Request $request, $nomor) {
		(int) $param = e($nomor);
		try {
			$o = TpLagu::findOrFail($param);
			$o->judul = $request->input('judul');
			$o->lala_note = $request->input('lalaNote');
			$o->info_nada = $request->input('infoNada');
			$o->updated_at = date('Y-m-d H:i:s');
			$o->updated_by = $request->input('updatedBy');
			$o->save();
			return response()->json($this->message['OK'], $this->status['OK']);
		} catch(QueryException $e) {
			return response()->json($e->getMessage(), $this->status['SERVER_INTERNAL_ERROR']);
		}
	}

	public function destroy($nomor) {
		(int) $param = e($nomor);
		try {
			TpLagu::findOrFail($param)->delete();
			return response()->json($this->message['OK'], $this->status['OK']);
		} catch(QueryException $e) {
			return response()->json($e->getMessage(), $this->status['SERVER_INTERNAL_ERROR']);
		}
	}

	public function cari($cari) {
		try {
			return TpLagu::where('nomor', 'like', '%'.$cari.'%')->orWhere('judul', 'like', '%'.$cari.'%')->get();
		} catch(\Exception $e) {
			if($e instanceof ModelNotFoundException) {
				return response()->json($this->message['NOT_FOUND'], $this->status['NOT_FOUND']);
			} else {
				return response()->json($e->getMessage(), $this->status['NOT_FOUND']);
			}
		}
		
	}

}
