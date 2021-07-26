<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contribuyente extends Model
{
    //Tabla de contribuyente
    protected $table = "contribuyentes";
    //Columnas de la tabla
    protected $fillable = [
        'nombre','rfc','correo','telefono',
        'direccion','situacion','id_user'
    ];
    public $timestamps = true;

}
