<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PericiaProcesso extends Model
{
    //

    protected $table = 'pericia_processo';


    public function processo() {
        return $this->hasOne('App\Processos','id','processo_id');
    }
    public function pericia() {
        return $this->hasOne('App\Pericia','id','pericia_id');
    }

}
