<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    //

    protected $table = 'clientes';

    protected $fillable = [
        'razao_social', 'logradouro', 'numero', 'cidade', 'estado', 'caixa_postal', 'document_id', 'banco', 'agencia', 'conta',
    ];

    protected $primaryKey = 'id';

    public function documents() {
        return $this->hasOne('App\Documents','id','document_id');
    }
}
