<?php
include("conexion.php");
$cedula_usu=$_POST['cedula2'];
$pass_usu=$_POST['password2'];
$id_emp=$_POST['codigo2'];
$smg=$_POST['mifile'];
$asunto = 'Solicitud de empleo';

$sql3="SELECT email_usu FROM usuario WHERE cedula_usu = '$cedula_usu' AND pass_usu = '$pass_usu'";
$resul3 = $conexion->query($sql3);

if($resul3->num_rows>0){
    $sql4="SELECT email_emp FROM empleo WHERE '$id_emp'";
    $resul4 = $conexion->query($sql4);
    if($resul4->num_rows > 0){
       
       $header = "From: '$sql3'"."\r\n";
       $header.= "Reply-To: '$sql3'"."\r\n";
       $header .= "X-Mailer: PHP/". phpversion();
       $mail = @mail($sql4,$asunto,$smg,$header);

    }else{
        echo('Código de empleo erroneo');
    }
    
}else{
    echo('Datos de usuario incorrectos');
}

include("cerrar_conexion.php");
 

?>