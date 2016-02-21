@extends('layouts.master')

@section('breadcrumb')
	<h4>Formulario de contácto</h4>
@stop


@section('content')
    {{ Form::open(array('class' => 'contacto'))}}
    	{{ Form::label('nombre', 'Nombre: ') }}
        {{ Form::text('nombre', null, ['placeholder' => 'Escriba su nombre']) }} <br>

        {{ Form::label('email', 'Email: ') }}
        {{ Form::text('email', null, ['placeholder' => 'Escriba su correo']) }} <br>

        {{ Form::label('comentario', 'Inquietud: ') }}
        {{ Form::textarea('comentario', null, ['placeholder' => 'Escriba su inquietud']) }} <br>

    	{{Form::submit('Enviar', array('id' => 'submitbutton', 'class' => 'buttoncontacto')) }}
    {{ Form::close()}}
@stop

@section('right')
    <nav class="menuright">
        {{ $MenuPrincipal->asUl( array('class' => 'awesome-ul') ) }}
    </nav>
@stop

