<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrario extends Model
{
    //

    protected $table = 'contrario';

    protected $primaryKey = 'id';

    public function documents() {
        return $this->hasOne('App\Documents','id','document_id');
    }
}
