<?php
if(isset($_POST['validar'])){
    if(empty($cedu_man)){
        echo "CAMPO CEDULA VACIO";
    }
    if(empty($clave_man)){
        echo "CAMPO CLAVE VACIO";
    }
}
?>