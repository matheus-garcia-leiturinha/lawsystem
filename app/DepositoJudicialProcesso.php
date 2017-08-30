<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepositoJudicialProcesso extends Model
{
    //
    protected $table = 'deposito_judicial_processo';

    public function processo() {
        return $this->hasOne('App\Processos','id','processo_id');
    }

    public function deposito_judicial() {
        return $this->hasOne('App\DepositoJudicial','id','deposito_judicial_id');
    }
}
