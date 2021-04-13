
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


<?php  include("conexion.php"); 


session_start();





//Metodo para traer y validar las credenciales del profesor en el login.

$rut;
$pass;

@$rut=$_POST['user'];
@$pass=$_POST['pass'];

if (isset ($rut)){

	$consu = "SELECT * FROM profesor WHERE rutProfesor = '".$rut."' AND contraseñaProfesor = '".$pass."' ";

	$resul = mysqli_query($conexion,$consu) or die ("<strong>Algo Salio mal con la CONSULTA  </strong>"); 

	$encontrados = mysqli_num_rows($resul);
	


//Redirección en el caso de ser validos o erroneos lo datos.


	if($encontrados > 0){

		$filaEncontrada = mysqli_fetch_assoc($resul);
		$_SESSION['rutProfesor']=$filaEncontrada['rutProfesor'];
		$_SESSION['contraseñaProfesor']=$filaEncontrada['contraseñaProfesor'];
		$_SESSION['nombreProfesor']=$filaEncontrada['nombreProfesor'];
		$_SESSION['apellidoProfesor']=$filaEncontrada['apellidoProfesor'];
		$_SESSION['ramoImpartidoProfesor']=$filaEncontrada['ramoImpartidoProfesor'];	

		echo '<script type="text/javascript">
		window.location = "P-Comunicados.php"
   			</script>';

	}else{
	
	echo '<script type="text/javascript">
			   window.location = "P-login.php"
		  </script>';
	}
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login | Colegio Florencia</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/img/logito.png" type="image/x-icon">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
	<!--===============================================================================================-->
</head>





<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">


				<form method="post"   action="P-login.php" class="login100-form validate-form">
					<span class="login100-form-title p-b-55">
						<a><img margin-left="13px" src="assets/img/logoin1.png" alt="logo" align="middle"></a>
						<br />
						<br />
						<p>Ingrese las credenciales entregadas por el administrador</p>

					</span>



					<div class="wrap-input100 validate-input m-b-16" data-validate="Usuario No Valido">
						<input class="input100" type="text" name="user" placeholder="Usuario">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>



					<div class="wrap-input100 validate-input m-b-16" data-validate="Contraseña No Valida">
						<input class="input100" type="password" name="pass" placeholder="Contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>



					
					<div class="container-login100-form-btn p-t-25">
							<button  type="submit" class="login100-form-btn"> Ingresar </button>
					</div>
					


					<div class="text-center w-full p-t-115">
						<span class="txt1">
							Si no recuerda sus credenciales dirigirse a UTP o enviar un correo a
						</span>

						<a class="txt1 bo1 hov1" href="#">
							recepcion@colegioflorencia.cl
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	 
	<!-- Footer -->
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
					<p align="center">&copy; Todos los Derechos Reservados. By Alejandro Marín.</p>
				</div>
			</div>
		</div>
		<!-- end footer bottom -->
	</footer>






	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>