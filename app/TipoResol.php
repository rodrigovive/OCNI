<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoResol extends Model
{
    protected $table = "tipo_resol";

    protected $fillable = ['nombr_tipo_resol'];
    public function convenios()
    {
        return $this->hasMany('App\Convenio');
    }
}
