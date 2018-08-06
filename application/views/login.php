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
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css') ?>" >
	<link rel="stylesheet" href="<?php echo base_url('css/login.css') ?>" >
</head>
<body>

	<div class="container-fluid">
		<div class="col-md-4 login-container">
			<div class="avatar"></div>
			<div class="form-box">
				<form class="form asincr" data-action="<?php echo base_url('user/') ?>" action=""  method="POST" name="userLogin">
					<div class="form-group">
						<label for="user">Usuario</label>
						<input type="text" class="form-control" id="user" name="user" placeholder="Usuario">
						<small class="form-help text-muted">casa</small>
					</div>
					<div class="form-group">
						<label for="pass">Contraseña</label>
						<input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
						<small class="form-help text-muted">casa</small>
						</div>
					<input class="btn btn-info btn-block login" name="login" type="submit" value="Iniciar Sesion">
					<input class="btn btn-info btn-block login" name="new" type="submit" value="Crear Usuario">
				</form>
			</div>
		</div>
	        
	</div>
	<!-- auxiliares -->
	<input type="hidden" id="base" value="<?php echo base_url() ?>">
</body>
	
	<!-- ... -->
	<script type="text/javascript" src="<?php echo base_url('js/jquery-3.3.1.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/server.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/events.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/users.js') ?>"></script>
</html>
