<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/estilo2.css">
</head>
<body>

	<nav id="" class="navbar navbar-cadastro navbar-static-top navbar-default">
		<div class="container-fluid">
			<div class="text-center">
				<a class="" href="./">
					<img src="img/logo2.png" alt="logo" height="30px">
				</a>
			</div>

		</div>
	</nav>
	<div class="container-fluid">
		<div id="wrapper">

			<!-- Sidebar -->
			<div id="sidebar-wrapper">
				<nav id="spy">
					<ul class="sidebar-nav nav">
						<li class="sidebar-brand">
							<span class="fa col-xs-12 fa-anchor solo">
							<b style="color:#f5f5f5">
								<?php
								session_start();

								if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) 
								{
									// last request was more than 30 minutes ago
									session_unset();     // unset $_SESSION variable for the run-time 
									session_destroy();   // destroy session data in storage
									header("Location: index.html");
								}
								$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
								
		
								
								ECHO isset($_SESSION['user']) ? $_SESSION['user']->login:"NAO";
																
								?>
							</b>
							</span>
						</li>
						<li>
							<a href="#anch1" data-scroll>
								<span class="fa fa-anchor solo">Assistentes</span>
							</a>
						</li>
						
						<li>
							<a href="#anch1" data-scroll>
								<span class="fa fa-anchor solo">Clientes</span>
							</a>
						</li>
						
						<li>
							<a href="#anch2" data-scroll>
								<span class="fa fa-anchor solo">Transações</span>
							</a>
						</li>
						
					</ul>
				</nav>
			</div>

			<!-- Page content -->
			<div id="page-content-wrapper">
			<div class="content-header">
				<h1 id="home">
					<a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">
						<i class="fa fa-bars"></i>
					</a>
				</h1>
			</div>

			<div class="page-content inset" data-spy="scroll" data-target="#spy">
				<div class="row">
					<div class="col-md-12 well">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, accusantium aut cumque, quam incidunt rem quis deleniti similique doloribus totam rerum quasi. Nostrum expedita odio voluptatem repellendus provident quod deleniti.
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 well">
						<legend id="anch1">Anchor 1</legend>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies, metus eget fringilla fermentum, sem justo pulvinar tellus, ac varius neque ante eget mi. Donec cursus nibh ultrices vulputate aliquet. Morbi nulla enim, molestie eu ullamcorper quis, placerat a mauris. Proin vel magna ullamcorper, vulputate leo eu, egestas odio. Vivamus erat leo, egestas in euismod sed, fermentum nec magna. Nunc nisi enim, euismod a tellus sit amet, fermentum adipiscing ipsum. Fusce rhoncus diam ac neque aliquam convallis. Etiam malesuada, nibh id rutrum euismod, enim augue gravida dolor, at vulputate felis mi at magna. Nulla luctus, libero eget luctus gravida, sapien enim varius massa, adipiscing aliquet lacus mi eu eros. Duis pretium laoreet ullamcorper. Aenean in mauris nec libero tincidunt pharetra non et dui. Sed tortor turpis, mollis et tempus eu, auctor laoreet neque. Etiam eu tortor rutrum, rutrum mauris sit amet, hendrerit augue. Sed ut tincidunt nisi. Nam consectetur velit ac pharetra venenatis.</p>
						<p>Donec pellentesque id quam vel iaculis. Phasellus commodo tempor metus, eget sollicitudin odio ultricies id. Proin sed ipsum quis turpis suscipit luctus vitae id urna. Fusce et rhoncus quam. Etiam vel justo ligula. Nullam euismod lacinia risus a pulvinar. Pellentesque sit amet nisl eget ante vulputate feugiat. Suspendisse venenatis magna nunc, mollis facilisis neque condimentum ac. Vivamus non semper dui. Aenean sed eleifend dui. Vivamus a massa aliquam nibh consectetur luctus id at ligula. Nunc ipsum dolor, mollis at sem et, auctor rhoncus ipsum. Nulla faucibus venenatis est sit amet facilisis. In vestibulum nisi at tellus egestas, in pharetra enim fringilla. In ac erat non magna accumsan aliquam.</p>
					</div>
					<div class="col-md-12 well">
						<legend id="anch2">Anchor 2</legend>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies, metus eget fringilla fermentum, sem justo pulvinar tellus, ac varius neque ante eget mi. Donec cursus nibh ultrices vulputate aliquet. Morbi nulla enim, molestie eu ullamcorper quis, placerat a mauris. Proin vel magna ullamcorper, vulputate leo eu, egestas odio. Vivamus erat leo, egestas in euismod sed, fermentum nec magna. Nunc nisi enim, euismod a tellus sit amet, fermentum adipiscing ipsum. Fusce rhoncus diam ac neque aliquam convallis. Etiam malesuada, nibh id rutrum euismod, enim augue gravida dolor, at vulputate felis mi at magna. Nulla luctus, libero eget luctus gravida, sapien enim varius massa, adipiscing aliquet lacus mi eu eros. Duis pretium laoreet ullamcorper. Aenean in mauris nec libero tincidunt pharetra non et dui. Sed tortor turpis, mollis et tempus eu, auctor laoreet neque. Etiam eu tortor rutrum, rutrum mauris sit amet, hendrerit augue. Sed ut tincidunt nisi. Nam consectetur velit ac pharetra venenatis.</p>
						<p>Donec pellentesque id quam vel iaculis. Phasellus commodo tempor metus, eget sollicitudin odio ultricies id. Proin sed ipsum quis turpis suscipit luctus vitae id urna. Fusce et rhoncus quam. Etiam vel justo ligula. Nullam euismod lacinia risus a pulvinar. Pellentesque sit amet nisl eget ante vulputate feugiat. Suspendisse venenatis magna nunc, mollis facilisis neque condimentum ac. Vivamus non semper dui. Aenean sed eleifend dui. Vivamus a massa aliquam nibh consectetur luctus id at ligula. Nunc ipsum dolor, mollis at sem et, auctor rhoncus ipsum. Nulla faucibus venenatis est sit amet facilisis. In vestibulum nisi at tellus egestas, in pharetra enim fringilla. In ac erat non magna accumsan aliquam.</p>
					</div>
					<div class="col-md-12 well">
						<legend id="anch3">Anchor 3</legend>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies, metus eget fringilla fermentum, sem justo pulvinar tellus, ac varius neque ante eget mi. Donec cursus nibh ultrices vulputate aliquet. Morbi nulla enim, molestie eu ullamcorper quis, placerat a mauris. Proin vel magna ullamcorper, vulputate leo eu, egestas odio. Vivamus erat leo, egestas in euismod sed, fermentum nec magna. Nunc nisi enim, euismod a tellus sit amet, fermentum adipiscing ipsum. Fusce rhoncus diam ac neque aliquam convallis. Etiam malesuada, nibh id rutrum euismod, enim augue gravida dolor, at vulputate felis mi at magna. Nulla luctus, libero eget luctus gravida, sapien enim varius massa, adipiscing aliquet lacus mi eu eros. Duis pretium laoreet ullamcorper. Aenean in mauris nec libero tincidunt pharetra non et dui. Sed tortor turpis, mollis et tempus eu, auctor laoreet neque. Etiam eu tortor rutrum, rutrum mauris sit amet, hendrerit augue. Sed ut tincidunt nisi. Nam consectetur velit ac pharetra venenatis.</p>
						<p>Donec pellentesque id quam vel iaculis. Phasellus commodo tempor metus, eget sollicitudin odio ultricies id. Proin sed ipsum quis turpis suscipit luctus vitae id urna. Fusce et rhoncus quam. Etiam vel justo ligula. Nullam euismod lacinia risus a pulvinar. Pellentesque sit amet nisl eget ante vulputate feugiat. Suspendisse venenatis magna nunc, mollis facilisis neque condimentum ac. Vivamus non semper dui. Aenean sed eleifend dui. Vivamus a massa aliquam nibh consectetur luctus id at ligula. Nunc ipsum dolor, mollis at sem et, auctor rhoncus ipsum. Nulla faucibus venenatis est sit amet facilisis. In vestibulum nisi at tellus egestas, in pharetra enim fringilla. In ac erat non magna accumsan aliquam.</p>
					</div>
					<div class="col-md-12 well">
						<legend id="anch4">Anchor 4</legend>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies, metus eget fringilla fermentum, sem justo pulvinar tellus, ac varius neque ante eget mi. Donec cursus nibh ultrices vulputate aliquet. Morbi nulla enim, molestie eu ullamcorper quis, placerat a mauris. Proin vel magna ullamcorper, vulputate leo eu, egestas odio. Vivamus erat leo, egestas in euismod sed, fermentum nec magna. Nunc nisi enim, euismod a tellus sit amet, fermentum adipiscing ipsum. Fusce rhoncus diam ac neque aliquam convallis. Etiam malesuada, nibh id rutrum euismod, enim augue gravida dolor, at vulputate felis mi at magna. Nulla luctus, libero eget luctus gravida, sapien enim varius massa, adipiscing aliquet lacus mi eu eros. Duis pretium laoreet ullamcorper. Aenean in mauris nec libero tincidunt pharetra non et dui. Sed tortor turpis, mollis et tempus eu, auctor laoreet neque. Etiam eu tortor rutrum, rutrum mauris sit amet, hendrerit augue. Sed ut tincidunt nisi. Nam consectetur velit ac pharetra venenatis.</p>
						<p>Donec pellentesque id quam vel iaculis. Phasellus commodo tempor metus, eget sollicitudin odio ultricies id. Proin sed ipsum quis turpis suscipit luctus vitae id urna. Fusce et rhoncus quam. Etiam vel justo ligula. Nullam euismod lacinia risus a pulvinar. Pellentesque sit amet nisl eget ante vulputate feugiat. Suspendisse venenatis magna nunc, mollis facilisis neque condimentum ac. Vivamus non semper dui. Aenean sed eleifend dui. Vivamus a massa aliquam nibh consectetur luctus id at ligula. Nunc ipsum dolor, mollis at sem et, auctor rhoncus ipsum. Nulla faucibus venenatis est sit amet facilisis. In vestibulum nisi at tellus egestas, in pharetra enim fringilla. In ac erat non magna accumsan aliquam.</p>
					</div>
				</div>

				<div class="navbar navbar-default navbar-static-bottom">
					<p class="navbar-text pull-left">
						Built by <a href="http://mvnguyen.com" target="_blank">Michael V Nguyen
					</p>
				</div>
			</div>

		</div>

	</div>
</div>
<!-- SCRIPTS -->
<script src="js/menu.js"></script>
</body>
</html>