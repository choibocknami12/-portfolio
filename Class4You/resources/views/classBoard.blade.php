<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="/css/common.css">
	{{-- <title>@yield('title', 'classBoard')</title> --}}
	<title>Class 4 You</title>
	<script src="{{ asset('js/app.js') }}" defer></script>
	<link rel="icon" href="/img/favicon.png" type="image/x-icon">
</head>
<body>
		<div id="app">
			<Header-Component></Header-Component>
			@yield('classBoardMain')
			<Footer-Component></Footer-Component>
		</div>
</body>
</html>