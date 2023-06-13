<?php
namespace App\models\Traits\Relations;

use App\Models\User;

trait ProdukRelations {
	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}
    
}