@extends('layouts.master')

@section('content')

    <div class="row">

	    @foreach( $capas as $capa )
	    <div class="col-xs-6 col-sm-6 col-md-3 text-center" >

	        <a href="{{ url('/catalog/show/' . $capa->id ) }}">
	            <img class="img img-responsive" src="{{$capa->imagen}}"  />
	            <h4 style="min-height:45px;margin:5px 0 10px 0">
	                {{$capa->nombre}}
	            </h4>
	        </a>

	    </div>
	    @endforeach

	</div>

@stop