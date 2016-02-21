@extends('layouts.master')

@section('breadcrumb')
	<a href="{{URL::to('/');}}">Inicio</a> / Estas viendo: <strong>Requisitos</strong>
@stop

@section('content')
	<div class="idcard">
		<div class="idcard_content">
			<div class="idcard_head">
				<strong>Asignatura: </strong>{{ucwords($asignatura->asignatura)}}
			</div>
			<div class="perfiles">
				<p>Los requisitos asociados a la asignatura {{ucwords($asignatura->asignatura)}} son: </p>
				@if(count($requisito) == 0)
					<p class="pcenter">{{'La asignatura ' . $asignatura->asignatura }}<strong> NO tiene requisitos</strong></p>
				@else
					<ol>
					@foreach($requisito as $item)
						<li>{{$item->requisito}}</li>
					@endforeach
					</ol>
				@endif
			</div>
		</div>
	</div>
@stop

@section('right')
	<nav class="menuright">
        <ul class="awesome-ul">
        	<li>
        		<a href="{{URL::to('/');}}">Inicio</a>
        	</li>
        	<li class="active">
        		<a href="programa">Rutas</a>
        	</li>
            <li>
                <a href="titulacion">Doble Titulación</a>
                <ul>
                    <li><a href="{{URL::to('/titulacion/afinidad');}}">Afinidades</a></li>
                    <li><a href="{{URL::to('/titulacion/equivalencias');}}">Equivalencias</a></li>
                </ul>
            </li>
        	<!--<li>
        		<a href="http://rutas.me/contacto">Contacto</a>
        	</li>-->
        </ul>
    </nav>
    <nav class="menuright">
        <ul class="awesome-ul">
        	<li class="active">
        		<a href="{{URL::previous();}}"> <span class="icon-undo"></span> Ir atrás</a>
        	</li>
        </ul>
    </nav>
@stop