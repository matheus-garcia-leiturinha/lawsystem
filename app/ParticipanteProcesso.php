<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipanteProcesso extends Model
{
    //
    protected $table = 'participante_processo';

    public function processos() {
        return $this->BelongsTo('App\Processos','processo_id','id');
    }
}