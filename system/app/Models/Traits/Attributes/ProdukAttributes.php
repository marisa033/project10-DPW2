<?php
namespace App\Models\Traits\Attributes;

use Illuminate\Support\Str;
use File;

trait ProdukAttributes {


	function getHargaStringAttribute(){
		return "Rp. ".number_format($this->attributes['harga']);
	}


	function handleUploadFoto(){
     	    $this->handleDelete();
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

    function handleDelete(){
        $foto = $this->foto;
        $path = public_path("$foto");
        if(file_exists($path)){
           File::delete($path);
        }
        return true;
    }
}