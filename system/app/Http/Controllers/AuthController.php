<?php

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller
{
	function showlogin(){
		return view('login');
	}

	function LoginProcess(){
		if(Auth::attempt(['email' => Request('email'), 'password' => Request('password')])){
			return redirect('admin/beranda')->with('success', 'Login Berhasil');
		}else{
			return back()->with('danger', 'Login Gagal, Silahkan cek email dan password anda');
		}
	}

	function Logout(){
		Auth::Logout();
		return redirect('admin/beranda');
	}

	function registration(){
		return view();
	}

	function forgotpassword(){
		return view();
	}

}