<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class ProdukController extends Controller {
	function index(){
		$user = request()->user();
		$data['list_produk'] = $user->produk;
		return view('admin.produk.index', $data);

	}
	function create(){
		return view('admin.produk.create');

	}
	function store(){

		$produk = new Produk;
		$produk->id_user = request()->user()->id;
		$produk->Nama = request('nama');
		$produk->Harga = request('harga');
		$produk->Stok = request('stok');
		$produk->Detail = request('detail');
		$produk->save();

		$produk->handleUploadFoto();

		return redirect('admin/produk')->with('success', 'Data Berhasil Ditambahkan');

	}
	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('admin.produk.show', $data);

	}
	function edit(Produk $produk){
		$data['produk'] = $produk;
		return view('admin.produk.edit', $data);

	}
	function update(Produk $produk){
		$produk->Nama = request('nama');
		// $produk->foto = request('foto');
		$produk->Harga = request('harga');
		$produk->Stok = request('stok');
		$produk->Detail = request('detail');
		$produk->save();

		$produk->handleUploadFoto();

		return redirect('admin/produk')->with('success', 'Data Berhasil Diedit');

	}
	function destroy(Produk $produk){
		$produk->handleDelete();
		$produk->delete();
		return redirect('admin/produk')->with('danger', 'Data Berhasil Dihapus');
	}

	function filter(){
		$nama = request('nama');
		$stok = explode(",", request('stok'));
		$harga_min = request('harga_min');
		$harga_max = request('harga_max');
		$data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
		// $data['list_produk'] = Produk::whereIn('stok', $stok)->get();
		// $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
		// $data['list_produk'] = Produk::where('stok', '<>', $stok)->get();
		// $data['list_produk'] = Produk::whereNotIn('stok', $stok)->get();
		// $data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->get();
		// $data['list_produk'] = Produk::whereNull('stok')->get();
		// $data['list_produk'] = Produk::whereNotNull('stok')->get();
		// $data['list_produk'] = Produk::whereDate('created_at', '2021-10-25')->get();
		// $data['list_produk'] = Produk::whereYear('created_at', '2020')->get();
		// $data['list_produk'] = Produk::whereMonth('created_at', '10')->whereYear('created_at', '2021')->get();
		// $data['list_produk'] = Produk::whereTime('created_at', '11:11:14')->get();
		// $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->whereYear('created_at', '2021')->get();
		// $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->whereNotIn('stok', [2])->whereYear('created_at', '2021')->get();

		$data['nama'] = $nama;
		$data['stok'] = request('stok');


		return view('admin.produk.index', $data);
	}

}