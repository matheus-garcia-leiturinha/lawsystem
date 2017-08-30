<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepositoProcesso extends Model
{
    //

    protected $table = 'deposito_processo';


    public function processo() {
        return $this->hasOne('App\Processos','id','processo_id');
    }
    public function deposito() {
        return $this->hasOne('App\Deposito','id','deposito_id');
    }
}
