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
            <th>Perfil</th>
         </tr>
      </thead>
      <tbody>
         @foreach($estudiantes as $item)
         <tr>
            <td>{{$item->nombre}}</td>
            <td>{{$item->apellidoP}}</td>
            <td>{{$item->apellidoM}}</td>
            <td>{{$item->email}}</td>
            <td>
               <div class="d-inline">
                  <a class="btn btn-info" href="{{route('users.show',$item->id)}}" >Ver</a>
               </div>
               <div class="d-inline">
                  <a  class="btn btn-warning" href="{{route('users.edit',$item->id)}}">Editar</a>
               </div>
               <form action="{{route('users.destroy',$item->id)}}" method="post" class="d-inline">
                  <input type="submit"  class="btn btn-danger" value="Eliminar" >
                  {{ csrf_field() }}
                  {{ method_field('DELETE')}}
               </form>
            </td>
            <!--td><a href="/Administrador/{{$item->id}}/mostrar" </a>Detalles</td-->
         </tr>
         @endforeach
      </tbody>
      <!--a href="{{route('register')}}">Agregar alumno</a-->
      <a href="{{ route('register') }}">Agregar Usuario</a>
   </table>
</div>
@endsection

