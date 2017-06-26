<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecolhimentoProcesso extends Model
{
    //
    protected $table = 'recolhimento_processo';


    public function processos() {
        return $this->BelongsTo('App\Processos','processo_id','id');
    }
    public function recolhimentos() {
        return $this->BelongsTo('App\Recolhimento','recolhimento_id','id');
    }

}
