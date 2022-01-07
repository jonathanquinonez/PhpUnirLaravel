<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pet extends Model
{
	 use softDeletes;

	protected $table = 'store';

       protected $fillable = [
        'nombre',
        'descripcion',
        'imagenes',
        'servicios',
        'direccion',
        'telefono',
        'horario',
        'tag'
    ];
   
   
}
