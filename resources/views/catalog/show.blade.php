@extends('layouts.master')

@section('content')

    <div class="row">

	    <div class="col-sm-6">

	        {{-- TODO: Imagen de la cabra --}}
	        <img src="{{url('/img')}}/{{$id->imagen}}" />
	        

	    </div>
	    <div class="col-sm-6">

	        {{-- TODO: Datos de la cabra --}}
	        <h1>{{ $id->nombre }}</h1>
	        <p>{{ $id->descripcion }}</p>
	        <button type="button" class="btn btn-warning">Editar</button>
	        <button type="button" class="btn btn-default"> &lt; Volver</button>

	    </div>
	</div>

@stop