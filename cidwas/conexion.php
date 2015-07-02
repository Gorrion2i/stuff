<?php
//Conectar base de datos con MySQL y PHP
//Club de investigación y Desarrollo Web Acatlán 2015.

// datos para la conexion a mysql
$host='localhost';
$database='BasedeDatos'; //nombre de la base de datos
$username='root'; //usuario de la base de datos
$password='contrasena'; //contraseña de la base de datos

//Nueva forma de conectar la base de datos que incluye la selección
//de la DB  
$link=mysqli_connect ($host, $username, $password, $database);
if(!$link){

	//Mata el proceso y muestra el log del error
	die('Error al conectarse a MySql:'.mysql_error()); 
}
?>
