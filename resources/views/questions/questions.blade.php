@extends('layouts.app')

@section('content')
    <div class="offset-md-2 col-md-8">
	    	<table class="table table-striped">
	    		<thead class="thead-dark">
	    			<tr>
	    				<th>Pregunta</th>
	    				<th>Categoria</th> 
	    				<th>Subcategoria</th>
	    				<th>Tipo</th>
	    				<th>Estado</th>
	    				<th></th>
	    				<th></th>
	    				<th></th>
	    			</tr>
	    		</thead>
	    		@foreach($questions as $question)
	    		    <tr>
	    		    	<td>{{$question -> question}}</td>
	    		    	<td>{{$question -> area}}</td>
	    		    	<td>{{$question -> category}}</td>
	    		    	<td>
	    		    		{{
	    		    			$question -> type === 'Open' ? 'Pregunta Abierta' : 
	    		    			($question -> type === 'Binary' ? 'Pregunta Binaria' : 'Pregunta de opción múltiple')
	    		    		}}
	    		    	</td>
	    		    	<td>{{$question -> status === 1 ? 'Activo':'Inactivo'}}</td>
	    		    	<td><input type="submit" class="btn btn-info" value="Ver"></td>
	    		    	<td><input type="submit" class="btn btn-success" value="Editar"></td>
	    		    	<td><input type="submit" class="btn btn-danger" value="Eliminar"></td>
	    		    </tr>
	    		@endforeach
	    	</table>
	 </div>
@stop