<?php
include("conexion.php");
$id=$_GET['id'];
$sql="SELECT * FROM empleo WHERE id_emp='$id'"; 
$query=mysqli_query($conexion,$sql);
$row=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="acces.css">
    <title>Actualizar</title>
</head>
<body>
    <div class="container_ac">
        <div class="row_ac">
            <div class="columna_ac">
                    <form action="update.php" method="POST">
                            
                            <input type="hidden" name="id_emp" class="form_caja"  placeholder="codigo"  value="<?php echo $row['id_emp']?>" >
                            <label for="">Empresa</label>
                            <input type="text" name="empresa" class="form_caja_ac" id="empresa"  placeholder="Nombre de la Empresa"  value="<?php echo $row['nomEmp_emp']?>">
                            <label for="">Requiere</label>
                            <input type="text" name="requiere" class="form_caja_ac" id="requiere"  placeholder="Se Requiere"  value="<?php echo $row['reque_emp']?>" >
                            <label for="">Detalle</label>
                            <input type="text" name="descripcion" class="form_caj_aca form_cajagra" id="descripcion"  placeholder="Descripcion del Empleo"  value="<?php echo $row['obs_emp']?>" >
                            <label for="">Contácto</label>
                            <input type="number" name="contacto" class="form_caja_ac" id="contacto"  placeholder="Telefono"  value="<?php echo $row['tel_emp']?>" >
                            <label for="">Correo Electrónico</label>
                            <input type="email" name="email" class="form_caja_ac" id="email"  placeholder="Correo Electronico"  value="<?php echo $row['email_emp']?>" >
                            <input type="submit" class="btn_boton" value="actualizar">

                    </form>
            </div>
        </div>
    </div>
</body>

</html>