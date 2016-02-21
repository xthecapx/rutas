<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie lang_0" id="html"> <![endif]-->
<!--[if IE 7]> <html class="no-js ie7 oldie lang_0" id="html"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 oldie lang_0" id="html"> <![endif]-->
<!--[if gt IE 8]> <!-->
<html class="no-js ie9 lang_0" id="html">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="{{asset('unal/images/favicon.ico')}}" type="image/x-icon; charset=binary">
		<link rel="icon" href="{{asset('unal/images/favicon.ico')}}" type="image/x-icon; charset=binary">
		<title>Universidad Nacional de Colombia: Titulo página</title>
		<meta name="revisit-after" content="1 hour">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=0.5, maximum-scale=2.5, user-scalable=yes">
		<base href="">
		<link rel="stylesheet" type="text/css" href="{{asset('unal/css/bootstrap.min.css')}}" media="all">
		<link rel="stylesheet" type="text/css" href="{{asset('unal/css/reset.css')}}" media="all">
		<link rel="stylesheet" type="text/css" href="{{asset('unal/css/unal.css')}}" media="all">
		<link rel="stylesheet" type="text/css" href="{{asset('unal/css/base.css')}}" media="all">
		<link rel="stylesheet" type="text/css" href="{{asset('unal/css/tablet.css')}}" media="only screen and (min-width: 768px) and (max-width: 1224px)">
		<link rel="stylesheet" type="text/css" href="{{asset('unal/css/small.css')}}" media="only screen and (max-width: 767px)">

		<!--<link rel="stylesheet" type="text/css" href="{{asset('unal/js/jqueryUI/jquery-ui.structure.min.css')}}" media="all">
		<link rel="stylesheet" type="text/css" href="{{asset('unal/js/jqueryUI/jquery-ui.theme.min.css')}}" media="all">
		<link rel="stylesheet" type="text/css" href="{{asset('unal/js/jqueryUI/jquery-ui.min.css')}}" media="all"> -->

		<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
		{{HTML::script('unal/js/jquery-2.1.1.min.js') }}
		{{HTML::script('unal/js/jquery.jCombo.min.js') }}
		{{HTML::script('unal/js/Chart/Chart.js') }}
		{{HTML::script('unal/js/jpreloader/jpreloader.min.js') }}

		<!--{{HTML::script('unal/js/jqueryUI/jquery-ui.min.js') }}-->

		<!-- acciones para formularios con la clase ".unal-form" -->
		<link rel="stylesheet" type="text/css" href="{{asset('unal/css/form.css')}}" media="all">
		<link rel="stylesheet" type="text/css" href="{{asset('unal/css/bootstrap-select.min.css')}}" media="all">

		<!--[if lt IE 8]><!-->
		<link rel="stylesheet" href="{{asset('unal/css/ie7/ie7.css')}}">
		<!--<![endif]-->

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-69290709-1', 'auto');
			ga('send', 'pageview');
		</script>
	</head>
	<body>
	@section('header')
			<header id="unalTop">
			<div class="logo">
				<a href="http://unal.edu.co">
				<img alt="Escudo de la Universidad Nacional de Colombia" src="{{asset('unal/images/escudoUnal.png')}}" width="189" height="70" title="Escudo de la Universidad Nacional de Colombia"/>
				</a>
				<div class="diag">
				</div>
			</div>
			<div class="seal">
				<img alt="Escudo de la República de Colombia" src="{{asset('unal/images/sealColombia.png')}}" width="66" height="66" title="Escudo de la República de Colombia"/>
			</div>
			<div class="firstMenu">
				<ul class="socialLinks">
					<li><a href="https://twitter.com/unimedios" target="_blank" class="twitter" title="Cuenta oficial en Twitter"></a></li>
					<li><a href="https://www.facebook.com/pages/Agencia-de-Noticias-UN/193658967327822" target="_blank" class="facebook" title="Página oficial en Facebook"></a></li>
					<li><a href="http://www.agenciadenoticias.unal.edu.co/nc/sus/type/rss2.html" target="_blank" class="rss" title="Suscripción a canales de información RSS"></a></li>
				</ul>
				<div class="navbar-default">
					<nav class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="item_Aspirantes"><a href="http://aspirantes.unal.edu.co" target="_top">Aspirantes</a></li>
						<li class="item_Estudiantes"><a href="http://estudiantes.unal.edu.co" target="_top">Estudiantes</a></li>
						<li class="item_Egresados"><a href="http://egresados.unal.edu.co" target="_top">Egresados</a></li>
						<li class="item_Docentes"><a href="http://docentes.unal.edu.co" target="_top">Docentes</a></li>
						<li class="item_Administrativos"><a href="http://administrativos.unal.edu.co" target="_top">Administrativos</a></li>
					</ul>
					</nav>
				</div>
			</div>
			<div class="navigation">
				<div class="site-url">
					<div class="icon">
					</div>
					rutas.unal.edu.co
				</div>
			</div>
		</header>
    @show
	<main class="detalle">
		<div class="breadcrumb-class">
			{{--Está en:&nbsp;<a href="http://unal.edu.co" target="_self" title="Inicio">Inicio</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="#" target="_self" title="La Universidad">Sección</a>&nbsp;&nbsp;/&nbsp;&nbsp;<b>Página</b>--}}
			@yield('breadcrumb')
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-8">
				<div class="central">
					@yield('content')
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 rightside">
				@yield('right')
			</div>
		</div>
	</main>
	<footer>
		<div class="row">
			<div class="col-md-3 col-lg-3 col-sm-3 col-xs-6 gobiernoLinea">
				<div class="navbar-">
					<div class="btn-group">
						<a href="http://www.legal.unal.edu.co" target="_top">Régimen Legal</a>
					</div>
					<div class="btn-group">
						<a href="http://www.unal.edu.co/dnp" target="_top">Talento humano</a>
					</div>
					<div class="btn-group">
						<a href="http://www.unal.edu.co/contratacion/" target="_top">Contratación</a>
					</div>
					<div class="btn-group">
						<a href="http://www.unal.edu.co/dnp/" target="_top">Ofertas de empleo</a>
					</div>
					<div class="btn-group">
						<a href="http://www.unal.edu.co/rendicion_de_cuentas/2012/" target="_top">Rendición de cuentas</a>
					</div>
					<div class="btn-group">
						<a href="http://www.concursoprofesoralun.unal.edu.co/ConcursoDocente/news.php" target="_top">Concurso docente</a>
					</div>
					<div class="btn-group">
						<a href="http://www.pagovirtual.unal.edu.co/" target="_top">Pago Virtual</a>
					</div>
					<div class="btn-group">
						<a href="http://www.unal.edu.co/control_interno/index.html" target="_top">Control interno</a>
					</div>
					<div class="btn-group">
						<a href="http://www.simege.unal.edu.co" target="_top">Calidad</a>
					</div>
					<div class="btn-group">
						<a href="http://unal.edu.co/buzon-de-notificaciones/" target="_self">Buzón de notificaciones</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-lg-3 col-sm-3 col-xs-6 gobiernoLinea gobiernoLinea2">
				<div class="navbar-">
					<div class="btn-group">
						<a href="http://correo.unal.edu.co" target="_top">Correo institucional</a>
					</div>
					<div class="btn-group">
						<a href="http://unal.edu.co/mapa-del-sitio/" target="_self">Mapa del sitio</a>
					</div>
					<div class="btn-group">
						<a href="http://redessociales.unal.edu.co" target="_top">Redes Sociales</a>
					</div>
					<div class="btn-group">
						<a href="http://unal.edu.co/faq/" target="_self">FAQ</a>
					</div>
					<div class="btn-group">
						<a href="http://unal.edu.co/quejas-y-reclamos/" target="_self">Quejas y reclamos</a>
					</div>
					<div class="btn-group">
						<a href="http://unal.edu.co/atencion-en-linea/" target="_self">Atención en línea</a>
					</div>
					<div class="btn-group">
						<a href="http://unal.edu.co/encuesta/" target="_self">Encuesta</a>
					</div>
					<div class="btn-group">
						<a href="http://unal.edu.co/contactenos/" target="_self">Contáctenos</a>
					</div>
					<div class="btn-group">
						<a href="http://www.onp.unal.edu.co" target="_top">Estadísticas</a>
					</div>
					<div class="btn-group">
						<a href="http://unal.edu.co/glosario/" target="_self">Glosario</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 footer-info col-lg-4 col-sm-4 col-xs-12">
				<div class="csc-frame csc-frame-indent">
        <p class="bodytext">
          <b>Contacto página web:<br/></b>
          Dirección<br/>
          Edif. Uriel Gutierrez - Of. 511<br/>
          Bogotá D.C., Colombia<br/>
          (+57 1) 316 5000  Ext. 18238
        </p>
				</div>
				<div class="csc-frame csc-frame-indent">
					<p class="bodytext">
						© Copyright 2014<br/>Algunos derechos reservados.<br/>
						<a href="mailto:sis_acompa_nal@unal.edu.co@unal.edu.co" title="Comuníquese con el webmaster del sistema de acompañamiento estudiantil" class="mail">sis_acompa_nal@unal.edu.co</a><br/><a href="http://unal.edu.co/acerca-de-este-sitio-web/" title="Acerca de la web de la Universidad Nacional de Colombia" target="_blank" class="internal-link">Acerca de este sitio web<br/></a>
					</p>
					<div class="csc-default">
						<p>
							Actualización: 01/06/2015
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 logos">
				<a href="http://www.orgulloun.unal.edu.co"><img alt="Orgullo UN" src="{{asset('unal/images/log_orgullo.png')}}" width="78" height="21" title="Orgullo UN"/></a>
				<a href="http://www.agenciadenoticias.unal.edu.co/inicio.html" class="imgAgencia"><img alt="Agencia de Noticias" src="{{asset('unal/images/log_agenc.png')}}" width="78" height="21" title="Agencia de Noticias"/></a>
				<div class="clear">
				</div>
				<a href="http://www.gobiernoenlinea.gov.co/web/guest"><img alt="Programa gobierno en línea" src="{{asset('unal/images/log_gobiern.png')}}" width="67" height="51" title="Programa gobierno en línea"/></a>
				<a href="http://www.contaduria.gov.co/"><img alt="Contaduría general de la republica" src="{{asset('unal/images/log_contra.png')}}" width="67" height="51" title="Contaduría general de la republica"/></a>
			</div>
		</div>
	</footer>
		@yield('scripts')
	</body>
</html>