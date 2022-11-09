<?php
include("conexion.php");
$id=2;
$sql="SELECT * FROM biesis.empleo WHERE id_emp='$id'"; 
$query=mysqli_query($conexion,$sql);
$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estempleo.css">
    <title>Document</title>
</head>

<body>
    <div class="contenedor">
        <div class="card">
            <div class="encabezado">
                <img src="./img/emple1.png" alt="">
            </div>
            <div class="card-icono">
                <li class="agranda"><a href="#"><img src="./img/adelante.ico" alt="" width="40rem"><span class="fabfa"></span></a></li>
                
                <li class="agranda"><a href="#"><img src="./img/atras.ico" alt="" width="40rem"><span class="fabfa"></span></a></li>
            </div>
            <div class="card-contenido">
                <div class="informacion desplaza">Se Requiere
                   <?php echo $row['reque_emp']?>
                   </div>
                <div class="informacion desplaza">Empresa:
                    <?php echo $row['nomEmp_emp']?>
                </div>
                <div class="informacion desplaza">Contacto:
                    <?php echo $row['tel_emp']?>
                </div>
                <div class="informacion desplaza">Obs:
                    <?php echo $row['obs_emp']?>
                </div>
                

            </div>

            <div class="card-accion">
                <button class="boton agrandar">
                    <span class="fasfa"></span>
                    Envio Correo
                </button>
            </div>
        </div>

       
        <div class="card">
            <div class="encabezado">
                <img src="./img/emple3.png" alt="">
            </div>
            <div class="card-icono">
                <li class="agranda"><a href="#"><span class="fabfa"></span></a></li>
                <li class="agranda"><a href="#"><span class="fabfa"></span></a></li>
            </div>
            <div class="card-contenido">
                <div class="informacion desplaza">Se Requiere</div>
                <div class="informacion desplaza">Cargo:</div>
                <div class="informacion desplaza">Empresa:</div>
                <div class="informacion desplaza">Contacto:
                    <p>obs:</p>
                </div>

            </div>

            <div class="card-accion">
                <button class="boton agrandar">
                    <span class="fasfa"></span>
                    Envio Correo
                </button>
            </div>
        </div>
    </div>
</body>

</html>