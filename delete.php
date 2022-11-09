<?php
include("conexion.php");
$cod_emple=$_GET['id'];
$sql="DELETE FROM empleo WHERE id_emp='$cod_emple'";
 $query=mysqli_query($conexion,$sql);
 if($query){
     echo'USUARIO ELIMINADO';
     header("location:acces.php");
 } 
?>