<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PericiaProcesso extends Model
{
    //

    protected $table = 'pericia_processo';


    public function processos() {
        return $this->BelongsTo('App\Processos','processo_id','id');
    }
    public function pericias() {
        return $this->BelongsTo('App\Pericias','pericia_id','id');
    }

}
