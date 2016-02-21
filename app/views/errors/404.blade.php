@extends('layouts.master')

@section('breadcrumb')
	<a href="/">Inicio</a> / Estas viendo: <strong>ERROR 404</strong>
@stop

@section('content')
	<div class="error"> 
		<span class="r-cone error"></span> 
		<p>ERROR 404 <br> Página no encontrada <br> Intenta con alguna de las secciones definidas en el menú de la derecha</p>
	</div>
@stop

@section('right')

    <nav class="menuright">
    	<img class="Rarrow" src="{{asset('unal/images/red-arrow-down.gif')}}" alt="">
        {{ $MenuPrincipal->asUl( array('class' => 'awesome-ul') ) }}
    </nav>
@stop