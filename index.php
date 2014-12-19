<? include("conf/config.php"); ?>
<!doctype html>
<html>

	<head>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>MyPanell CMS - Administrador de sitios web</title>

		<base href="<?=$pow['global']['base']?>" />

		<script src="js/vendor/jquery.js"></script>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<script src="js/bootstrap.min.js"></script>

		<!-- Estilos y scripts propios -->
		<link rel="stylesheet" href="css/estilos.css" />

	</head>

	<body>

		<nav class="navbar navbar-inverse" role="navigation">

			<div class="container-fluid">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9">

						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>

					</button>

					<a class="navbar-brand" href="#"><span>Panel</span>Frank <b>3.1.0</b></a>

				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">

					<ul class="nav navbar-nav">
						<li class="active"><a href="#" class=" ">Resumen</a></li>
						<li><a href="#" class="">Modulos</a></li>
						<li><a href="#" class=" ">Apariencia</a></li>
						<li><a href="#" class=" ">Seguridad</a></li>
						<li><a href="#" class=" ">Configuración</a></li>
						<li><a href="#" class=" ">Logout</a></li>
					</ul>

				</div><!-- /.navbar-collapse -->

			</div><!-- /.container-fluid -->

		</nav>

		<ol class="breadcrumb">
			<li><a href="#">MyPanell.com</a></li>
			<li><a href="#">Módulos</a></li>
			<li><a href="#">Pruebas</a></li>
			<li class="active">Crear</li>
		</ol>

		<section>

			<div class="page-header">
				<h1>Notas cargadas en el sistema <small></small></h1>
			</div>

			<? include("inc/admin-template.php"); ?>

		</section>

		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container footer-text">
				Copyright 2014 &copy; Producto Web Desarrollos
			</div>
		</nav>


	</body>

</html>
