@extends('layouts.master')

@section('content')
	<p>Lo sentimos, la información de la asignatura no existe</p>
@stop

@section('right')
	<nav class="menuright">
    	{{ $MenuPrincipal->asUl( array('class' => 'awesome-ul') ) }}
    </nav>
@stop