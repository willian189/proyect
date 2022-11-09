<?php
include("conexion.php");

$empresa=$_POST['empresa'];
$requiere=$_POST['requiere'];
$descripcion=$_POST['descripcion'];
$contacto=$_POST['contacto'];
$email=$_POST['email'];

$encargado=$_POST['encargado'];
$estado=$_POST['estado'];

$sql="INSERT INTO empleo(nomEmp_emp, reque_emp, obs_emp, tel_emp, email_emp, fecha_emp) VALUES
('$empresa', '$requiere', '$descripcion', '$contacto', '$email', now())";
 $query=mysqli_query($conexion,$sql);
 if($query){
     echo'EMPLEO REGISTRADO';
     header("location:acces.php");
 } else{
     echo'ERROR AL REGISTRAR';
 }
 include("cerrar_conexion.php");
?>