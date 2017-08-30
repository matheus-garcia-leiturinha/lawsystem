<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProcesso extends Model
{
    //

    protected $table = 'pedidos_processo';


    public function processos() {
        return $this->BelongsTo('App\Processos','id','processo_id');
    }
    public function pedido() {
        return $this->BelongsTo('App\Pedido','id','pedido_id');
    }
}
