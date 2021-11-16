<?php

namespace App\Models;
use Eloquent as Model;

class Paciente extends Model
{
    //
    public $table = 'paciente';
    protected $primaryKey= 'idpaciente';
    public $timestamps= false;

}
