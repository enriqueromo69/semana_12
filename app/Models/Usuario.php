<?php

namespace App\Models;
use Eloquent as Model;

class Usuario extends Model
{
    //
    public $table = 'usuario';
    protected $primaryKey= 'idusuario';
    public $timestamps= false;

}
