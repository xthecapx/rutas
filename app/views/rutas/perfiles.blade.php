@extends('layouts.master')

@section('breadcrumb')
	<a href="{{URL::to('/');}}">Inicio</a> / <a href="{{URL::to('/programa');}}">Rutas</a> / Estas viendo <strong>rutas curriculares</strong> de: {{ucwords($programa->sede)}} | {{ ucwords($programa->facultad)}} | {{ucwords($programa->programa)}}
@stop

@section('content')
	<div class="idcard">
		<div class="idcard_content">
			<div class="idcard_head">
				<strong>{{ucwords($programa->sede)}}</strong> | {{ ucwords($programa->facultad)}} | {{ucwords($programa->programa)}}
			</div>

			<div class="perfiles">
				<p class="pcenter">Selecciona la ruta curricular de tu interés:</p>
				@foreach($perfil as $item)
					<a href="{{URL::to('/programa/asignatura');}}/{{$item->id}}">
						<div class="item items_perfiles">
                            <span class="r-flow-tree left"></span>
                            <span class="r-zoomin2 icono"></span>
                            <div class="perfiles_contenedor">
    							<h5><span>Nombre: </span>{{$item->perfil}} | {{$item->contador_creditos}} Créditos</h5>
    							<p class="justificado"><span>Descripción: </span>{{$item->descripcion}}</p>
                            </div>
						</div>
					</a>
				@endforeach
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
        		<a href="{{URL::to('/programa');}}">Rutas</a>
        	</li>
        	<li>
        		<a href="{{URL::to('/titulacion');}}">Doble Titulación</a>
        		<ul>
        		    <li><a href="{{URL::to('/titulacion/afinidad');}}">Afinidades</a></li>
        		    <li><a href="{{URL::to('/titulacion/equivalencias');}}">Equivalencias</a></li>
        		</ul>
        	</li>
            <li>
                <a href="http://167.114.135.150/moodle/course/view.php?id=6728">Video Tutoriales</a>
            </li>
        	<!--<li>
        		<a href="/contacto">Contacto</a>
        	</li>-->
        </ul>
    </nav>
	<nav class="menuright anterior">
        <ul class="awesome-ul">
        	<li class="active">
        		<a href="{{URL::previous();}}"> <span class="r-undo"></span> <span class="textAnterior">Anterior</span> </a>
        	</li>
        </ul>
    </nav>
@stop