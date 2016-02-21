@extends('layouts.master')

@section('breadcrumb')
    <h4>Bienvenido al sistema de Rutas Curriculares, indentificate para comenzar</h4>

    @if (isset($message))
    <div class="alert alert-info">
      <strong>{{ $message}} </strong>
    </div>
    @endif

    @if (isset($error))
    <div class="alert alert-danger">
      <strong>{{$error}} </strong>
    </div>
    @endif
@stop

@section('content')
    {{ Form::open(array( 'url' => 'login', 'class' => 'unal-form'))}}
            {{ Form::label('user', 'Usuario: ') }}
            {{ Form::text('user' , Input::old('username'),  array('placeholder'=>'Ingrese usario sin @unal.edu.co') ) }}

            {{ Form::label('pass', 'contraseña: ') }}
            {{ Form::password('pass', array('placeholder'=>'Ingrese la contraseña')) }}

      {{Form::submit('Continuar', array('id' => 'submitbutton'));}}
    {{ Form::close()}}

@stop

@section('right')
    <nav class="menuright">
        {{ $MenuPrincipal->asUl( array('class' => 'awesome-ul') ) }}
    </nav>
@stop