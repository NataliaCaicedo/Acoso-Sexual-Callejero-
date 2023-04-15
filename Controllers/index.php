<?php
include('config/config.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta property="og:site_name" content="Acoso Sexual Callejero" /> <!-- website name -->
    <meta property="og:site" content="www.acososexualcallejeroASC.com" /> <!-- website link -->
    <meta property="og:title" content="" /> 
    <meta property="og:description" content="" /> 
    <meta property="og:image" content="" /> 
    <meta property="og:url" content="" /> 
    <meta name="twitter:card" content="summary_large_image"> 

    <!-- Webpage Title -->
    <title>ACOSO SEXUAL CALLEJERO</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- Icon  -->
    <link rel="icon" href="images/Polish_20230410_162809625.png>
</head>


<?php
include 'Controllers/Login.php';
?>

<body data-bs-spy="scroll" data-bs-target="#navbarExample">

    <!-- Navegacion -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo 
                <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a> 
                -->


            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html #Discucion">Discucion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="article.html">Detalles del ASC</a>

                    <li class="nav-item">
                        <a class="nav-link" href="index.html #contact">Contactanos</a>
                    </li>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Mas Opciones</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="login.html">Inicio de Sesión</a></li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li><a class="dropdown-item" href="registro.html">Registrate</a></li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>

                        </ul>
                    </li>

                </ul>
                <span class="nav-item social-icons">
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
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
    <?php
    include_once "modelo/conexion.php";
    $sentencia = $bd->query("select * from usuarios");
    $persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($persona);
    ?>

    <div id="introduction" class="cards-1">
        <div class="container">
            <div class="row">



            </div>
            <div class="container mt-5">
                <div class="row justify-conten-center ">
                    <div class="col-md-7">
                        <?php
                        if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta') {
                        ?>

                            <div class="alert alert-danger alert-dismissible fade show " role="alert">
                                <strong>Error!</strong> Rellena todos los campos.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                            </div>
                        <?php
                        }
                        ?>




                        <?php
                        if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'Registrado') {
                        ?>

                            <div class="alert alert-success alert-dismissible fade show " role="alert">
                                <strong>Registrado!</strong> Se agregaron los datos
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                            </div>
                        <?php
                        }
                        ?>

                        <div class="card">
                            <div class="card-header">
                                Lista de personas
                            </div>
                            <div class="">
                                <table class="table aling-middle">

                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th cope="col">Nombre</th>
                                            <th cope="col">Correo</th>
                                            <th cope="col">Contrasena</th>
                                            <th cope="col">Celular</th>
                                            <th cope="col" colspan="2">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($persona as $dato) {


                                        ?>
                                            <tr>
                                                <td scope="row"> <?php echo $dato->id; ?></td>
                                                <td><?php echo $dato->nombre; ?></td>
                                                <td><?php echo $dato->correo; ?></td>
                                                <td><?php echo $dato->contrasena; ?></td>
                                                <td><?php echo $dato->celular; ?></td>
                                                <td>Editar</td>
                                                <td>Eliminar</td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Ingresar Datos :
            </div>
            <form class="p-4" method="POST" action="registrar.php">
                <div class="mb3">
                    <label for="" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="txtnombre" autofocus>
                </div>
                <div class="mb3">
                    <label for="" class="form-label">Correo:</label>
                    <input type="email" class="form-control" name="txtcorreo" autofocus>
                </div>
                <div class="mb3">
                    <label for="" class="form-label">Contrasena:</label>
                    <input type="text" class="form-control" name="txtcontrasena" autofocus>
                </div>
                <div class="mb3">
                    <label for="" class="form-label">celular:</label>
                    <input type="number" class="form-control py-2" name="txtcelular" autofocus>
                </div>
                <div class="d-grid">
                    <input type="hidden" name="oculto" value="1">
                    <input type="submit" class="btn btn-dark" value="Registrar">
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>

   






    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first">
                        <h6>Acerca De </h6>
                        <p class="p-small">Lorem ipsum dolor sit, amet consectetur adipisicing elit. In, amet eveniet eaque unde odit nihil magnam, iure sequi velit consectetur laborum ipsam modi? Omnis delectus, provident error velit aliquid aperiam.</p>
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
                        <p class="p-small"><a href="mailto:contact@name.com"><strong>contact@name.com</strong></a></p>
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
                    <p class="p-small">Copyright © </p>
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