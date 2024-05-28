@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Documento</h1>
    <form action="{{ route('documentos.update', $documento->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $documento->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha" class="form-control" value="{{ $documento->fecha }}" required>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo de Documento:</label>
            <input type="text" name="tipo" id="tipo" class="form-control" value="{{ $documento->tipo_documento }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Documento</button>
    </form>
</div>
@endsection
