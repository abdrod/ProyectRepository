<?php
$server = 'localhost:3307';
$username = 'root';
$password = '';
$database = 'php_login_database';


 
  $conexion=mysqli_connect("localhost"
  	,"root"
  	,""
  	,"php_login_database") 
  or die("Error al conectar".mysqli_error($conexion));
  
 ?>


