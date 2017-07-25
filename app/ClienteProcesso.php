<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteProcesso extends Model
{
    //
    protected $table = 'cliente_processo';

    public function processos() {
        return $this->BelongsTo('App\Processos','processo_id','id');
    }
    public function clientes() {
        return $this->BelongsTo('App\Clientes','cliente_id','id');
    }
}
