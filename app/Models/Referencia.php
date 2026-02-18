<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referencia extends Model
{
    //Definimos los campos que se pueden llenar desde el formulario
    protected $fillable = ['nombre', 'comentario', 'foto', 'cargo'];
}
