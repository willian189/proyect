<?php
session_start();
include'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="acces.css">
    <title>Cargar_empleo</title>
</head>
<body>
    <div class="container">
    <h1>INGRESO DE EMPLEOS</h1>
        <div class="row">
            <div class="columna">
                
                <form action="insertar.php" method="POST">
                <input type="text" name="empresa" id="empresa" placeholder="Nombre de la Empresa" class="form_caja">
                <input type="text" name="requiere" id="requiere" placeholder="Se Requiere" class="form_caja">
                <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion del Empleo" class="form_caja form_cajagra">
                <input type="number" name="contacto" id="contacto" placeholder="Telefono" class="form_caja">
                <input type="email" name="email" id="email" placeholder="Correo Electronico" class="form_caja">
                <input type="submit" class="btn_boton" value="Enviar">
                
            

            </div>
            <div class="lineadiv"></div>
            <div class="columna2">
                <table class="table1">
                    <thead class="table12">
                      <tr >
                        <th>Codigo</th>
                        <th>Empresa</th>
                        <th> Requerimiento</th>
                        <th>Descripcion</th>
                        <th>Contacto</th>
                        <th>Correo</th>
                        <th>Fecha</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                        </tr>   
                    </thead>
                
                
                <tbody> 
                <?php
                $query = mysqli_query($conexion,"SELECT * FROM empleo");
                while($row=mysqli_fetch_array($query)){
                ?>
                    <tr>
                   <th><?php echo $row['id_emp'] ?></th>
                    <th><?php echo $row['nomEmp_emp'] ?></th>
                    <th><?php echo $row['reque_emp'] ?></th>
                    <th><?php echo $row['obs_emp'] ?></th>
                    <th><?php echo $row['tel_emp'] ?></th>
                    <th><?php echo $row['email_emp'] ?></th>
                    <th><?php echo $row['fecha_emp'] ?></th>
                    <th><a href="actualizar.php?id=<?php echo $row['id_emp']?>">Editar</a></th>
                    <th><a href="delete.php?id=<?php echo $row['id_emp']?>">Eliminar</a></th>
                    <br>
                    </tr>
                <?php
                }
                ?>
                </tbody>
                </table>

            </div>
        </div>
    </div>

    
</body>

</html>