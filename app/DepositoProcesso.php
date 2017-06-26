<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepositoProcesso extends Model
{
    //

    protected $table = 'deposito_processo';


    public function processos() {
        return $this->BelongsTo('App\Processos','processo_id','id');
    }
    public function depositos() {
        return $this->BelongsTo('App\Deposito','deposito_id','id');
    }
}
