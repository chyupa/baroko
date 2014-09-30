<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Baroko Admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	{{ HTML::style('/assets/css/admin/style.css') }}
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	{{ HTML::script('/assets/js/main.js') }}
</head>
<body>
	@if(Auth::check())
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				@include('admin.layouts.menu')
			</div>
		</nav>
	@endif
	<div class="container">
		@yield('content')
	</div>
</body>
</html>