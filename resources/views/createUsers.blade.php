@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Registros</h2>          
    <table class="table table-hover">
  
      <form method="POST" action="{{route('users.store')}}">
        
        {{ csrf_field() }}
            
        <!--input type="text" name="nombre" placeholder="nombre"><br>
        <input type="text" name="apellidoP" placeholder="apellido paterno"><br>
        <input type="text" name="apellidoM" placeholder="apellido materno"><br>
        <input type="text" name="emailP" placeholder="email"><br>
        <input type="text" name="id_role" placeholder="rol de usuario"><br-->
        <input type="submit" value="tu cola">

      </form>
    <a href="{{ route('register') }}">Agregar Usuario</a>
    </table>
</div> 
@endsection