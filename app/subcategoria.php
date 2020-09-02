<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategoria extends Model
{
    //
    public function categoria(){
        return $this->belongsTo(categoria::class, 'id_categorias');
    }
}
