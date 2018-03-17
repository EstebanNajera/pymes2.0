@extends('layouts.app')

@section('content')
    <h1 class="title">Preguntas</h1>
    <div class="offset-md-3 col-md-6 offset-md-3">
	    <form method="POST">
			<div class="card">
				<div class="card-title"><b>Insertar pregunta</b></div>
				<div class="card-body">
					<div class="row">
						<label>Pregunta</label>
					</div>
					<div class="row">
						<input class="form-control" type="text" name="respuesta" placeholder="Introduzca su pregunta aquí">
					</div>
					<div class="row">
						<label>Tipo de pregunta</label>
					</div>
					<div class="row text-center">
					    <label class="col-md-3 radio-inline"><input type="radio" name="tipo">Abierta</label>
					    <label class="col-md-4 radio-inline"><input type="radio" name="tipo">Cerrada simple</label>
				        <label class="col-md-5 radio-inline"><input type="radio" name="tipo" checked>Cerrada de opción múltiple</label>
					</div>
					<div class="row">
						<label>Incisos</label>
					</div>
					
					{{-- Aquí puedes añadir los incisos --}}

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="sel1">Area</label>
								<select class="form-control" id="sel1">
									<option>Área 1</option>
									<option>Área 2</option>
									<option>Área 3</option>
									<option>Área 4</option>
									<option>Área 5</option>
								</select>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="sel1">Categoría</label>
								<select class="form-control" id="sel1">
									<option>Categoría 1</option>
									<option>Categoría 2</option>
									<option>Categoría 3</option>
									<option>Categoría 4</option>
									<option>Categoría 5</option>
								</select>
							</div>
						</div>
				    </div>
					<div class="row text-center">
					    <label class="checkbox-inline"><input type="checkbox" name="tipo" checked>Activa</label>
					</div>
					<div class="row">
		                <span class="input-group-btn">
		    	            <imput type="submit" class="btn btn-success">Aceptar</button>
		                </span>
					</div>
				</div>
			</div>
	    </form>
	 </div>
@stop