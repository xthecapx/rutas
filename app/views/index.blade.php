@extends('layouts.master')

@section('breadcrumb')
	<h4><strong>{{Session::get('name_user')}}</strong> Bienvenido al sistema de Rutas Curriculares {{link_to_action('LoginController@logout', "Cerrar sesión", array(), array('class' => 'btn btn-default btn-sm')) }}</h4>

  @if (isset($message))
    <div class="alert alert-success">
      <strong>{{ $message}} </strong>
    </div>
  @endif
@stop

@section('content')
	<div id="owl-demo" class="owl-carousel" style="text-align: center;">
		<div class="item"><img src="{{asset('unal/images/Sedes.png')}}"></img></div>
		<div class="item"><img src="{{asset('unal/images/banner1.png')}}"></img></div>
		<div class="item"><img src="{{asset('unal/images/banner2.png')}}"></img></div>
		<div class="item"><img src="{{asset('unal/images/banner3.png')}}"></img></div>
		<div class="item"><img src="{{asset('unal/images/banner4.png')}}"></img></div>
	</div>
@stop

@section('right')
	<nav class="menuright">
    	{{ $MenuPrincipal->asUl( array('class' => 'awesome-ul') ) }}
    </nav>
@stop

@section('scripts')
	{{ HTML::script('unal/css/owl-carousel/owl.carousel.min.js') }}
	{{ HTML::style('unal/css/owl-carousel/owl.carousel.css') }}
	{{ HTML::style('unal/css/owl-carousel/owl.theme.css') }} 
	{{ HTML::style('unal/css/owl-carousel/owl.transitions.css') }}
	<script>
		$(document).ready(function() {
		  $("#owl-demo").owlCarousel({
		    autoPlay : 5000,
		    stopOnHover : true,
		    navigation:false,
		    paginationSpeed : 1000,
		    goToFirstSpeed : 2000,
		    singleItem : true,
		    autoHeight : true,
		    transitionStyle:"fade"
		  });
		 
		});
	</script>
@stop