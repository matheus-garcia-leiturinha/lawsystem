<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processos extends Model
{
    //


    public function clients() {
        return $this->BelongsTo('App\Clientes','client_id','id');
    }
}
