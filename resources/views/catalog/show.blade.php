@extends('layouts.master')

@section('content')

    <div class="row">

	    <div class="col-sm-6">

	        {{-- TODO: Imagen de la cabra --}}
	        <img class="img img-responsive" src="/{{$id->imagen}}" />
	        

	    </div>
	    <div class="col-sm-6">

	        {{-- TODO: Datos de la cabra --}}
	        <h1>{{ $id->nombre }}</h1>
	        <p>{{ $id->descripcion }}</p>
	        <a href="{{ url('/catalog/edit/' . $id->id ) }}">
	        	<button type="button" class="btn btn-warning">Editar</button>
	        </a>
	        <form action="{{action('CatalogController@deleteCapa', $id->id)}}" method="POST" style="display:inline">
			    {{ method_field('PUT') }}
			    {!! csrf_field() !!}
			    <button type="submit" class="btn btn-danger" style="display:inline">
			        Borrar
			    </button>
			</form>
	        <a href="{{ url('catalog') }}">
	        	<button type="button" class="btn btn-default"> &lt; Volver</button>
			</a>
	    </div>
	</div>

@stop