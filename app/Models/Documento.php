<?php

// app/Models/Documento.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    protected $fillable = [
        'ruta_archivo',
        'nombre',
        'fecha',
        'tipo_documento',
    ];
}

