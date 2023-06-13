<?php
namespace App\Models\Traits\Attributes;
use Illuminate\support\str;
use Illuminate\Support\Facades\Storage;

trait ProdukAttributes {
	// function getHargaAttribute(){
	// 	return "Rp. ".number_format($this->attributes['Harga']);
	// }
	// function handleUploadFoto(){
	// 	if(request()->hasFile('foto')){
	// 		$foto = request()->file('foto');
	// 		$destination = "images/produk";
	// 		$randomStr = Str::random(5);
	// 		$filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
	// 		$url = $foto->storeAs($destination, $filename);
	// 		$this->foto = "App/".$url;
	// 		$this->save();

	// 	}
	// }
   function handleUploadFoto()
   {
   if (request()->hasFile('foto')) {
   $foto = request()->file('foto');
   $destination = "images/produk";
   $randomStr = Str::random(5);
   $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $foto->extension();

    $url = $foto->storeAs($destination, $filename);
   $this->foto = "storage/" . $url;
   $this->save();
   }
   }

   function handleDelete()
   {
   $foto = $this->foto;
   $path = public_path($foto);

   if (file_exists($path) && is_file($path)) {
   unlink($path);
   return true;
   }

   return false;
   }




	// function handleDelete(){
	// 	$foto = $this->foto;
	// 	$path = public_path("$foto");
	// 	if(file_exists($path)){
	// 		unlink($path);
	// 	}
	// 	return true;
	// }

}
