@extends('layouts.app')

@section('content')
<div class="container">
<h2>Registros</h2>          
<table class="table table-hover">

  <thead>
    <tr>
      <th>Nombre</th>
      <th>Apellido paterno</th>
      <th>Apellido materno</th>
      <th>Correo</th>
      <th>Rol</th>
      <!--th>Perfil</th-->
    </tr>
  </thead>

  <tbody>

    @foreach($estudiantes as $item)
    <tr>
      <td>{{$item->nombre}}</td>
      <td>{{$item->apellidoP}}</td>
      <td>{{$item->apellidoM}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->id_role}}</td>
      <!--td><a href="/Administrador/{{$item->id}}/mostrar" </a>Detalles</td-->
    </tr>
    @endforeach
  </tbody>

  <a href="">Agregar Preguntas</a>
  <a href="{{ route('register') }}">Agregar Usuario</a>
</table>
</div> 
@endsection
