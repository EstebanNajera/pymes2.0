@extends('layouts.app')

@section('content')
    <div class="offset-md-2 col-md-8">
	    <form method="POST" action="{{ route('questions.store') }}">
	    	{{ csrf_field() }}
			<div class="card border-danger">
				<div class="card-header bg-danger text-white"><b>Insertar pregunta</b></div>
				<div class="card-body col-md-10 offset-md-1">
					<div class="row form-group">
						<label>Pregunta</label>
					</div>

					<div class="row form-group">
						<input class="form-control" type="text" name="question" placeholder="Introduzca su pregunta aquí">
					</div>

					<div class="row form-group">
						<label>Tipo de pregunta</label>
					</div>

					<div class="row text-center form-group">
					    <label class="col-md-3 radio-inline"><input type="radio" name="type" value="2" checked>Abierta</label>
					    <label class="col-md-4 radio-inline"><input type="radio" name="type" value="1">Cerrada simple</label>
				        <label class="col-md-5 radio-inline"><input type="radio" name="type" value="3">Cerrada de opción múltiple</label>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<div class="form-group">
								<label for="id_category">Categoría</label>
								<select class="form-control" name="id_category">
									<?php $aux = ""; ?>
									@foreach($categories as $category)
									    @if($aux !== $category -> area)
									        @if($aux !== "")
									            </optgroup>
									        @endif
									        <optgroup label="{{ $category -> area }}">
									            <?php $aux = $category -> area; ?>
									    @endif
									    <option value={{ $category -> id_category }}>
									    	{{ $category -> category }}
									    </option>
									@endforeach
								</select>
							</div>
						</div>
				    </div>

					<div class="row text-center form-group">
					    <label class="checkbox-inline"><input type="checkbox" name="status" value="1" checked>Activa</label>
					</div>

					<div class="row form-group">
		                <span class="input-group-btn col-md-2 offset-md-5">
		    	            <input type="submit" class="btn btn-danger btn-lg" value="Guardar" size="10"></input>
		                </span>
					</div>
				</div>
			</div>
	    </form>
	 </div>
@stop