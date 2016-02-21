@extends('layouts.master')

@section('breadcrumb')
	<a href="{{URL::to('/');}}">Inicio</a> / Estas viendo: <strong>Afinidades</strong>
@stop

@section('content')
<script>var origen = []; var labels = [];</script>
	<div class="idcard">
		<div class="idcard_content">
			<div class="idcard_head">
				{{ $programa{0}->SedeOrigen}} | {{ $programa{0}->programaOrigen}}
			<span id="tipologias"> Ayuda </span>
        <div class="tipologias">
          <p class="pFlotante parrafoGrande">
            El <strong>	Análisis de Afinidades</strong> entre planes de estudio es un insumo que sirve para guiar a los estudiantes en el diseño de posibles rutas curriculares y en las posibilidades de doble titulación. El resultado de este análisis es un listado de planes de estudio (denominados Programas destino en la tabla mostrada) con los cuales es posible realizar una doble titulación   Este análisis se basa en el número de créditos comunes entre planes, el cual se compone de: (i) créditos de asignaturas comunes,  (ii)  créditos de libre elección y (ii) créditos ganados e invertidos en un segundo plan. La tabla que muestra los resultados ilustra, para cada programa destino donde es posible realizar una doble titulación, el número de créditos exigidos en un segundo plan, el número de créditos comunes y el número de créditos excedentes correspondiente a la diferencia entre los créditos comunes y los créditos en el segundo plan. Los programas destino se ordenan de acuerdo al número de créditos excedentes, de forma tal que se muestra prioritariamente a los programas con los cuales se tiene una mayor holgura para realizar una doble titulación.
          </p>
        </div>
			</div>

			<div class="perfiles" id="perfiles">
					<table class="equivalencias afin">
						<tr>
							<th colspan="5"> Afinidades de {{ $programa{0}->programaOrigen}} | <a class="verGrafico">Ver gráfico</a> </th>
						</tr>
						<tr>
							<th rowspan="2">Programa destino</th>
							<th colspan="3"> Créditos </th>
						</tr>
						<tr>
							<th>Exigidos destino</th>
							<th>Comunes</th>
							<th>Excedentes</th>
						</tr>
						@foreach ($programa as $key)
						<tr>
							<td>{{ $key->programaDestino}}</td>
							<td>{{ $key->creditosExigidosDestino}}</td>
							<td>{{ $key->comunOrigenDestino}}</td>
							<td>{{ $key->errorOrigenDestino}}</td>
						</tr>
						@endforeach
					</table>				
					<div id="contenedorAfinidadGrafica">
						<div id="afinidadGrafica">
							<div class="afinidatitulos">
								<span class="top">Afinidades de {{ $programa{0}->programaOrigen}}</span><a class="verGrafico"><span class="r-cross"></span></a>
							</div>
							<canvas id="canvas"></canvas>
							<center><p>Los programas más alejados al centro tiene mayor posibilidad de doble titulación con <strong>{{ $programa{0}->programaOrigen}}</strong></p></center>
						</div>
					</div>
			</div>
		</div>
	</div>

<script>
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

@section('scripts')

@foreach($programa as $key)
<script type="text/javascript">
		origen.push({{($key->comunOrigenDestino)}});
		labels.push('{{($key->programaDestino)}}');
		var radarChartData = {
			labels: labels,
			datasets: [
				{
					label: "Comunes",
					fillColor: "rgba(80,153,46,0.2)",
					strokeColor: "rgba(80,153,46,1)",
					pointColor: "#50992E",
					pointStrokeColor: "#3C7222",
					pointHighlightFill: "#fff",
					pointHighlightStroke: "#3C7222",
					lineColor : "#0f0",
					data: origen
				}
			]
		};

		window.onload = function(){
			window.myRadar = new Chart(document.getElementById("canvas").getContext("2d")).Radar(radarChartData, {
				responsive: true,
				angleLineColor : "rgba(60,114,34,0.5)",
				pointDotRadius : 2,
				pointDotStrokeWidth : 1,

			});
		}
	</script>
@endforeach

<script>
$( window ).load(function() {
$( "#contenedorAfinidadGrafica" ).hide();

$("#perfiles a.verGrafico").click(function(event){
	$("#contenedorAfinidadGrafica" ).toggle();
});
});
</script>

@stop