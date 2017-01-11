<!DOCTYPE html>
<html>
<head>
	<title>Tasks</title>
	
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel='stylesheet' href="{{ elixir('css/app.css') }}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	@yield('header')
</head>
<body>
<div class="container">
	@yield('content')
	</div>
</body>
</html>
@yield('footer')