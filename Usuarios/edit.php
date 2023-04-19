<?php
include('../config/config.php');
include('Usuarios.php');
$p= New Usuario();
$du= mysqli_fetch_object($p->getOne($_GET['id']));


if (isset($_POST) && !empty($_POST)){
    $update =$p->update($_POST); 
    if ($update){
        $error = '<div class="alert alert-success" role="alert">Usuario modificado correctamente</div>';
      }else{
        $error = '<div class="alert alert-danger" role="alert" > Error al modificar un usuario</div>';
      }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       
        <meta property="og:site_name" content="Acoso Sexual Callejero" /> <!-- website name -->
        <meta property="og:site" content="www.acososexualcallejeroASC.com" /> <!-- website link -->
        <meta property="og:title" content=""/> 
        <meta property="og:description" content="" /> 
        <meta property="og:image" content="" /> 
        <meta property="og:url" content="" /> 
        <meta name="twitter:card" content="summary_large_image"> 

        <title>Registrate</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/fontawesome-all.min.css" rel="stylesheet">
        <link href="css/swiper.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <!--Icon-->
        <link rel="icon" href="images/Polish_20230410_162809625.png">
    </head>
    <body>
        <?php
        include('../menu.php');
        ?>

<div class="container">
    <?php
    if (isset($mensaje)){
        echo $mensaje;
    }
    ?>
<h2>Modificación de Usuario </h2>
<form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="nombre" id="nombre" class="form-control-input" value=<?= $du->nombre?> placeholder="Nombre" required>
                            <input type="hidden" name="id" value=<?= $du->id?>/>
                        </div>
                        <div class="form-group">
                            <input type="email" name="correo" id="correo" class="form-control-input" value=<?= $du->correo?> placeholder="Correo" required>
                        </div>
                        <div class="form-group">
                            <input type="tel"  name="contrasena" id="contrasena" class="form-control-input" value=<?= $du->contrasena?> placeholder="Contraseña" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="celular" id="celular" class="form-control-input"value=<?= $du->celular?> placeholder="Celular" required>
                        </div>
                      
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Modificar</button>
                        </div>
                    </form>
</div>


<!-- Footer -->
<div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first">
                        <h6>Acerca De </h6>
                        <p class="p-small">El Centro de Servicios Psicológicos IBERO es una unidad académica de la Facultad de Ciencias Humanas y Sociales que propende generar y potenciar la salud mental, bajo un marco de inclusión y respeto por la diversidad, a través de la implementación de técnicas basadas en la evidencia, con calidad y propendiendo por la salud psicológica de los usuarios. Se constituye además como un escenario para la formación clínica, bajo criterios éticos de la profesión, en estudiantes de pregrado y posgrado; fomentando el desarrollo de la investigación y manejo de las diferentes problemáticas</p>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col second">
                        <h6>Links</h6>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li>Importante: <a href="terms.html">Terminos y condiciones</a>, <a href="privacy.html">Privacidad</a></li>
                            <li><a href="#"></a><a href="#">Iconos</a>, <a href="#">Ilustracion</a></li>
                            <li>Menu: <a href="#header">Inicio</a>, <a href="#services">Servicios</a>, <a href="#projects">Proyctos</a>, <a href="#contact">Contact</a></li>
                        </ul>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col third">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <p class="p-small"><a href="mailto:contact@name.com"><strong>ncaiced3@ibero.edu.co</strong></a></p>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright ©IBERO </p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->

    <!-- Scripts -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
    </body>
</html>