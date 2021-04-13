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



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colegio Florencia | Intranet</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/logito.png" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="/assets/css/slick.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Tabla -->
    <link href="assets/table/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


    
    
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


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <script type="text/javascript" src="Js/Funcion.js">     </script>


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
                          <li><a href="#">Bandeja de Entrada</a></li>

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
                          <h2>Buzón</h2>
                          <ol class="breadcrumb">
                              <li><a href="#">Intranet Docente</a></li>
                              <li class="active"> Bandeja de Entrada </li>
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
                                                      <div style=" float:left; width: 150px; height: 150px; border-radius: 150px; border:6px solid #666; background: white;"></div>
                                                      <img />
                                                      &nbsp;&nbsp;&nbsp;
                                                      <h2><a href="#" style=" float: right;"> Buzón y Mensajeria de Apoderados </a></h2>
                                                      <h4> &nbsp; &nbsp;  Información del Docente</h4>
                                                      <ul>



                                                        <!-- Metodo que llama el nombre y ramo impartido del profesor de la sesión actual --> 
                                                          <li> <span> &nbsp; &nbsp;  Nombre del Docente: </span> <span>&nbsp;          <?php echo $_SESSION['nombreProfesor'] ,' ', $_SESSION['apellidoProfesor'];      ?>          </span></li>
                                                          <li> <span> &nbsp; &nbsp;  Especialidad del Docente: </span> <span> &nbsp;   <?php echo $_SESSION['ramoImpartidoProfesor'] ; ?>          </span></li>

                                                      </ul>
                                                      <hr size="1" />

                                                      <h4>Mensajes: </h4>
                                                      <br />

                                                      
                                                      <br />
                                                      <hr size="1" />


                                                  


                                                      


                              
                                                      
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    


                  <thead>
                    <tr>
                      <th style="width:20%" >Apoderado</th>
                      <th style="width:15%">Fecha</th>
                      <th style="width:60%">Mensaje</th>
                      <th style="width:5%"> Eliminar </th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Apoderado</th>
                      <th>Fecha</th>
                      <th>Mensaje</th>
                      <th>Eliminar</th>
                      
                    </tr>
                  </tfoot>
                  <tbody>  

                                <!-- Metodo While que rellena la tabla con los datos pedidos en la query cada vez que se agrega un dato, esto lo hace solamente con el profesor de la sesion actual -->

                                <?php  
                                $sql="SELECT idMensaje, tituloMensaje, descripcionMensaje, fechaMensaje from mensaje  WHERE Profesor_rutProfesor = ". $_SESSION ['rutProfesor'];
                                $result=mysqli_query($conexion,$sql);
                                while($ver=mysqli_fetch_row($result)){
                                ?>

                                                <tr>
                                                <td>  <?php echo $ver[1] ?>  </td>
                                                <td>  <?php echo $ver[3] ?> </td>
                                                <td>  <?php echo $ver[2] ?> </td>

                                                
                                                <td> <a href="  <?php echo "Metodo.php?id='".$ver[0]."'"  ?> "> <button  type="submit"  name="Eliminar"  class= "btn btn-danger glyphicon glyphicon-remove" style="margin-left:20%"> </button> </a> </td>
                                                

                                                </tr>
                                                
                                                            <?php 
                                                            
                                                            }
                                                            
                                                            ?>
                   
                    
                  </tbody>
                </table>
              </div>



  <script src="assets/table/vendor/jquery/jquery.min.js"></script>
  <script src="assets/table/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="assets/table/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="assets/table/js/demo/datatables-demo.js"></script>

                                                      </div>
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
      </section>

      <!-- Start footer -->
      <footer id="mu-footer">
          <!-- start footer top -->
          <div class="mu-footer-top">
              <div class="container">
                  <div class="mu-footer-top-area">
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

      <script>   src="Js/Funcion.js"  </script>    
      <script type="text/javascript">
    $(document).ready(function(){
    });
    </script>
      <!-- Custom js -->
      <script src="assets/js/custom.js"></script>




  </body>
</html>