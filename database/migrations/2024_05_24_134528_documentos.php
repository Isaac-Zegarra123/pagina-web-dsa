<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Documentos extends Migration
{
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('ruta_archivo')->nullable(); // Almacena la ruta del archivo.
            $table->string('nombre');
            $table->date('fecha'); // Si necesitas almacenar información más detallada sobre la fecha, considera usar DATETIME.
            $table->enum('tipo_documento', ['convocatoria', 'reglamento']); // Tipo de documento (Convocatoria, Reglamento).
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('documentos');
    }
}

