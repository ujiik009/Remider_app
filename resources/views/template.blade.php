<!DOCTYPE html>
<html>
<head>
	<title>Note Taking App</title>
	<link rel="stylesheet" type="text/css" href="{{asset("css/app.css")}}">
</head>

<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">Taking App</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="#">Home</a></li>
	     
	    </ul>
	  </div>
	</nav>
	
	<div class="container">
		@yield('content')
	</div>
<script type="text/javascript" src"{{asset("js/app.js")}}"></script>
</body>
</html>