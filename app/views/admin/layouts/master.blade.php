<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Baroko Admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
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