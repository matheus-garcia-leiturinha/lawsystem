<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProcesso extends Model
{
    //

    protected $table = 'pedidos_processo';


    public function processo() {
        return $this->hasOne('App\Processos','id','processo_id');
    }
    public function pedido() {
        return $this->hasOne('App\Pedidos','id','pedido_id');
    }
}
