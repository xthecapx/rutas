@extends('layouts.master')

@section('content')
	<p>Lo sentimos, la información de ese perfil no existe</p>
@stop

@section('right')
	<nav class="menuright">
    	{{ $MenuPrincipal->asUl( array('class' => 'awesome-ul') ) }}
    </nav>
@stop