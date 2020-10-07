<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inicio de Sesion</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" >
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

	 <?php require 'partials/header.php'?>

	<h1>Inicio de Sesion</h1>
<span>O  <a href="Registrarse.php">Registrarse</a></span>

<form action="Login.php" method="post"></form>
<input type="text" name="email" placeholder="Ingrese su Correo">
<input type="password" name="password" placeholder="Ingrese su Contraseña">
<input type="submit" value="Enviar">
</body>
</html>