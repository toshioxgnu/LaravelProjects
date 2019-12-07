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
  <script src="https://kit.fontawesome.com/13f470fb4d.js" crossorigin="anonymous"></script>
</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  	<a class="navbar-brand" href="/">Todos App</a>

	  	<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    	<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      <li class="nav-item active">
	        <a class="nav-link" href="/todos">Todos<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="/new-todo"><i class="fas fa-plus-square"></i></a>
	      </li>

    	</ul>

  </div>

   </nav>

	<div class="container">
		@if(session()->has('success'))
			<div class="alert alert-success alert-dismissible">
					{{ session() -> get('success') }} 
			</div>	
		@endif
		@if(session()->has('danger'))
			<div class="alert alert-danger alert-dismissible">
					{{ session() -> get('danger') }} 
			</div>	
		@endif
		@yield('content')
	</div>

	<script src="js/app.js"></script>
	
</body>
</html>