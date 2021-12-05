<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserDetail;

class UserController extends Controller {
	function index(){
		$data['list_user'] = User::withCount('produk')->get();
		// $data['list_user'] = User::has('produk', '>=', '2')->get();
		return view('admin.user.index', $data);

	}
	function create(){
		return view('admin.user.create');

	}
	function store(){
		$user = new User;
		$user->nama = request('nama');
		$user->username = request('username');
		$user->email = request('email');
		$user->password = request('password');
		$user->jenis_kelamin = 1;
		$user->save();

		$userDetail = new UserDetail;
		$userDetail->id_user = $user->id;
		$userDetail->no_handphone = request('no_handphone');
		$userDetail->save();

		return redirect('admin/user')->with('success', 'Data Berhasil Ditambahkan');

	}
	function show(User $user){
		$data['user'] = $user;
		return view('admin.user.show', $data);

	}
	function edit(User $user){
		$data['user'] = $user;
		return view('admin.user.edit', $data);

	}
	function update(User $user){
		$user->nama = request('nama');
		$user->username = request('username');
		$user->email = request('email');
		if(request('password')) $user->password = request('password');
		$user->save();

		$userDetail = new UserDetail;
		$userDetail->id_user = $user->id;
		$userDetail->no_handphone = request('no_handphone');
		$userDetail->save();

		return redirect('admin/user')->with('success', 'Data Berhasil Diedit');

	}
	function destroy(User $user){
		$user->delete();

		return redirect('admin/user')->with('danger', 'Data Berhasil Dihapus');
	}

}