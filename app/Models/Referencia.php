<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referencia extends Model
{
    use HasFactory;

    // FUERZA el nombre de la tabla (por si acaso Laravel busca 'referencias' o 'referencia')
    protected $table = 'referencias'; 

    // Permite que se guarden los datos del formulario
    protected $fillable = ['nombre', 'comentario', 'foto', 'cargo'];
}