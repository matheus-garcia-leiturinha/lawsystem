<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProcesso extends Model
{
    //

    protected $table = 'pedidos_processo';


    public function processos() {
        return $this->BelongsTo('App\Processos','processo_id','id');
    }
    public function pericias() {
        return $this->BelongsTo('App\Pedido','pedido_id','id');
    }
}
