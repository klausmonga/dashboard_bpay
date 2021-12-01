<!DOCTYPE html>
<html lang="en">
<head>
	<title>connexion</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= base_url('assets/assets/vendor_components/bootstrap/dist/css/bootstrap.css') ?>">
</head>

<body>
<div class="container" >
	<div class="wrapper fadeInDown row m-4">
		<div class="col-sm-5 offset-4">
			<div class="fadeIn first text-center">
				<img class="mb-4" src="<?= base_url('assets\images\logo\bpay.png') ?>" alt="Logo Bpay" width="200">
			</div>
			<?php if ($this->session->checkFailed) { ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<span class=""><?php echo $this->session->checkFailed; ?>
						</span>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div><?php }elseif($this->session->notconnected){?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<span class=""><?php echo $this->session->notconnected; ?>
						</span>
					<button type="button" class="close" data-dismiss="alert" aria-label="close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div> <?php } ?>
			<div class="wrapper fadeInDown row m-6">
				<div class="container p-3 my-3 border" style="border-radius: 5px 5px 5px 5px;">
					<form action="<?= site_url('bpay\connexion') ?>" method="POST" class="was-validated">
						<div class="text-center">
							<h2>Connectez-vous</h2>
						</div></br>
						<div class="form-group">
							<input type="tel" class="form-control" placeholder="Entrer le numero de telephone" name="phone_number"  size="12" minlength="9" maxlength="10" required autofocus/>
							<span class="ion ion-email form-control-feedback text-white"></span>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" type="password" class="form-control text-white plc-white" id="password" placeholder="Entrer le mot de passe" name="password" inputmode="numeric" minlength="4"  maxlength="8" size="8" required autofocus/>
							<span class="ion ion-locked form-control-feedback text-white"></span>
						</div>
						<div class="text-center">
							<button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
							</br>
							<div id="formFooter">
								<a class="underlineHover" href="#">J'ai oublié mon mot de passe</a>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?= base_url('assets\js\jquery.min.js') ?>"></script>
<script src="<?= base_url('assets\js\bootstrap.bundle.min.js') ?>"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
