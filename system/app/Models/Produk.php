<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\str;

class Produk extends Model {
	protected $table = 'Produk';

	protected $casts = [
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
		'harga' => 'decimal:2'
	];

	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}

	function getHargaStringAttribute(){
		return "Rp. ".number_format($this->attributes['harga']);
	}


	function handleUploadFoto(){
     	// $this->handleDelete();
        if(request()->hasFile('foto')){
            $foto = request()->file('foto');
            $destination = "image/produk";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/".$url;
            $this->save();
		}
	}
}