<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../images/favicon.ico">

	<title>connexion</title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="<?= base_url('assets/css/vendors_css.css') ?>">
	<?= $style ?>
	<!-- Style-->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/skin_color.css') ?>">

</head>

<body class="hold-transition theme-primary bg-gradient-primary">

	<?php if ($this->session->checkFailed) { ?>
		<div class="modal fade bs-example-modal-sm center-modal" id="changenum" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="mySmallModalLabel">Alert</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body text-dan ger text-center">
						<h5> <?= $this->session->checkFailed ?> </h5>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal --><?php } elseif ($this->session->notconnected) { ?>
		<div class="modal fade bs-example-modal-sm center-modal" id="changenum" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="mySmallModalLabel">Alert</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body text-dan ger text-center">
						<h5> <?= $this->session->notconnected ?> </h5>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal --> <?php } ?>
	<style>
		.bg-gradient-primary {
			background: #000b52 !important;
		}
		.btn-success{
			background-color: #49c0f8!important;
			 
		}
		.btn-success:hover{
			background-color: #49c0f8!important;
			 
		}
		.modal-content{
		background-color: #000b52!important;
		}
	</style>
	<div class="auth-2-outer row align-items-center h-p100 m-0">
		<div class="auth-2 bg-white-10">
			<div class="auth-logo font-size-30">
				<img class="mb-4" src="<?= base_url('assets\images\logo\bpay.png') ?>" alt="Logo Bpay" width="200">
			</div>
			<!-- /.login-logo -->
			<div class="auth-body">
				<!-- <p class="auth-msg text-white-50">Sign in to start your session</p> -->

				<form action="<?= site_url('bpay\connexion') ?>" method="POST" class="form-element">
					<div class="form-group has-feedback">
						<input type="tel" class="form-control text-white plc-white" name="phone_number" placeholder="Numero" required>
						<span class="ion ion-email form-control-feedback text-white"></span>
					</div>
					<div class="form-group has-feedback">
						<input type="password" class="form-control text-white plc-white" name="password" placeholder="Mot de passe" required>
						<span class="ion ion-locked form-control-feedback text-white"></span>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="checkbox">
								<input type="checkbox" id="basic_checkbox_1">
								<label for="basic_checkbox_1" class="text-white">se rappeler de moi</label>
							</div>
						</div>
						<!-- /.col -->
						<!-- <div class="col-6">
				 <div class="fog-pwd">
					<a href="javascript:void(0)" class="text-white"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
				  </div>
				</div> -->
						<!-- /.col -->
						<div class="col-12 text-center">
							<button type="submit" class="btn btn-rounded mt-10 btn-success">CONNEXION</button>
						</div>
						<!-- /.col -->
					</div>
				</form>

				<!-- <div class="text-center text-dark">
			  <p class="mt-50 text-white">- Sign With -</p>
			  <p class="gap-items-2 mb-20">
				  <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-facebook"></i></a>
				  <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-twitter"></i></a>
				  <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-google-plus"></i></a>
				  <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-instagram"></i></a>
				</p>	
			</div> -->
				<!-- /.social-auth-links -->

				<!-- <div class="margin-top-30 text-center text-white">
				<p>Don't have an account? <a href="auth_register2.html" class="text-info m-l-5">Sign Up</a></p>
			</div> -->

			</div>
		</div>

	</div>

	<script type="text/javascript" src="<?= base_url('assets\js\jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets\js\bootstrap.bundle.min.js') ?>"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Vendor JS -->
	<script src="<?= base_url('assets/js/vendors.min.js') ?>"></script>

</body>

</html>
<script type="text/javascript">
	$(window).on('load', function() {
		$('#changenum').modal('show');
	});
</script>
