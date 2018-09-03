<?php
//include auth.php file on all secure pages
include("auth.php");
?>

<!DOCTYPE html>

<html lang="en">

<head>

	<title>Login Odara</title>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->	

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<!--===============================================================================================-->	

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<!--===============================================================================================-->	

	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="css/util.css">

	<link rel="stylesheet" type="text/css" href="css/main.css">

<!--===============================================================================================-->

</head>

<body>

	

	<div class="limiter">

		<div class="container-login100">

			<div class="wrap-login100">

				<form class="login100-form validate-form"  action="" method="post"">

					<span class="login100-form-title p-b-26">

						Bem vindo

					</span>

					<span class="login100-form-title p-b-48">
<img src="odara.png"/>

					</span>

<p>Bem vindo <?php echo $_SESSION['username']; ?>!</p>
<p>Esta é uma area segura</p>
<p><b><a href="upload.php">Acessar</a></b></p>
<b><a href="logout.php">Deslogar</a></b><br><br>
<b>Instruções</b><br><br>
<p><b>1- </b>Match é quando a data e o valor do demonstrativo batem com o extrato.</p><br>
<p><b>2- </b> Os campos que deram match estão na cor verde.</p><br>
<p><b>3- </b> Os campos que não deram match, estão na cor amarela.</p></br>
<p><b>4- </b> Na planilha de demonstrativos, a coluna <b>E</b> contém todas as datas que não deram match, a coluna <b>F</b> é a soma dos valores referentes a esta data.</p><br>
<p><b>5- </b> Na aba de extrato, contém alguns campos em branco, são os valores de entrada que estão nas colunas <b> D, E e F</b></p></br>
<p><b>6- </b> As colunas pintadas precisam ser formatadas como data ou moeda para mostrar os valores corretos, clique com o botão direto em cima da coluna, formatar e depois data ou moeda em seu respectivo campo</p></br>
<p><b>7- </b> IMPORTANTE: o demonstrativo de pagamento obrigatoriamente tem que ser na primeira aba e o extrato na segunda aba</p><br>
<p><b>8- </b> Se você clicar para fazer download e dizer que o arquivo não existe, você digitou algum campo com o nome errado</p><br>









						<span class="btn-show-pass">

							<i class="zmdi zmdi-eye"></i>

						</span>





					<div class="container-login100-form-btn">

						<div class="wrap-login100-form-btn">

							<div class="login100-form-bgbtn"></div>

					</div>


						</div>


					<div class="text-center p-t-115">

						<span class="txt1">


						</span>



						<a class="txt2" href="#">

					
</div>


				</form>

			</div>

		</div>

	</div>

	



	<div id="dropDownSelect1"></div>

	

<!--===============================================================================================-->

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<!--===============================================================================================-->

	<script src="vendor/animsition/js/animsition.min.js"></script>

<!--===============================================================================================-->

	<script src="vendor/bootstrap/js/popper.js"></script>

	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!--===============================================================================================-->

	<script src="vendor/select2/select2.min.js"></script>

<!--===============================================================================================-->

	<script src="vendor/daterangepicker/moment.min.js"></script>

	<script src="vendor/daterangepicker/daterangepicker.js"></script>

<!--===============================================================================================-->

	<script src="vendor/countdowntime/countdowntime.js"></script>

<!--===============================================================================================-->

	<script src="js/main.js"></script>


</body>

</html>

