<?php
include("conexion.php");
$cedu_man=$_POST['cedu_man'];
$clave_man=$_POST['clave_man'];

$consulta="SELECT * FROM manejo WHERE cedu_man = '$cedu_man' AND clave_man = '$clave_man'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);
if($filas>0){
   header("location:acces.php");
   
}else{
   ?>
   <?php
    include("index.php");
    ?>
    <swal class="fire">ERROR EN DIJITACION</swal>
    <?php
    
}
mysqli_free_result($resultado);
mysqli_close($conexion);


?>
