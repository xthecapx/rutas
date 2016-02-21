@extends('layouts.master')

@section('breadcrumb')
	<h4>Bienvenido al sistema de Doble Titulación</h4>
@stop


@section('content')
	<div class="idcard">
		<div class="idcard_content">
			<div class="idcard_head">
				¿Qué desea consultar?
			</div>
			<div class="perfiles">
				<a href="{{URL::to('/titulacion/afinidad');}}" class="dtitulacion">
					<span class="r-pie"></span>
					<div>
						<h5>Afinidad entre carreras.</h5>
						<p>Descubra el top 5 de los programas disponibles en la Universidad</p>
					</div>
				</a>
				<a href="{{URL::to('/titulacion/equivalencias');}}" class="dtitulacion">
					<span class="r-menu"></span>
					<div>				
						<h5>Equivalencias entre asignaturas.</h5>
						<p>Descubra las asignaturas que han sido homologadas entre programas en donde se ha aprobado la doble titulación.</p>	
					</div>
				</a>
			</div>
		</div>
	</div>
@stop

@section('right')
    <nav class="menuright">
        {{ $MenuPrincipal->asUl( array('class' => 'awesome-ul') ) }}
    </nav>
@stop