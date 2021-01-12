<!DOCTYPE html>
<html lang="en">

<head>
	<title>Authentification</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= base_url('assets/assets/vendor_components/bootstrap/dist/css/bootstrap.css') ?>">

</head>

<body>

	<div class="container">

		<div class="wrapper fadeInDown row m-4">
			<div class="col-sm-5 offset-4">
				<div class="fadeIn first text-center">
					<img class="mb-4" src="<?= base_url('assets\images\logo\bpay.png') ?>" alt="Logo Bpay" width="200">
				</div>
				<?php if ($this->session->checkFailed) { ?>
					<div class="modal fade bs-example-modal-sm center-modal" id="changenum" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
						<div class="modal-dialog modal-sm">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title" id="mySmallModalLabel">Alert</h4>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								</div>
								<div class="modal-body text-white text-center">
									<h5> <?= $this->session->checkFailed ?> </h5>
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div><?php } elseif ($this->session->notconnected) { ?>
					<div class="modal fade bs-example-modal-sm center-modal" id="changenum" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
						<div class="modal-dialog modal-sm">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title" id="mySmallModalLabel">Alert</h4>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								</div>
								<div class="modal-body text-white text-center">
									<h5> <?= $this->session->notconnected ?> </h5>
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div> <?php } ?>
				<div class="wrapper fadeInDown row m-6">
					<div class="container p-3 my-3 border" style="border-radius: 5px 5px 5px 5px;">
						<form action="<?= site_url('bpay\connexion') ?>" method="POST" class="was-validated">
							<div class="text-center">
								<h2>Authentification</h2>
							</div></br>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Entrer le numero de telephone" name="phone_number" value="" required>
								<div class="invalid-feedback">numero requis</div>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="mdp" placeholder="Entrer le mot de passe" name="password" required>
								<div class="invalid-feedback">Mot de passe requis requis.</div>
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


</body>

</html>

<script type="text/javascript">
	$(window).on('load', function() {
		$('#changenum').modal('show');
	});
</script>
