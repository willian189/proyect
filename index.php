<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biesis</title>
    <link rel="stylesheet" href="./estilo.css">
    <script src="https://kit.fontawesome.com/4914e0316e.js" crossorigin="anonymous"></script>
</head>

<body><!--para ocultar##oncontextmenu="return false" ##inspeccion-->

<!--iniciando header-->

    <header class="biesis">
        <div class="bienestar">
            <div class="bieneimg">
            <img src="img/LOGO_EPS-02.png" class="imabiesis" alt="">
            </div>
            
            
        </div>
        <nav class="menu">
            <a href="#prinbi"><i class="fa-solid fa-people-roof"></i> Inicio</a>
            <a href="#requisitos">Requisitos de Titulación</a>
            <a href="#beca"><i class="fa-solid fa-credit-card"></i> Becas</a>
            <a href="#financiamiento"><i class="fa-solid fa-wallet"></i> Financiamiento</a>
            <a href="#videos"><i class="fa-solid fa-video"></i> Videos</a>
            <a href="#empleo"><i class="fa-solid fa-helmet-safety"></i> Empleo</a>
            <a href="#convenio"><i class="fa-solid fa-handshake-simple"></i> Convenios</a>
            <a href="#acceso" class="acceso1"><i class="fa-solid fa-key"></i> Acceso</a>
        </nav>
    </header>

    <div id="opcion-btn" class="cap cap-expan">=</div>

    <section id="prinbi" class="inicio">
        
        <h1 class="titulpri"><i class="fa-solid fa-people-roof"></i>&nbsp; Bienestar Estudiantil</h1>
        <div class="iniciacion">
        <iframe src="inibiesis.html" frameborder="0"></iframe>
        </div>
    </section>
    
    <!--***************************Requisitos de titulacion ************************************************-->
    <section id="requisitos" class="prinbi1">
        <h1 class="titulpri"><i class="fa-solid fa-sheet-plastic"></i> Requisitos d<span>e Titulación</span> </h1>
        <div class="requis">
        <iframe src="requis.html" frameborder="0"></iframe>
        </div>    
            

        </div>

    </section>
    <!--***************************8 becas ************************************************-->
    <section id="beca" class="prinbi3">
        <h1 class="titulpri"><i class="fa-solid fa-credit-card"></i> Bec<span>as</span> </h1>
        <div class="contenido3">
            <div class="vista">
                <img src="./img/beca-5.jpg" alt="">
            </div>
            <div class="enlace">
                <a href="becas.html" target="_blank"> <img src="./img/botondescarga.png" alt=""></a>
            </div>
        </div>
    </section>

    <!--***************************financiamiento ************************************************-->
    <section id="financiamiento" class="prinbi4">
        <h1 class="titulpri"><i class="fa-solid fa-wallet"></i> Financ<span>iamiento</span> </h1>
        <div class="contenido3">
            <div class="vista">
                <img src="./img/financiamiento-5.jpg" alt="" >
            </div>
            <div class="enlace">
                <a href="financia.html" target="_blank"> <img src="./img/botondescarga.png" alt=""></a>
            </div>
        </div>
    </section>
    


    <!--***************************Cargar video ************************************************-->

    <!--***************************VIDEOS ************************************************-->
    <section class="videos" id="videos">
        <h1 class="titulpri"><i class="fa-solid fa-video"></i> VID<span>EOS</span></h1>
        <div class="videosh">
            <div class="contenedor3">

                <video src="./vid/entrevista.mp4" class="slider"loop muted controls></video>


                <ul>
                    <li onclick="videoslider('./vid/1.mp4')"> <video src="./vid/1.mp4" poster="./img/vidbienes.png"></video></li>
                    <li onclick="videoslider('./vid/2.mp4')"> <video src="./vid/2.mp4" poster="./img/2video.png"></video></li>
                    <li onclick="videoslider('./vid/entrevista.mp4')"> <video src="./vid/entrevista.mp4" poster="./img/nav3.png"></video></li>

                </ul>

            </div>
            <script>
                function videoslider(links) {
                    document.querySelector(".slider").src = links;
                }
            </script>

        </div>

    </section>
    <!--***************************Videos ************************************************-->
                
    <!--***************************bolsa de empleos ************************************************-->
    <section id="empleo" class="empleo">
           <h1 class="titulpri"><i class="fa-solid fa-helmet-safety"></i> Solicitud d<span>e Empleo</span></h1>
           <div class="contenedor-emp">
          
                <table class="table3">
                   
                      <tr class="princi">
                        <th>Código</th>
                        <th>Empresa</th>
                        <th> Requeriere</th>
                        <th>Descripción</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        </tr>   
                    
            
                <?php
                $query = mysqli_query($conexion,"SELECT * FROM empleo");
                while($row=mysqli_fetch_array($query)){
                ?>
                <tr class="second">
                   <th class="parteinfer"><?php echo $row['id_emp'] ?></th>
                    <th><?php echo $row['nomEmp_emp'] ?></th>
                    <th><?php echo $row['reque_emp'] ?></th>
                    <th><?php echo $row['obs_emp'] ?></th>
                    <th><?php echo $row['tel_emp'] ?></th>
                    <th><?php echo $row['email_emp'] ?></th>
                </tr>
               
                <?php
                }
                ?>
                </table>
                
           </div>
           
           
    </section>

    <!--***************************bolsa de empleos ************************************************-->
    
    <!--***************************convenios ************************************************-->
    <section id="convenio" class="convenio">
        <h1 class="titulpri"><i class="fa-solid fa-handshake-simple"></i> Conve<span>nios</span> </h1>
         <div class="totalcon">
       <iframe src="conven.html" frameborder="0"></iframe>
       </div>
    </section>

    <!--***************************convenios ************************************************-->

 <!--***************************accesos ************************************************-->
  <!--desde aqui modal-->
  <section class="acceso" id="acceso">
  <h1 class="titulpri"><i class="fa-solid fa-key"></i> Acceso Ingreso de Empleos</span> </h1>
  <div class="contenedor_acces">
        <div class="ventanamodal" id="ventmod">
            
            
            <form method="POST" action="acceso.php">
            <h2>Bienvenido</h2>
            <input type="number" name="cedu_man" id="cedu_man" placeholder="Cedula de Identidad" class="formcajas3">
            <input type="password" name="clave_man" id="clave_man" placeholder="Password" class="formcajas3">
            <div class="valid">
                
               
                <button type="submit" name="validar" class="valid1">Ingresar</button>
                
            </div>
            </form>
         </div>
         </div>   
</section>
     
  <!--***************************accesos ************************************************-->

    <script src="script.js"></script>
    
   
</body>


</html>