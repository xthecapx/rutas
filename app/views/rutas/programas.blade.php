@extends('layouts.master')

@section('breadcrumb')
	<h4>Bienvenido al sistema de Rutas Curriculares</h4>
    {{-- HTML::style('unal/js/jpreloader/jpreloader.css') --}}
@stop


@section('content')
<p style="text-align:justify">las rutas son los trayectos que el estudiante encuentra dentro del plan de estudios que visibilizan las oportunidades académicas que le permitirán la consecución de sus  intereses y necesidades de formación. Las rutas contienen la  información de asignaturas optativas y de libre elección, que están articuladas a los  objetivos del programa, campos de acción profesional y  perfiles del egresado, facilitando  que el estudiante oriente la elección de asignaturas con miras al ejercicio futuro de su profesión</p>
    {{ Form::open(array('class' => 'unal-form'))}}

        <select name="sede" id="sede"></select><br>
        <select name="facultad" id="facultad"></select><br>
    	<select name="programa" id="programa"></select><br>

    	{{Form::submit('Continuar', array('id' => 'submitbutton'));}}
    {{ Form::close()}}

    <p>{{Session::get('message');}}</p>

    <script>
        $(document).ready(function(){

            $("#submitbutton").attr("disabled", true);

            $("#programa").focus(function(){$("#submitbutton").attr("disabled", false);});

            $("#sede").jCombo({
                url: "{{url('sedes')}}",
                initial_text: "1. Seleccione la sede.",
            });
            
            $("#facultad").jCombo({
                url: "{{url('facultades')}}", 
                input_param: "option",
                initial_text: "2. Seleccione la facultad.",
                parent: "#sede",
            });

            $("#programa").jCombo({
                url: "{{url('programas')}}", 
                input_param: "option",
                initial_text: "3. Seleccione el programa.",
                parent: "#facultad",
            });
        }); 
    </script>

    <!-- Sección Cargando !!!
    <section id="cargando">
        <section class="selected">
            <h2>Preparando el contenido</h2>
            <strong>Tarea: Se están cargando los programas</strong>
        </section>
    </section>
    <!-- Fin Cargando -->
@stop

@section('right')
    <nav class="menuright">
        {{ $MenuPrincipal->asUl( array('class' => 'awesome-ul') ) }}
    </nav>
@stop

@section('scripts')
    {{-- HTML::script('unal/js/jpreloader/loading.js') --}}
@stop