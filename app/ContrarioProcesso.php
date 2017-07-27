<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContrarioProcesso extends Model
{
    //
    protected $table = 'contrario_processo';

    public function processos() {
        return $this->BelongsTo('App\Processos','processo_id','id');
    }
    public function clientes() {
        return $this->BelongsTo('App\Clientes','contrario_id','id');
    }
}
