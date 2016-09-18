<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Admin Theme v3</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- styles -->
	<link href="css/styles.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
</head>
<body>
	

	<!-- TIMEOUT -->
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
		var_dump($_SESSION);
	?>

	<nav class="navbar navbar-default navbar-static-top" style="background-color:#fff">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<img src="img/logo.png" alt="logo" height="25px">
				</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				
				<span class="nav navbar-nav navbar-right">
					<ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Admin DEV <b class="caret"></b></a>
              <ul class="dropdown-menu animated fadeInUp">
                <li><a href="#" id="editar" data-url=""><span class="glyphicon glyphicon-pencil"></span> Perfil</a></li>
                <li><a href="#" id="sair"><span class="glyphicon glyphicon-off"></span> Sair</a></li>
              </ul>
            </li>
          </ul>
				</span>
			</div>
		</div>
	</nav>			

	<div class="page-content">
		<div class="row">
			<div class="col-md-2">
				<div class="sidebar content-box" style="display: block;">
					<ul class="nav nav-sidebar">
						<!-- Main menu -->
						<li class="current"><a href="#" data-url=""><i class="glyphicon glyphicon-home"></i> Opção Home</a></li>
						<li><a href="#" data-url="formularios/relatorios.php"><i class="glyphicon glyphicon-th-list"></i> Relatórios</a></li>
						<li><a href="#" data-url="formularios/form-teste2.html"><i class="glyphicon glyphicon-th-list"></i> Opção Teste 2</a></li>
						<li><a href="#" data-url="formularios/form-teste.html"><i class="glyphicon glyphicon-th-list"></i> Opção Teste 3</a></li>
					</ul>
				</div>
			</div>
			<div id="conteudo" class="col-md-10">
				<div class="content-box-header">
					<h4>Página que muda</h4>
				</div>
				<div class="content-box-large box-with-header">
					<p class="lead">Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laborum, quaerat, officia, ullam tenetur magni accusamus nemo reprehenderit dignissimos qui, quo expedita ipsum alias ut placeat quis natus. In, enim.</p>	
				</div>	
			</div>
		</div>
	</div>

	<!-- SCRIPTS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>