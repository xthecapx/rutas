@extends('layouts.master')

@section('breadcrumb')
  <h4>Bienvenido al sistema de Video Tutoriales</h4>
@stop


@section('content')
  <div class="idcard">
    <div class="idcard_content">
      <div class="idcard_head">
        Video tutoriales disponibles
      </div>
      <div class="perfiles">
        xxx
      </div>
    </div>
  </div>
@stop

@section('right')
    <nav class="menuright">
        {{ $MenuPrincipal->asUl( array('class' => 'awesome-ul') ) }}
    </nav>
@stop