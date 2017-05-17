<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\TpLagu;
use App\TpLirik;
use DB;

class LirikController extends CustomController
{
	public function showAllLyric($nomor) {
		(int) $param = e($nomor); 

		if(TpLagu::where('nomor', $param)->count() > 0 ) {
			try {
				$lirik = TpLirik::where('nomor', $param)->get();
				return $lirik;
			} catch(\Exception $e) {
				if($e instanceof ModelNotFoundException) {
					return response()->json($this->message['NOT_FOUND'], $this->status['NOT_FOUND']);
				} else {
					return response()->json($e->getMessage(), $this->status['INTERNAL_SERVER_ERROR']);
				}
			}
		} else {
			return response()->json($this->message['NOT_FOUND'], $this->status['NOT_FOUND']);
		}
	}

	public function show($nomor, $ayat) {
		(int) $paramNomor = e($nomor); 
		(int) $paramAyat = e($ayat); 

		if((TpLagu::where('nomor', $paramNomor)->count() > 0 ) && (TpLirik::where('nomor', $paramNomor)->where('urut_ayat', $paramAyat)->count() > 0 )) {
			try {
				$lirik = TpLirik::where('nomor', $paramNomor)->where('urut_ayat', $paramAyat)->first();
				return $lirik;
			} catch(\Exception $e) {
				if($e instanceof ModelNotFoundException) {
					return response()->json($this->message['NOT_FOUND'], $this->status['NOT_FOUND']);
				} else {
					return response()->json($e->getMessage(), $this->status['INTERNAL_SERVER_ERROR']);
				}
			}
		} else {
			return response()->json($this->message['NOT_FOUND'], $this->status['NOT_FOUND']);
		}
	}


	public function store(Request $request, $nomor) {
		(int) $param = e($nomor);

		if(TpLagu::where('nomor', $param)->count() > 0) {
			try {
				$o = new TpLirik;
				$o->nomor = $param;
				$o->urut_ayat = $request->input('urutAyat');
				$o->lirik = $request->input('lirik');				
				$o->created_at = date('Y-m-d H:i:s');
				$o->created_by = $request->input('createdBy');
				$o->save();
				return response()->json($this->message['OK'], $this->status['OK']);
			} catch(\Exception $e) {
				return response()->json($e->getMessage(), $this->status['SERVER_INTERNAL_ERROR']);
			}
		}
	}

	public function update(Request $request, $nomor, $ayat) {
		(int) $paramNomor = e($nomor);
		(int) $paramAyat = e($ayat);

		if((TpLagu::where('nomor', $paramNomor)->count() > 0 ) && (TpLirik::where('nomor', $paramNomor)->where('urut_ayat', $paramAyat)->count() > 0)){
			try {
				$o = TpLirik::where('nomor', $paramNomor)->where('urut_ayat', $paramAyat)->first();
				$o->lirik = $request->input('lirik');
				$o->updated_at = date('Y-m-d H:i:s');
				$o->updated_by = $request->input('updatedBy');
				$o->save();
				return response()->json($this->message['OK'], $this->status['OK']);
			} catch(\Exception $e) {
				return response()->json($e->getMessage(), $this->status['SERVER_INTERNAL_ERROR']);
			}
		} else {
			return response()->json($this->message['NOT_FOUND'], $this->status['NOT_FOUND']);			
		}
	}

	public function destroy($nomor, $ayat) {
		(int) $paramNomor = e($nomor);
		(int) $paramAyat = e($ayat);

		if((TpLagu::where('nomor', $paramNomor)->count() > 0 ) && (TpLirik::where('nomor', $paramNomor)->where('urut_ayat', $paramAyat)->count() > 0)){
			try {
				TpLirik::where('nomor', $paramNomor)->where('urut_ayat', $paramAyat)->delete();
				return response()->json($this->message['OK'], $this->status['OK']);
			} catch(\Exception $e) {
				return response()->json($e->getMessage(), $this->status['SERVER_INTERNAL_ERROR']);
			}
		} else {
			return response()->json($this->message['NOT_FOUND'], $this->status['NOT_FOUND']);			
		}
	}

	public function ayatsuggest($nomor) {
		$data = TpLirik::where('nomor', $nomor)->select(app('db')->raw('max(urut_ayat)+1 as suggest'))->first()->suggest;
		return $data == null ? 1 : $data;
	}

}
