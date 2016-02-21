@extends('layouts.master')

@section('breadcrumb')
	<a href="{{URL::to('/');}}">Inicio</a> / Estas viendo: <strong>Equivalencias</strong>
@stop

@section('content')
    {{ Form::open(array( 'url' => 'titulacion/equivalencias', 'class' => 'unal-form'))}}

        <select name="programa_actual" id="programa_actual"></select><br>
        <select name="programa_destino" id="programa_destino"></select><br>

    	{{Form::submit('Continuar', array('id' => 'submitbutton'));}}
    {{ Form::close()}}

    <p>{{Session::get('message');}}</p>

    <script>
    $(document).ready(function(){

        $("#submitbutton").attr("disabled", true);

        $("#programa_destino").focus(function(){$("#submitbutton").attr("disabled", false);});

        $("#programa_actual").jCombo({
            url: "{{url('actuales')}}",
            initial_text: "1. Seleccione el programa de interés.",
        });
        
        $("#programa_destino").jCombo({
            url: "{{url('opciones')}}", 
            input_param: "option",
            initial_text: "2. Seleccione la opción de doble titulación.",
            parent: "#programa_actual",
        });
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