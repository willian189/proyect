<?php
include("conexion.php");
$id_emp=$_POST['id_emp'];
$empresa=$_POST['empresa'];
$requiere=$_POST['requiere'];
$descripcion=$_POST['descripcion'];
$contacto=$_POST['contacto'];
$email=$_POST['email'];
$sql="UPDATE empleo SET nomEmp_emp='$empresa', reque_emp='$requiere', obs_emp='$descripcion', tel_emp='$contacto', email_emp='$email', fecha_emp=now() WHERE id_emp='$id_emp'";
 $query=mysqli_query($conexion,$sql);
 if($query){
     echo'REGISTRO ACTUALIZADO';
     header("location:acces.php");
 } else{
     echo'ERROR AL ACTUALIZAR';
 }

 
?>