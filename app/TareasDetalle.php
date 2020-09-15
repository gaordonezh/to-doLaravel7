<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TareasDetalle extends Model
{
    public function tareas(){
        return $this->belongsTo('App\Tareas');
    }
}
