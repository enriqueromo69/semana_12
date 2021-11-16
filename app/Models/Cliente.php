<?php
namespace App\Models;
use Eloquent as Model;


class Cliente extends Model
{
    public $table = 'cliente';
    protected $primaryKey= 'idcliente';
    public $timestamps= false;

}
