<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdvogadoParcipanteProcesso extends Model
{
    //
    protected $table = 'advogado_participante_processo';


    public function processo() {
        return $this->hasOne('App\Processos','id','processo_id');
    }
    public function advogado() {
        return $this->hasOne('App\Advogados','id','advogado_id');
    }
}
