<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContrarioProcesso extends Model
{
    //
    protected $table = 'contrario_processo';

    public function processo() {
        return $this->hasOne('App\Processos','id','processo_id');
    }
    public function contrario() {
        return $this->hasOne('App\Contrario','id','contrario_id');
    }
}
