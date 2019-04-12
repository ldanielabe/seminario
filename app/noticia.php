<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noticia extends Model {
	public $timestamps = false;

	public function semillero()
    {
        return $this->belongsTo('App\Semillero','id');
	}
	
}


