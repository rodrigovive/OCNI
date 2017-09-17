<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoConv1 extends Model
{
    protected $table = "tipo_conv1";

    protected $fillable = ['nombr_tipo_conv1'];
    public function convenios()
    {
        return $this->hasMany('App\Convenio');
    }
}
