<?php
include("conexion.php");
$cedula1 =$_POST['cedula1'];
$nombre1 =$_POST['nombre1'];
$email1 =$_POST['email1'];
$sql="SELECT * FROM usuario WHERE cedula_usu = '$cedula1' AND nombre_usu = '$nombre1' AND email_usu = '$email1'";
$resul = $conexion->query($sql);
$row = $resul->fetch_assoc(); 
if($row['cedula_usu'] == $cedula1 && $row['nombre_usu'] == $nombre1 && $row['email_usu'] == $email1){
   echo"<p> *DATOS CORRECTOS</p>"; 
  
   
   
}else{
     
    header("location:index.php"); 
}
   
    
include("cerrar_conexion.php");
 

?>