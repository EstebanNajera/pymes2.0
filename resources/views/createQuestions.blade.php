@extends('layouts.app')

@section('content')
    <h1 class="title">Preguntas</h1>
    <div class="offset-md-3 col-md-6 offset-md-3">
	    <form method="POST" action="{{ route('questions.store') }}">
	    	{{ csrf_field() }}
			<div class="card">
				<div class="card-title"><b>Insertar pregunta</b></div>
				<div class="card-body">
					<div class="row">
						<label>Pregunta</label>
					</div>
					<div class="row">
						<input class="form-control" type="text" name="question" placeholder="Introduzca su pregunta aquí">
					</div>
					<div class="row">
						<label>Tipo de pregunta</label>
					</div>
					<div class="row text-center">
					    <label class="col-md-3 radio-inline"><input type="radio" name="type" value="2" checked>Abierta</label>
					    <label class="col-md-4 radio-inline"><input type="radio" name="type" value="1">Cerrada simple</label>
				        <label class="col-md-5 radio-inline"><input type="radio" name="type" value="3">Cerrada de opción múltiple</label>
					</div>
					{{-- <div class="row">
						<label>Incisos</label>
					</div> --}}
					
					{{-- Aquí puedes añadir los incisos --}}

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="sel1">Area</label>
								<select class="form-control" name="id_area">
									@foreach($areas as $area)
									    <option value={{ $area -> id_area }}>{{ $area -> area }}</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="sel1">Categoría</label>
								<select class="form-control" name="id_category">
									@foreach($categories as $category)
									    <option value={{ $category -> id_category }}>{{ $category -> category }}</option>
									@endforeach
								</select>
							</div>
						</div>
				    </div>
					<div class="row text-center">
					    <label class="checkbox-inline"><input type="checkbox" name="status" value="1" checked>Activa</label>
					</div>
					<div class="row">
		                <span class="input-group-btn text-center col-md-4 offset-md-4">
		    	            <input type="submit" class="btn btn-success" value="Guardar"></input>
		                </span>
					</div>
				</div>
			</div>
	    </form>
	 </div>
@stop