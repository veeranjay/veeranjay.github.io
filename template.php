<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" href="Resources\style.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="icon" href="Resources\home-page.png">
	<style>
		body::-webkit-scrollbar {
			font-family: Open Sans;
			display: none;
			-ms-overflow-style: none;
  		scrollbar-width: none;
		}
		.background-image{
			width: 100%;
			height: 500px;
			padding-bottom: 700px;
			background-image: url(Resources/Banner.png);
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			background-attachment: fixed;
		}
		.mid-section{
			margin-top: 10px;
			background-color: #1c1c1c;
			width: 100%;
			height: 710px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<img class="navbar-brand" src="Resources/icon-white.png" alt="image"></img>
		</div>
		<ul class="nav navbar-nav">
			<li class="active"><a href="#">Home</a></li>
			<li><a href="#">Portfolio</a></li>
			<li><a href="#">Projects</a></li>
		</ul>
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="Login.html"><span class="image"></span> Login</a></li>
	    </ul>
	  </div>
	</nav>

<div class="background-image"></div>

<div class="mid-section"></div>
</body>
</html>
