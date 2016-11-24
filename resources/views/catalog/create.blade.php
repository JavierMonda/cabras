@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:20px">

		<div class="col-md-offset-3 col-md-6">

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title text-center">
						<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
						Añadir capa de cabra majorera
					</h3>
				</div>

				<div class="panel-body" style="padding:30px">
				
					{{-- TODO: Abrir el formulario e indicar el método POST --}}
					<form class="form" enctype="multipart/form-data" method="POST" action="">
						{{-- TODO: Protección contra CSRF --}}
						{{ csrf_field() }}

	    
	    				<div class="form-group">
	    					<label for="title">Nombre</label>
	    					<input type="text" name="nombre" id="title" class="form-control">
						</div>

						<div class="form-group">
							{{-- TODO: Completa el input para la imagen --}}
							<label for="file">Imagen</label>
							<input type="file" name="imagen" id="file" class="form-control">
						</div>

					    <div class="form-group">
							<label for="synopsis">Descripción</label>
	    					<textarea name="descripcion" id="synopsis" class="form-control" rows="3"></textarea>
						</div>

						<div class="form-group text-center">
							<button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
								Añadir
							</button>
						</div>

					{{-- TODO: Cerrar formulario --}}
					</form>

				</div>
			</div>
		</div>
	</div>

@stop