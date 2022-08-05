@extends('layouts.app')

@section('titulo','Detalle curso')

@section('contenido')

    <div>
        <div class="text-center">
            <img style="height: 220px; width:320px" src="{{ Storage::url($cursito->imagen) }}">
            <p>{{$cursito->descripcion}}</p>
            <p>{{$cursito->duracion}}</p>
            <a href="/cursos/{{$cursito->id}}/edit" class="btn btn-info">Editar</a>
        </div>
    </div>


@endsection
