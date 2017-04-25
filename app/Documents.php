<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    //

    protected $table = 'documents';

    protected $primaryKey = 'id';


    public function clients() {
        return $this->BelongsTo('App\Clientes','document_id','id');
    }
}
