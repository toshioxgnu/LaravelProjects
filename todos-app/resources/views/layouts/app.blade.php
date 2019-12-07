<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  	<a class="navbar-brand" href="/">Todos App</a>
	 
		<div class="navbar-item">
		
			<ol class="breadcrumb" style="background-color: transparent; padding-bottom: 0px;">
				<li class="breadcrumb-item active" aria-current="page"><a href="/todos">todos</a></li>
				@yield('name')
			</ol>


		</div>
	    
   </nav>

	<div class="container">
		@yield('content')
	</div>

	<script src="js/app.js"></script>
	
</body>
</html>