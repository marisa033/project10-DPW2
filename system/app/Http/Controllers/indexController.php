<?php

namespace App\Http\Controllers;

class indexController extends Controller{

	function showindex(){
		return view('index');
	}

	function showFashion(){
		return view('fashion');
	}

	function showElectronic(){
		return view('electronic');
	}

	function showJewellery(){
		return view('jewellery');
	}

	function showKeranjang(){
		return view('keranjang');
	}

	function showDetail(){
		return view('detail');
	}
}