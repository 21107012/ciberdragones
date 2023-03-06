<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; charset=UTF-8");

$correo = isset($_POST['correo'])?$_POST['correo'] :'';
$nombre = isset($_POST['nombre'])?$_POST['nombre'] :'';
$a_paterno = isset($_POST['a_paterno'])?$_POST['a_paterno'] :'';
$a_materno = isset($_POST['a_materno'])?$_POST['a_paterno'] :'';
$password = isset($_POST['password'])?$_POST['password'] :'';



$con = new SQLite3('tuvsa.db');

$cs = $con -> query("INSERT INTO registro (correo,nombre,a_paterno,a_materno,password) VALUES('$correo','$nombre','$a_paterno','$a_materno','$password')");


echo'<script> window.location=("login.html") </script>';




?>