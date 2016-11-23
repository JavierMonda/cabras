@extends('layouts.master')

@section('content')

    <div class="row">
	    <div class="col-sm-6">   
	        <img src="{{url('/img')}}/{{$id->imagen}}" />
	    </div>
	    <div class="col-sm-8">
	        <h1>{{ $id->nombre }}</h1>
	        <p>{{ $id->descripcion }}</p>
	    </div>
	</div>

@stop