<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    protected $table = "convenio";

    public function tipo_resol()
    {
        return $this->belongsTo('App\TipoResol');
    }

    public function tipo_conv1()
    {
        return $this->belongsTo('App\TipoConv1');
    }

}
