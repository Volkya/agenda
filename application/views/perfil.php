

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Perfil</title>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- ... -->
		<script type="text/javascript" src="<?php echo base_url('js/jquery-3.3.1.min.js') ?>"></script>
		<link rel="stylesheet" href="<?php echo base_url('css/bootstrap-datetimepicker.min.css') ?>">
		<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css') ?>" >
		<link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css') ?>">
		<link rel="stylesheet" href="<?php echo base_url('css/calendario.css') ?>">

	</head>
</head>
<body>
	<!--Navbar-->
	<nav class="navbar navbar-inverse navbar-fixed-top" style="background: #1c1a1a;">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Agenda Notificadora</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Inicio</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url('user/close/login') ?>">Cerrar Sesion</a></li>
							<li><a href="#">Cerrar Sesion en Todos los dispositivos</a></li>
							<li role="separator" class="divider"></li>
							<li class="dropdown-header">Configuraciones</li>
							<li><a href="#">Archivos</a></li>
							<li><a href="#">Correo</a></li>
							<li><a href="#">Colores</a></li>
							<li><a href="#">Sonidos</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<button style="background: #922f27; border-color: #922f27;" class="btn btn-danger navbar-btn" data-toggle="modal" data-target="#infoNota">Nueva</button>
					<button style="background: #922f27; border-color: #922f27;" class="btn btn-danger navbar-btn">Cambiar vista</button>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>

<!-- Basura de ejemplo -->
<div class="section" style="margin-top: 80px; background-color: #0f0e0e;">
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-12">
				<h3>Marzo</h3>
			</div>
			<div class="col-md-12">
				<div class="table semana">

					<div class="cell-circles">
						<div class="titleDay">Lunes 01</div>	
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center" >
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-success text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
					</div>
					<div class="cell-circles">
						<div class="titleDay">Martes 02</div>	
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center" >
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-success text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
					</div>
					<div class="cell-circles">
						<div class="titleDay">Miercoles 03</div>	
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center" >
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-success text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
					</div>
					<div class="cell-circles">
						<div class="titleDay">Jueves 04</div>	
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center" >
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-success text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
					</div>
					<div class="cell-circles">
						<div class="titleDay">Viernes 05</div>	
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center" >
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-success text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
					</div>
					<div class="cell-circles">
						<div class="titleDay">Sabado 06</div>	
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center" >
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-success text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
					</div>
					<div class="cell-circles">
						<div class="titleDay">Domingo 07</div>	
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center" >
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-success text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="table semana">

					<div class="cell-circles">
						<div class="titleDay">Lunes 01</div>	
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center" >
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-success text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
					</div>
					<div class="cell-circles">
						<div class="titleDay">Martes 02</div>	
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center" >
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-success text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
					</div>
					<div class="cell-circles">
						<div class="titleDay">Miercoles 03</div>	
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center" >
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-success text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
					</div>
					<div class="cell-circles">
						<div class="titleDay">Jueves 04</div>	
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center" >
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-success text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
					</div>
					<div class="cell-circles">
						<div class="titleDay">Viernes 05</div>	
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center" >
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-success text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
					</div>
					<div class="cell-circles">
						<div class="titleDay">Sabado 06</div>	
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center" >
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-success text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
					</div>
					<div class="cell-circles">
						<div class="titleDay">Domingo 07</div>	
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center" >
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-success text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="table semana">

					<div class="cell-circles">
						<div class="titleDay">Lunes 01</div>	
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center" >
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-success text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
					</div>
					<div class="cell-circles">
						<div class="titleDay">Martes 02</div>	
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center" >
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-success text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
					</div>
					<div class="cell-circles">
						<div class="titleDay">Miercoles 03</div>	
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center" >
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-success text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
					</div>
					<div class="cell-circles">
						<div class="titleDay">Jueves 04</div>	
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center" >
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-success text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
					</div>
					<div class="cell-circles">
						<div class="titleDay">Viernes 05</div>	
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center" >
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-success text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
					</div>
					<div class="cell-circles">
						<div class="titleDay">Sabado 06</div>	
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center" >
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-success text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
					</div>
					<div class="cell-circles">
						<div class="titleDay">Domingo 07</div>	
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center" >
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-success text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-primary btn-sm text-center">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
						<span data-toggle="modal" data-target="#infoNota" type="button" class="bg-primary btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#info-nota">
						<span class="default">o</span><div class="title">casa 1</div>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	<!--
	<div class="container">
	    <div class="col-sm-6" style="height:130px;">
	        <div class="form-group">
	            <div class='input-group date' id='datetimepicker9'>
	                <input type='text' class="form-control" />
	                <span class="input-group-addon">
	                    <span class="glyphicon glyphicon-calendar">
	                    </span>
	                </span>
	            </div>
	        </div>
	    </div>
	</div>
	-->
  <!-- Modal -->  

<!--Modal header -->
<div class="modal fade in" id="infoNota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Cree su formulario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      	
<!--Modal content -->
<div class="modal-body">
	<div class="row">
	<div class="col-sm-12" style="">
		<form class = "form asincr" action="<?php echo base_url('note/new')?>" name="newNote">
			<div class="form-group">
				<label><b>Nombre de la tarea:</b></label>
				<input type="text" class="form-control" placeholder="Nombre de la tarea" name="title">
			</div>

		<div class="form-group" id="status">
			<label><b>Estado:</b></label><br>
			<select class="form-control">
				<option>Concluido</option>
				<option>Abandonado</option>
				<option >En proceso</option>
			</select>
		</div>

		<div class="form-group" id="clockDateTime">
			<label><b>Seleccione hora y fecha</b></label><br>
			<div class="input-group date" id="datetimepicker9">
		<input type="text" class="form-control" placeholder="Ingrese el horario">
		<span class="input-group-addon">
			<span class="glyphicon glyphicon-calendar">
			</span>
		</span>
		</div>
		</div>

	<div class="form-group">
				<label><b>Participantes</b></label>
				<input type="text" class="form-control" placeholder="Nombre de la tarea" name="">
	</div>

	 <div class="form-group" id="files">
	    <label for="siqueres">Seleccione sus archivos</label>
	    <input type="file" class="siqueres" id="siqueres">
	</div>
	 
	 	<div class="form-group" id="alertSound">
	<label><b>Seleccione un sonido:</b></label>
	<select class="form-control">
		<option>Scoby do pa pa</option>
		<option>Cumbia villera</option>
		<option>El marcianito</option>
		<option>Daniel el travieso se la come</option>
	</select>
	</div>

	<div class="form-group" id="clockSound">
	<label><b>Seleccione un sonido:</b></label>
	<select class="form-control">
		<option>Pija 1</option>
		<option>Pija 2</option>
		<option>Pija 3</option>
		<option>Pija 4</option>
	</select>
	</div>

	<div class="form-group">
	<label>Descripcion</label><br>
	<textarea rows="6" cols="50" placeholder="Ingrese una descripcion de la tarea" name="description"></textarea>
	</div>

	<div class="form-group">
			<label><b>Recordatorio</b></label><br>
			<textarea rows="6" cols="50" placeholder="No te olvides lo que tenes que hacer pedazo de boludo"></textarea>
			</div>
		</form>
	      </div>
	       </div>
	       </div>


<!-- Footer modal -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    	
  </div>
</div>

</body>
	<script type="text/javascript">
	    $(function () {
	        $('#datetimepicker9').datetimepicker({
	            viewMode: 'years'
	        });
	    });
	</script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/moment.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/server.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/datepicker.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/calendario.js') ?>"></script>
</html>