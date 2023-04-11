<!doctype html>
<html lang="en">
  <head>
  	<title>Inscription d'entreprise</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../entreprise/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 d-flex img" style="background-image: url(images/bg.jpg);">
							<div class="text w-100">
								<h2 class="mb-4">Bienvenue dans IT-Gestion</h2>
								<p>Site web pour gerer la gestion de votre entreprise</p>
							</div>
			      		</div>
					<div class="login-wrap p-4 p-md-5">
			      	<div class="row justify-content-center py-md-5">
			      		<div class="col-lg-12">
			      			<div class="social-wrap">
				      			<h3 class="mb-3 text-center">Information sur votre entreprise</h3>
			          		</div>
								<form action="<?= site_url('Inscription/insert_entreprise'); ?>" class="signup-form">
									<div class="row">
										<input type="hidden" name="iduser" class="form-control" value="<?php echo $id; ?>">
										<div class="col-md-6">
											<div class="form-group">
												<label class="label" for="name">Nom</label>
												<input type="text" name="nom" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="label" for="name">Objet</label>
												<input type="text" name="objet" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="label" for="email">Siege</label>
												<input type="text" name="siege" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
						            				<label class="label" for="password">Adresse d'exploitation</label>
						              				<input type="text" name="adresse" class="form-control">
						            			</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
						            				<label class="label" for="password">Nom de dirigeant</label>
						              				<input type="text" name="dirigeant" class="form-control">
						            			</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
						            				<label class="label" for="password">Date de creation</label>
						              				<input type="date" name="creation" class="form-control">
						            			</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
						            				<label class="label" for="password">Numero d'identification</label>
						              				<input type="text" name="identifie" class="form-control">
						            			</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
						            				<label class="label" for="password">Numero statistique</label>
						              				<input type="text" name="stat" class="form-control">
						            			</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
						            				<label class="label" for="password">Numero de registre commerce</label>
						              				<input type="text" name="registre" class="form-control">
						            			</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
						            				<label class="label" for="text">Status</label>
						              				<input type="text" name="status" class="form-control">
						            			</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
						            				<label class="label" for="plan">Plan comptable</label>
						              				<input type="file" name="plan" class="form-control">
						            			</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
						            				<button type="submit" class="btn btn-primary submit p-3">Créer l'entreprise</button>
						            			</div>
										</div>
									</div>
								</form>
			      		</div>
			      	</div>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="../entreprise/js/jquery.min.js"></script>
  <script src="../entreprise/js/popper.js"></script>
  <script src="../entreprise/js/bootstrap.min.js"></script>
  <script src="../entreprise/js/main.js"></script>

	</body>
</html>

