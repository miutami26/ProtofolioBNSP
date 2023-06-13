<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Relations\ProdukRelations;
use App\Models\Traits\Attributes\ProdukAttributes;

class  Produk Extends Model{
	use ProdukAttributes, ProdukRelations;
	protected $table = 'produk';

     protected $fillable = [
     'Nama_produk',
     'Berat',
     'status',
     'Harga',
     'warna',
     'Stok',
     'deskripsi',
     'foto',
     ];

	protected $casts = [
		'created_at' => 'datetime',
		// 'Berat' => 'decimal:2'

	];

}