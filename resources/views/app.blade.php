<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset("css/mdl-custom.css") }}">
	<link rel="stylesheet" href="{{ asset("css/jquery.fancybox-1.3.4.css") }}">

	<link rel="stylesheet" href="{{ asset("css/app.css") }}">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	
	{!! HTML::style('css/trumbowyg.css') !!}
	
		<!-- Scripts -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="{{ bodyClass() }}">
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
	<header class="mdl-layout__header" id="header">
		<div class="mdl-layout__header-row">
			<!-- Title -->
			<span class="mdl-layout-title">Team 007</span>
			<img src="/img/logo.png"  width="35" class="logo"/>
			<!-- Add spacer, to align navigation to the right -->
			<div class="mdl-layout-spacer"></div>
			<!-- Navigation. We hide it in small screens. -->
			@if (Auth::check())
			<nav class="mdl-navigation mdl-layout--large-screen-only">
				<a class="mdl-navigation__link" href="/auth/logout">Logout</a>
			</nav>
			@else
			<nav class="mdl-navigation mdl-layout--large-screen-only">
				<a class="mdl-navigation__link" href="/">Login</a>
			</nav>
			@endif
		</div>
	</header>
	@if (Auth::check())
	<div class="mdl-layout__drawer">
		<span class="mdl-layout-title">Bonjour {!! Auth::user()->name !!}</span>
		
		@if (Auth::user()->group_id == 1)
		<nav class="mdl-navigation">
			<a class="mdl-navigation__link" href="/home/index">Accueil</a>
			<a class="mdl-navigation__link" href="/lessons/add">Ajouter un cours</a>
			<a class="mdl-navigation__link" href="/notes">Ajouter des notes</a>
			<a class="mdl-navigation__link" href="/infos/create">Ajouter un flash info</a>
			<a class="mdl-navigation__link" href="/users/create">Ajouter un utilisateur</a>
			<a class="mdl-navigation__link" href="/users">Liste des utilisateurs</a>
		</nav>
		@endif
	</div>
	@endif
	@yield('content')
</div>
<!-- Scripts -->

<script src="/js/jquery-1.10.1.min.js"></script>

<script src="/js/jquery.mousewheel-3.0.4.pack.js"></script>

<script src="/js/jquery.fancybox.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="https://storage.googleapis.com/code.getmdl.io/1.0.1/material.min.js"></script>


<script src="/js/wow.min.js"></script>

<script src="/js/main.js"></script>



</body>
</html>
