<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semillero extends Model
{
    public function noticia()
    {
        return $this->belongsTo('App\noticia','idSemillero');
    }
}
