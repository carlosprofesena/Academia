@extends('layouts.app')

@section('titulo', 'Editar curso')

@section('contenido')

<form action="/cursos/{{$cursito->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <br>
    <h2>Formulario de Edición del curso</h2>
    <div class="form-group">
        <label for="nombre">Edita el nombre</label>
        <input id="nombre" class="form-control" type="text" name="nombre" value="{{$cursito->nombre}}">
    </div>
    <div class="form-group">
        <label for="descripcion">Edita la Descripción</label>
        <input id="descripcion" class="form-control" type="text" name="descripcion" value="{{$cursito->descripcion}}">
    </div>
    <div class="form-group">
        <label for="duracion">Edita la Duración</label>
        <input id="duracion" class="form-control" type="text" name="duracion" value="{{$cursito->duracion}}">
    </div>
    <div class="form-group">
        <label for="imagen">Cargue la nueva imagen del curso</label>
        <br>
        <div>
            <img style="height: 80px; width:80px" src="{{ Storage::url($cursito->imagen) }}">
        </div>
        <input id="imagen" type="file" name="imagen">
    </div>
    <button class="btn btn-success" type="submit">Actualizar</button>
</form>

@endsection
