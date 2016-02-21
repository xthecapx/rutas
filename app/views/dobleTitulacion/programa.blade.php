@extends('layouts.master')

@section('breadcrumb')
	<a href="{{URL::to('/');}}">Inicio</a> / Estas viendo: <strong>Sistema de afinidades</strong>
@stop


@section('content')
<p style="text-align:justify"> El <strong> Análisis de Afinidades</strong> entre planes de estudio es un insumo que sirve para guiar a los estudiantes en el diseño de posibles rutas curriculares y en las posibilidades de doble titulación. El resultado de este análisis es un listado de planes de estudio (denominados Programas destino en la tabla mostrada) con los cuales es posible realizar una doble titulación   Este análisis se basa en el número de créditos comunes entre planes, el cual se compone de: (i) créditos de asignaturas comunes,  (ii)  créditos de libre elección y (ii) créditos ganados e invertidos en un segundo plan. La tabla que muestra los resultados ilustra, para cada programa destino donde es posible realizar una doble titulación, el número de créditos exigidos en un segundo plan, el número de créditos comunes y el número de créditos excedentes correspondiente a la diferencia entre los créditos comunes y los créditos en el segundo plan. Los programas destino se ordenan de acuerdo al número de créditos excedentes, de forma tal que se muestra prioritariamente a los programas con los cuales se tiene una mayor holgura para realizar una doble titulación.</p>
    {{ Form::open(array( 'url' => 'titulacion/afinidad' ,'class' => 'unal-form'))}}
        <select name="sedeOrigen" id="sedeOrigen"></select><br>
        <select name="programaOrigen" id="programaOrigen"></select><br>

    	{{Form::submit('Continuar', array('id' => 'submitbutton'));}}
    {{ Form::close()}}

    <p>{{Session::get('message');}}</p>

    <script>
    $(document).ready(function(){

        $("#submitbutton").attr("disabled", true);

        $("#programaOrigen").focus(function(){$("#submitbutton").attr("disabled", false);});

        $("#sedeOrigen").jCombo({
            url: "{{url('sedeOrigen')}}",
            initial_text: "1. Seleccione la Sede origen.",
        });

        $("#programaOrigen").jCombo({
            url: "{{url('programaOrigen')}}",
            input_param: "option",
            initial_text: "2. Seleccione el programa origen.",
            parent: "#sedeOrigen",
        });

    });   
    </script>
@stop

@section('right')
    <nav class="menuright">
        {{ $MenuPrincipal->asUl( array('class' => 'awesome-ul') ) }}
    </nav>
@stop