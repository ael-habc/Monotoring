<?php
ob_start();
session_start();
ini_set('display_errors', 'On');

?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<title>StrictAssur - Boite Mail WEB</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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
			<div class="wrap-login100 p-b-160 p-t-50">
				<?php
				$msg = '';
				if (!empty($_POST['username']) && !empty($_POST['password'])) {
					if ($_POST['username'] == 'admin' && $_POST['password'] == '1234') {
						$_SESSION['username'] = 'admin';
						header('Location: ../index.php');
						exit();
					} else {
						$msg = "";
						echo $msg;
					}
				}
				?>
				<form class="login100-form validate-form" role="form"
					action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
					<span class="login100-form-title p-b-43">
						<img src="..\images\logo.png" width="400"><br>
					</span>
					<div class="wrap-input100 rs1 validate-input" data-validate="Nom d'utilisateur est obligatoire">
						<input class="input100" type="text" name="username">
						<span class="label-input100">Nom d'utilisateur</span>
					</div>
					<div class="wrap-input100 rs2 validate-input" data-validate="Mot de passe est obligatoire">
						<input class="input100" type="password" name="password">
						<span class="label-input100">Mot de Passe</span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login">
							CONNEXION
						</button>
					</div>
					<div class="text-center w-full p-t-23">
						<a href="#" class="txt1">
							© 2019 | StrictAssur - Boite Mail WEB
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>





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