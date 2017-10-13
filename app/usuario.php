<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    //Nombre de la tabla
    protected $table = 'usuarios';
    protected $fillable = ['nombre','apellido','email'];
}
