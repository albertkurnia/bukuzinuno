<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Tplagu;

class LaguController extends CustomController
{
	public function index() {
		return Tplagu::all();
	}

	public function show($nomor) {
		(int) $param = e($nomor);
		try {
			return Tplagu::findOrFail($param);
		} catch(\Exception $e) {
			if($e instanceof ModelNotFoundException) {
				return response()->json("Data tidak ditemukan", $this->status['NOT_FOUND']);
			} else {
				return response()->json($e->getMessage(), $this->status['NOT_FOUND']);
			}
		}
	}

	public function store(Request $request) {
		try {
			$o = new Tplagu;
			$o->nomor = $request->input('nomor');
			$o->judul = $request->input('judul');
			$o->lala_note = $request->input('lalaNote');
			$o->info_nada = $request->input('infoNada');
			$o->created_by = $request->input('createdBy');
			$o->save();
			return response()->json(true, $this->status['OK']);
		} catch(QueryException $e) {
			return response()->json($e->getMessage(), $this->status['SERVER_INTERNAL_ERROR']);
		}
	}

	public function update(Request $request, $nomor) {
		(int) $param = e($nomor);
		try {
			$o = Tplagu::findOrFail($param);
			$o->judul = $request->input('judul');
			$o->lala_note = $request->input('lalaNote');
			$o->info_nada = $request->input('infoNada');
			$o->updated_by = $request->input('updatedBy');
			$o->save();
			return response()->json(true, $this->status['OK']);
		} catch(QueryException $e) {
			return response()->json($e->getMessage(), $this->status['SERVER_INTERNAL_ERROR']);
		}
	}

	public function destroy($nomor) {
		(int) $param = e($nomor);
		try {
			Tplagu::findOrFail($param)->delete();
			return response()->json(true, $this->status['OK']);
		} catch(QueryException $e) {
			return response()->json($e->getMessage(), $this->status['SERVER_INTERNAL_ERROR']);
		}
	}

}
