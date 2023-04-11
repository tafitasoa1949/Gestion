<!DOCTYPE html>
<html lang="en">
<head>
	<title>Inscription</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="<?php echo base_url("admin/images/icons/favicon.ico") ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("admin/vendor/bootstrap/css/bootstrap.min.css"); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css") ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("admin/vendor/animate/animate.css") ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("admin/vendor/css-hamburgers/hamburgers.min.css") ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("admin/vendor/select2/select2.min.css") ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("admin/css/util.css");?>" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("admin/css/main.css"); ?>">
<!--===============================================================================================-->
	<style>
		#error{
			text-align : center;
		}
	</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../admin/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="<?= site_url('Inscription/insert_compte'); ?>">
					<span class="login100-form-title">
						Inscription
					</span>

					<div class="wrap-input100">
						<input class="input100" type="text" name="nom" placeholder="Nom">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<div id="error" class="text-danger" style="color: red;">
						<?php echo form_error('nom'); ?>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div id="error" class="text-danger" style="color: red;">
						<?php echo form_error('email'); ?>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="number" name="contact" placeholder="Telephone">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>
					<div id="error" class="text-danger" style="color: red;">
						<?php echo form_error('contact'); ?>
					</div>
					
					<div class="wrap-input100">
						<input class="input100" type="password" name="pwd" placeholder="Mot de passe">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div id="error" class="text-danger" style="color: red;">
						<?php echo form_error('pwd'); ?>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							S'inscrire
						</button>
					</div>
					<div class="text-center p-t-56">
						<a class="txt2" href="<?= site_url('Login/'); ?>">
							Se connecter
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="../admin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../admin/vendor/bootstrap/js/popper.js"></script>
	<script src="../admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../admin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../admin/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="../admin/js/main.js"></script>

</body>
</html>