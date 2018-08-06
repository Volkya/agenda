<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- ... -->
	<script type="text/javascript" src="<?php echo base_url('js/jquery-3.3.1.min.js') ?>"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo base_url('css/base.css') ?>" >
</head>
<body>
	<?php 
		if( file_exists( base_url('css/base.css') ) ) { echo 'css'; }
		else{echo base_url('css/base.css');}
	 ?>
	<div class="header">
		<nav class="nav-container">
			<h3 class="title">Hola</h3>
			<nav class="nav">
				<li><a href="google.com">Google</a></li>
				<li><a href="google.com">Google</a></li>
				<li><a href="google.com">Google</a></li>
			</nav>
		</nav>
		<div class="backgroundAux"></div>
	</div>
	<div class="container-fluid">
		<div class="col-md-3 login-container">
			<div id="output">hola</div>
			<div class="avatar" style="background-image: url(https://cdn.colorlib.com/wp/wp-content/uploads/sites/2/colorlib-logo-top.png);"></div>
			<div class="form-box">
				<form action="" method="">
					<input name="user" type="text" placeholder="Usuario">
					<input type="password" placeholder="Contraseña">
					<button class="btn btn-info btn-block login" type="submit">Iniciar Sesion</button>
					<button class="btn btn-info btn-block login" type="submit">Crear Usuario</button>
				</form>
			</div>
		</div>
	        
	</div>
</body>
</html>
