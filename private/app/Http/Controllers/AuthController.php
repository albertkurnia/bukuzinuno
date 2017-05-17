<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\TpLagu;
use App\TpLirik;
use Auth;

class AuthController extends CustomController
{	
	public function doLogin(Request $request) {
		if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
			if(!Auth::user()->row_status) {
				Log::info("User \"".Auth::user()->username."\" dicegah saat masuk ke dalam aplikasi (karena sudah dinonaktifkan) pada ".Date('Y-m-d H:i:s'));
				Auth::logout();
				Session::flash('banned', true);
				return redirect($this->loginPath);
			}
			return redirect()->intended('/');
		} 
		Session::flash('errors', true);
		return redirect($this->loginPath);
	}
}