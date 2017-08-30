<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecolhimentoProcesso extends Model
{
    //
    protected $table = 'recolhimento_processo';


    public function processo() {
        return $this->hasOne('App\Processos','id','processo_id');
    }
    public function recolhimento() {
        return $this->hasOne('App\Recolhimento','id','recolhimento_id');
    }

}
