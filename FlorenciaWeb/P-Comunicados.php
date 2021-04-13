<html>	
<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colegio Florencia | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/logito.png" type="image/x-icon">

</head>
</html>

<?php 

session_start();

include("conexion.php");  

//Metodo y Query para traer los datos del profesor y sus cursos asignados
// $dropwdown = 'SELECT * FROM curso WHERE Profesor_rutProfesor = '. $_SESSION ['rutProfesor'];  
$dropwdown = 'SELECT * FROM curso INNER JOIN grado ON curso.Grado_idGrado = grado.idGrado AND curso.Profesor_rutProfesor = '. $_SESSION ['rutProfesor'];  
$resul = mysqli_query($conexion, $dropwdown) or die ("<strong>Algo Salio mal con la CONSULTA  </strong>"); 






//Metodo y Query para capturar e insertar datos del formualrio en la BD
if ($_POST){ 

    @$tit=$_POST['titulo'];
    @$raz=$_POST['razon'];
    @$tipo=$_POST['tipocom'];
    @$com=$_POST['comunicado'];
    @$cur=$_POST['cursos'];    
    
    $CREAR = "INSERT INTO `bdflorencia`.`comunicados` (`idComunicado`, `tituloComunicado`, `descripcionComunicado`, `tipoComunicado`, `razonComunicado`, `Curso_idCurso`) 
    VALUES (NULL, '$tit', '$com', '$tipo', '$raz', '$cur');";
    
    mysqli_query($conexion,$CREAR) or die ("<strong>Algo Salio mal con la CONSULTA  </strong>"); 
    
}else{
}

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colegio Florencia | Intranet</title>





    <!-- Icono Superior -->
    <link rel="shortcut icon" href="assets/img/logito.png" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">



    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/Form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/Form/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/Form/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/Form/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/Form/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/Form/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/Form/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/Form/vendor/noui/nouislider.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/Form/css/util.css">
    <!--===============================================================================================-->
    <link href="assets/scss/modules/_sections.scss" rel="stylesheet" />



    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>


