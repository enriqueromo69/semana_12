<?php

namespace App\Models;
use Eloquent as Model;

class Doctor extends Model
{
    //
    public $table = 'doctor';
    protected $primaryKey= 'iddoctor';
    public $timestamps= false;

}
