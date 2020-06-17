<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	
	<script src="librerias/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.min.css">
	<script src="librerias/bootstrap/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="librerias/fontawesome/css/solid.css">
	<script  src="librerias/fontawesome/js/all.js"></script> <!--load all styles -->
	
	<!-- Nuestro css-->
	<link rel="stylesheet" type="text/css" href="css/index.css">

</head>
<body>

	<div class="modal-dialog text-center">
		<div class="col-sm-8 main-section">
			<div class="modal-content">
				<div class="col-12 user-img">
					<img src="img/avatar.png"/>
				</div>	
				<form class="col-12">
					<div class="form-group" id="usuario-group">
						<input class="form-control" type="text" name="usuario" placeholder="Usuario"/>
					</div>
					<div class="form-group" id="pass-group">
						<input class="form-control" type="password" name="password"  placeholder="Contraseña"/>
					</div>
					<span type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </span>
				</form>
				<div class="col-12 forgot">
					<a href="#">Recordar contraseña</a>
				</div>



			</div>
		</div>	
	</div>	

</body>
</html>