</head>
  <body>
      
          <link href="assets/css/style.css" rel="stylesheet">
      <link href="assets/css/style.css" rel="stylesheet">

      <!--START SCROLL TOP BUTTON -->
      <a class="scrollToTop" href="#">
          <i class="fa fa-angle-up"></i>
      </a>
      <!-- END SCROLL TOP BUTTON -->



      <!-- Start header  -->
      <header id="mu-header">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 col-md-12">
                      <div class="mu-header-area">
                          <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                  <div class="mu-header-top-left">
                                      <div class="mu-top-email">
                                          <i class="fa fa-envelope"></i>
                                          <span>recepcion@colegioflorencia.cl</span>
                                      </div>
                                      <div class="mu-top-phone">
                                          <i class="fa fa-phone"></i>
                                          <span> (+56) 5 1224 6551 </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                  <div class="mu-header-top-right">
                                      <nav>
                                          <ul class="mu-top-social-nav">
                                              <li><a href="https://www.facebook.com/pages/Colegio%20Florencia%20Nightingale,%20la%20serena/106402246061592/"><span class="fa fa-facebook"></span></a></li>
                                              <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                              <li><a href="https://www.youtube.com/watch?v=KzpFWHzgLBY"><span class="fa fa-youtube"></span></a></li>
                                          </ul>
                                      </nav>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </header>
      <!-- End header  -->



      <!-- Start menu -->
      <section id="mu-menu">
          <nav class="navbar navbar-default" role="navigation">
              <div class="container">
                  <div class="navbar-header">
                      <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                      <!-- LOGO -->
                      <!-- TEXT BASED LOGO -->
                      <a class="navbar-brand" href="index.html"> <img src="assets/img/logote.png" alt="logo"></><span></span></a>
                      <!-- IMG BASED LOGO  -->
                      <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
                  </div>
                  <div    id="navbar" class="navbar-collapse collapse">
                      <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                          <li class="active"><a href="P-Comunicados.php">Comunicados</a></li>
                          <li><a href="P-Minutas.php">Minutas de Reunión</a></li>
                          <li><a href="P-Planificador.php">Planificador de Evaluaciónes</a></li>
                          <li><a href="P-Buzon.php">Bandeja de Entrada</a></li>

                         <li><a  href="index.html" style="font-size:18px;" class="text-white btn"   > <bold> Cerrar Sesión </bold> </a></li>


                          <style type="text/css">
                              .boton_personalizado {
                                  text-decoration: none;
                                  padding: 10px;
                                  font-weight: 600;
                                  font-size: 15px;
                                  margin-top: 13px;
                                  color: #ffffff;
                                  background-color: #1883ba;
                                  border-radius: 6px;
                                  border: 2px solid #0016b0;
                              }
                          </style>




                      </ul>
                  </div><!--/.nav-collapse -->
              </div>
          </nav>
      </section>
      <!-- End menu -->



      <!-- Start search box -->
      <div id="mu-search">
          <div class="mu-search-area">
              <button class="mu-search-close"><span class="fa fa-close"></span></button>
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <form class="mu-search-form">
                              <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End search box -->
      <!-- Page breadcrumb -->
      <section id="mu-page-breadcrumb">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="mu-page-breadcrumb-area">
                          <h2>Comunicados</h2>
                          <ol class="breadcrumb">
                              <li><a href="#">Intranet Docente</a></li>
                              <li class="active"> Comunicados </li>
                          </ol>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- End breadcrumb -->
      <section id="mu-course-content">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="mu-course-content-area">
                          <div class="row">
                              <div class="col-md-12">
                                  <!-- start course content container -->
                                  <div class="mu-course-container mu-course-details">
                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="mu-latest-course-single">
                                                  <figure class="mu-latest-course-img">
                                                      <figcaption class="mu-latest-course-imgcaption">
                                                          

                                                      </figcaption>
                                                  </figure>
                                                  <div class="mu-latest-course-single-content">
                                                      <div style=" float:left; width: 150px; height: 150px; border-radius: 150px; border:6px solid #666; background: white;">



                                                      </div>
                                                      <img />
                                                      &nbsp;&nbsp;&nbsp;
                                                      <h2><a href="#" style=" float: right;"> Modulo de Comunicados</a></h2>
                                                      <h4> &nbsp; &nbsp;  Información del Docente</h4>
                                                     
                                                     
                                                     
                                                     <!-- Metodo que llama el nombre y ramo impartido del profesor de la sesión actual --> 
                                                      <ul>
                                                          <li> <span> &nbsp; &nbsp;  Nombre del Docente: </span> <span>&nbsp; <?php echo $_SESSION['nombreProfesor'] ,' ', $_SESSION['apellidoProfesor'];      ?> </span></li>
                                                          <li> <span> &nbsp; &nbsp;  Especialidad del Docente: </span> <span> &nbsp; <?php echo $_SESSION['ramoImpartidoProfesor'] ; ?> </span></li>

                                                      </ul>


                                                      
                                                      <hr size="1" />
                                                      <h4>A que curso va dirigido su comunicado?</h4>
                                                      <br />

                                                      
                                                    <script>    
                                                      function validar(){

                                                        var titu, raz, tip, com;

                                                        titu = document.getElementById("titulo").value;
                                                        raz = document.getElementById("razon").value;
                                                        tip = document.getElementById("tipocom").value;
                                                        com = document.getElementById("comunicado").value;
                                                            
                                                            if (titu === "" || raz === "" || tip === "" || com === "") {
                                                                alert ("Rellene los campos solicitados")
                                                                return false;
                                                            }else{
                                                                alert ("[ ✓ ] Comunicado Enviado Correctamente!")
                                                                return true;
                                                            }

                                                        }


                                                    </script>

                                                      <!-- Metodo que llama a los cursos del profesor asignado -->
                                                      <label for="cursos">Cursos a Cargo: </label>

                                                      <form  action="P-Comunicados.php" method="post"  class="contact100-form validate-form" onsubmit="return validar();">
                                                      <select name="cursos" id="cursos" style=" width: 500px;">
                                                           
                                                        <?php

                                                            while ($fila = mysqli_fetch_array($resul ) ){
                                                              ?>   
                                                              <option value=" <?php echo $fila[0] ?>  ">   <?php    echo $fila[1] ?> <?php echo $fila[6]    ?></option>
                                                            <?php 
                                                            }
                                                            ?>

                                                      </select>
                                                      <br />
                                                      <hr size="1" />

                                                      <div class="container-contact100">
                                                          <div class="wrap-contact100"> 
                                                              
                                                                  <span style="font-family:Calibri" class="contact100-form-title">
                                                                     <strong> Comunicados </strong> 
                                                                  </span>



                                                                  <div class="wrap-input100 validate-input bg1" data-validate="Porfavor Escriba un Titulo">
                                                                      <span class="label-input100">TITULO *</span>
                                                                      <input class="input100" type="text" name="titulo" id="titulo" required placeholder="Ingrese el titulo del comunicado" >
                                                                  </div>

                                                                  <div class="wrap-input100 validate-input bg1" data-validate="Porfavor Ingrese una Razón">
                                                                      <span class="label-input100">Razón *</span>
                                                                      <input class="input100" type="text" name="razon" id="razon" required placeholder="Ingrese la razón del comunicado ">
                                                                  </div>
                                                                                                                      
                                                                  <div class="wrap-input100 input100-select bg1" required>
                                                                      <span class="label-input100">Tipo de Comunicado *</span>
                                                                      <div>
                                                                          <select style="width:300px;"  class="js-select2" name="tipocom" id="tipocom">
                                                                              <option>Informativo</option>
                                                                              <option>Urgente</option>
                                                                              <option>Otros</option>
                                                                              
                                                                          </select>
                                                                          <div class="dropDownSelect2"></div>
                                                                      </div>
                                                                  </div>


                                                                 

                                                                  <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate="Please Type Your Message">
                                                                      <span class="label-input100">Comunicado</span>
                                                                      <textarea class="input100" name="comunicado" id="comunicado" required placeholder="Ingrese su Comunicado Aquí..."></textarea>
                                                                  </div>


                                                                 


                                                                  <div class="container-contact100-form-btn">
                                                                      <button type="submit" class="contact100-form-btn">
                                                                          <span>
                                                                              Enviar
                                                                              <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                                                          </span>
                                                                      </button>
                                                                  </div>
                                                              </form>
                                                          </div>
                                                      </div>





















                                                   
                                                      <br />
                                                      <br />
                                                     
                                                      </div>
                                                  </div>
                                          </div>
                                      </div>
                                  </div>
                                  
                                  
                                  <!-- end course content container -->
                                 
                              

                          </div>
                      </div>
                  </div>
              </div>
          </div>
              </div>
      </section>

      <!-- Start footer -->
      <footer id="mu-footer">
          <!-- start footer top -->
          <div class="mu-footer-top">
              <div class="container">
                  <div class="mu-footer-top -area">
                      <div class="row">

                      </div>
                  </div>
              </div>
          </div>
          <!-- end footer top -->
          <!-- start footer bottom -->
          <div class="mu-footer-bottom">
              <div class="container">
                  <div class="mu-footer-bottom-area">
                      <p>&copy; Todos los Derechos Reservados. By Alejandro Marín.</p>
                  </div>
              </div>
          </div>
          <!-- end footer bottom -->
      </footer>

      <!-- End footer -->

      <!-- jQuery library -->
      <script src="assets/js/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="assets/js/bootstrap.js"></script>
      <!-- Slick slider -->
      <script type="text/javascript" src="assets/js/slick.js"></script>
      <!-- Counter -->
      <script type="text/javascript" src="assets/js/waypoints.js"></script>
      <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
      <!-- Mixit slider -->
      <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
      <!-- Add fancyBox -->
      <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>

      <!-- Custom js -->
      <script src="assets/js/custom.js"></script>

  </body>
</html>

