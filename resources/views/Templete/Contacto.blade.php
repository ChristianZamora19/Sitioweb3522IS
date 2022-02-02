@extends('Templete.layout.template')

@section('contenido')
<p><h4>Hola, les Presento la clase abajo: </h4></p><hr>
  <p>Nombre: {{$categoria->nombre}}</p>
  <p>Codigo: {{$categoria->codigo}}</p>
  <p>Descripcion: {{$categoria->descripcion}}</p>
  <hr>
  {{$categoria->mostrarInformacion()}}
@endsection
