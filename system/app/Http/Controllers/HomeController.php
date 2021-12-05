<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

	function showBeranda(){
		return view('admin.beranda');
	}

	function showProduk(){
		return view('admin.produk.index');
	}

	function showKategori(){
		return view('admin.kategori.index');
	}

	function showProfil(){
		return view('admin.profil.index');
	}

	function test($produk, $hargaMin = 0, $hargaMax = 0){
		if($produk == 'fashion'){
			echo "Tampilkan Produk fashion";
		}elseif($produk == 'electronic'){
			echo "Produk electronic";
		}
		echo "<br>";
		echo "Harga Min adalah $hargaMin <br>" ;
		echo "Harga Max adalah $hargaMax <br>" ;
	}

}
