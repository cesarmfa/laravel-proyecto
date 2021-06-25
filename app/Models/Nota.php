<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    public function seccion(){
        return $this->belongsTo('App\Models\Seccion');
    }

    public function tipodocumento(){
        return $this->belongsTo('App\Models\TipoDocumento');
    }
}
