@extends('layouts.master')

@section('breadcrumb')
	<a href="{{URL::to('/');}}">Inicio</a> / <a href="{{URL::to('programa');}}">Rutas</a> / <a href="{{URL::to('/programa/perfil');}}/{{$perfil}}">{{ucwords($perfil_nombre)}}</a> / Estas viendo: <strong>Asignaturas</strong>
@stop

@section('content')
	<div class="idcard">
		<div class="idcard_content">
			<div class="idcard_head">
				<strong>Ruta curricular: </strong>{{ucwords($perfil_nombre)}}
        <span id="tipologias"> Ayuda </span>
        <div class="tipologias">
          <p class="pFlotante">
            <strong>Tipologia</strong> <br>
            <strong>C:</strong> Disciplinar o profesional. <br>
            <strong>B:</strong> Fundamental. <br>
            <strong>L:</strong> Libre elección.
          </p>
        </div>
			</div>

			<div class="perfiles">
				<p class="pcenter">Las asignatura asociadas a la ruta curricular "{{ucwords($perfil_nombre)}}" son: </p>
				@if(count($datos) == 0)
					{{'El perfil ' . ucwords($perfil_nombre) . ' no tiene asignaturas asociadas'}}
				@else
					@foreach($datos as $item)
						<a>
              <!-- Validando colores fondo -->
							@if ($item["tipologia"] === "B")
                <div class="item perfiles_asignatura tipologiaB" id="asignatura">
                  <div class="tituloasignatura tituloB">{{$item["asignatura"]}}</div>
              @elseif ($item["tipologia"] === "L")
                <div class="item perfiles_asignatura tipologiaL" id="asignatura">
                  <div class="tituloasignatura tituloL">{{$item["asignatura"]}}</div>
              @else
                <div class="item perfiles_asignatura" id="asignatura">
                  <div class="tituloasignatura">{{$item["asignatura"]}}</div>
              @endif

								<p>
									<span>Codigo: </span>{{$item["asignatura_id"]}} <br>
                  <span>Agrupación: </span>{{$item["agrupacion"]}}<br>
									<span>Créditos: </span>{{$item["creditos"]}} <br>
                  <span>Tipologia: </span>{{$item["tipologia"]}}
								</p>
								<span class="r-arrow-down icono2" id="bajar"></span>
								<div class="Requisitos">
									<div class="tituloasignatura">Requisitos</div>
									<ol>
										@foreach($item["requisitos"] as $item)
											<li>{{$item["requisito"]}}</li>
										@endforeach
									</ol>
								</div>
							</div>
						</a>
					@endforeach
				@endif
			</div>
		</div>
	</div>

<script>
	$("div.Requisitos").hide();
	$("div#asignatura").click(function(){
		$(this).children("div.Requisitos").slideToggle("slow");
		$(this).children("span#bajar").toggleClass("r-arrow-up" ,"r-arrow-down");
	});
  $("div.tipologias p").hide();
  $("span#tipologias").mouseover(function(){
    $("div.tipologias p").show("slow");
  });
  $("span#tipologias").mouseout(function(){
    $("div.tipologias p").hide("slow");
  });
</script>
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
        		<a href="{{URL::to('/programa/perfil')}}/{{$perfil}}"> <span class="r-undo"></span> <span class="textAnterior">Anterior</span> </a>
        	</li>
        </ul>
    </nav>
@stop