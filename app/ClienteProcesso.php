<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteProcesso extends Model
{
    //
    protected $table = 'cliente_processo';

    public function processo() {
        return $this->hasOne('App\Processos','id','processo_id');
    }
    public function cliente() {
        return $this->hasOne('App\Clientes','id','cliente_id');
    }
}
