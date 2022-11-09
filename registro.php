<?php
include('conexion.php');
if(isset($_POST['registra'])){
$cedula=$_POST['cedula'];
$consulta="SELECT * FROM usuario WHERE cedula_usu='$cedula'";
$resultado=mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($resultado);
if($filas>0){
    echo'<script>alert("Usuario Existente");</script>';
    

}else{
$nombre=$_POST['nombre'];
$nombre2=$_POST['nombre2'];
$apellido=$_POST['apellido'];
$apellido2=$_POST['apellido2'];
$email =$_POST['email'];
$carrera=$_POST['carrera'];
$nivel=$_POST['nivel'];
$cel =$_POST['celular'];
$pass=$_POST['password'];
$result="INSERT INTO usuario(cedula_usu, nombre_usu, nombre2_usu, apellido_usu, apellido2_usu, email_usu, carrera_idCarrera, nivel_usu, cel_usu, pass_usu) VALUES
('$cedula', '$nombre', '$nombre2', '$apellido', '$apellido2', '$email', '$carrera', '$nivel', '$cel', '$pass')";
 $res=mysqli_query($conexion,$result);
 if($res){
    echo'<script>alert("Usuario Registrado");</script>';
 } else{
    echo'<script>alert("Error al Registrarse");</script>';
 }
}
include("cerrar_conexion.php");
}
