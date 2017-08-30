<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processos extends Model
{
    //
    public function pivot() {

        return $this->belongsToMany('App\ClienteProcesso', 'processo_id', 'id');

    }
}
