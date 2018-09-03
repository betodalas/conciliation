<?php
//include auth.php file on all secure pages
include("auth.php");
?>

<?php
        // Retrieve the hidden form variable (using PHP).
        $wb_name = $_POST['wb_name'];
        $b_sheet = $_POST['b_sheet'];
        $u_sheet = $_POST['u_sheet'];

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

					<span class="login100-form-title p-b-26">

						Sucesso!!

					</span>

					<span class="login100-form-title p-b-48">
<img src="odara.png"/>

					</span>


<b><p><center><a href="http://192.168.0.8/upload/<?php echo $wb_name ?>-conciliada_<?php $date = date('d_m_Y_H_i');echo $date ?>.xlsx">Download planilha conciliada</a></p></b></center><br><b><p><center><a href="http://192.168.0.8">Início</a></p></b></center>
						<span class="focus-input100" data-placeholder=""></span>






						<span class="btn-show-pass">

							<i class="zmdi zmdi-eye"></i>

						</span>


					</div>





                                                <span class="focus-input100" data-placeholder=""></span>
                                        </div>



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

<?php
        $wb_name = $_POST['wb_name'];
        $b_sheet = $_POST['b_sheet'];
        $u_sheet = $_POST['u_sheet'];
exec("/usr/bin/python3 /var/www/cgi-bin/bank_recon.py '$wb_name' '$b_sheet' '$u_sheet'");

?>
