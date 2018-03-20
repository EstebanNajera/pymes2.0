@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Registros</h2>          
  
      <form method="POST" action="{{route('users.store')}}">
        <input type="text" name="nombre" placeholder="nombre"><br>
        <input type="text" name="apellidoP" placeholder="apellido paterno"><br>
        <input type="text" name="apellidoM" placeholder="apellido materno"><br>
        <input type="text" name="email" placeholder="email"><br>
        <input type="text" name="id_role" placeholder="rol de usuario"><br>
        <input type="submit" value="Aceptar" class="btn btn-info" method="POST">
        {{ csrf_field() }}
      </form>
    <a action="{{route('register')}}" class="btn btn-danger">Agregar Usuario</a>

</div> 
@endsection