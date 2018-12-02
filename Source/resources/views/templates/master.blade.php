<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
	<title>Investindo</title>
	<link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
	<link href="{{ asset('css/fredoka-one.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-awesome-4.7.0/css/font-awesome.css') }}" rel="stylesheet">
	@yield('css-view')
</head>
<body>
	@include('templates.menu-lateral')
	
	<section id="view-conteudo">
		@yield('conteudo-view')
	</section>

	@yield('js-view')
</html>