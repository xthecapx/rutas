@extends('layouts.master')

@section('breadcrumb')
	<a href="/">Inicio</a> / Estas viendo: <strong>Equivalencias</strong>
@stop

@section('content')
	<div class="idcard">
		<div class="idcard_content">
			<div class="idcard_head">
				<strong> Plan Origen: </strong>{{ucwords( $equivalencia->programaOrigen )}} <br>
        <strong> Plan Destino: </strong> {{ucwords( $equivalencia->programaDestino )}}
			</div>
			<div class="perfiles">
				<table class="equivalencias">
					<tr>
						<th colspan="2"> 
              <!-- Plan Origen <span class="r-arrow-right"></span> {{ucwords( $equivalencia->programaOrigen )}} <br>
              Plan Destino <span class="r-arrow-right"></span> {{ucwords( $equivalencia->programaDestino )}} -->
              Asignaturas equivalentes entre los programas
            </th>
					</tr>
					<tr>
						<th>Asignatura cursada </th>
						<th>Asignatura homologada</th>
					</tr>
					@foreach($aequivalencias as $item)	
					<tr>
						<td>{{$item->codigoAsignaturaOrigen}} | {{$item->asignaturaOrigen}}</td>
						<td>{{$item->codigoAsignaturaDestino}} | {{$item->asignaturaDestino}}</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
@stop

@section('right')
    <nav class="menuright">
        {{ $MenuPrincipal->asUl( array('class' => 'awesome-ul') ) }}
    </nav>
	<nav class="menuright anterior">
        <ul class="awesome-ul">
        	<li class="active">
        		<a href="{{URL::previous()}}"> <span class="r-undo"></span> <span class="textAnterior">Anterior</span> </a>
        	</li>
        </ul>
    </nav>
@stop