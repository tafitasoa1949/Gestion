<?php
	$error = form_error('pwd');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
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
					<img src="<?php echo base_url("admin/images/img-01.png"); ?>" alt="IMG">
				</div>

			<form action="<?= site_url('Login/checkLogin'); ?>" method="post">
				<span class="login100-form-title">Membre</span>
					<div class="wrap-input100">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div id="error" class="text-danger" style="color: red;">
						<?= form_error('email') ?>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="password"  name="pwd" placeholder="Mot de passe">
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
							Se Connecter
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="<?= site_url('Login/sign'); ?>">
							Créer un compte
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
     		</form>
			</div>
		</div>
	</div>	
<script src="<?php echo base_url("admin/vendor/jquery/jquery-3.2.1.min.js") ?>"></script>

	<script src="<?php echo base_url("admin/vendor/tilt/tilt.jquery.min.js"); ?>"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	</script>
</body>
</html>