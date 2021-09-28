<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="<?= base_url('assets/images/logo/b-vortex4.png') ?>">

	<title>Bpay</title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="<?= base_url('assets/css/vendors_css.css') ?>">
	<!-- Style-->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
	
	
	

	

	<!-- <link rel="stylesheet" href="../assets/css/modal.css" /> -->
	<link rel="stylesheet" href="<?= base_url('assets/css/skin_color.css') ?>">
	<link href="<?= base_url('assets/icon/css/fontawesome.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/icon/css/brands.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/icon/css/solid.css') ?>" rel="stylesheet">
	
	<!-- style vendor -->
	
	<?= $style; ?>
	
	
	

	<script src="../assets/js/modal.js"></script>

</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

	<div class="wrapper">

		<header class="main-header">
			<div class="d-flex align-items-center logo-box pl-20">
				<a href="#" class="waves-effect waves-light nav-link rounded d-none d-md-inline-block push-btn" data-toggle="push-menu" role="button">
					<img src="<?= base_url('assets/images/svg-icon/collapse.svg" class="img-fluid svg-icon') ?>" alt="">
				</a>
				<!-- Logo -->
				<a href="index.html" class="logo">
					<!-- logo-->
					<div class="logo-lg">
						<span class="light-logo"><img src="<?= base_url('assets/images/logo/bpay.png') ?>" alt="logo"></span>
						<span class="dark-logo"><img src="<?= base_url('assets/images/logo/bpay.png') ?>" alt="logo"></span>
					</div>
				</a>
			</div>
			<!-- Header Navbar -->
			<nav class="navbar navbar-static-top pl-10">
				<!-- Sidebar toggle button-->
				<div class="app-menu">
					<ul class="header-megamenu nav">
						<li class="btn-group nav-item d-md-none">
							<a href="#" class="waves-effect waves-light nav-link rounded push-btn" data-toggle="push-menu" role="button">
								<img src="<?= base_url('assets/images/svg-icon/collapse.svg') ?>" class="img-fluid svg-icon" alt="">
							</a>
						</li>
						<li class="btn-group nav-item">
							<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link rounded full-screen" title="Full Screen">
								<img src="<?= base_url('assets/images/svg-icon/fullscreen.svg') ?>" class="img-fluid svg-icon" alt="">
							</a>
						</li>
						<li class="btn-group d-md-inline-flex d-none">
							<div class="search-bx ml-10">
								<form>
									<div class="input-group">
										<input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
										<div class="input-group-append">
											<button class="btn" type="submit" id="button-addon2"><img src="<?= base_url('assets/images/svg-icon/search.svg') ?>" class="img-fluid" alt="search"></button>
										</div>
									</div>
								</form>
							</div>
						</li>
					</ul>
				</div>

				<div class="navbar-custom-menu r-side">
					<ul class="nav navbar-nav">
						<!-- Notifications -->
						

						<!-- User Account-->
						<li class="dropdown user user-menu">
							<a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="User">
								<img src="<?= base_url('assets/images/svg-icon/user.svg') ?>" class="rounded svg-icon" alt="" />
							</a>
							<ul class="dropdown-menu animated flipInX">
								<!-- User image -->
								<li data-toggle="modal" data-target="#profil" class="user-header bg-img" style="background-image: url(<?= base_url('assets/images/user-info.jpg') ?>)" data-overlay="3">
									<div class="flexbox align-self-center">
										<img src="<?= base_url('assets/images/avatar/7.jpg') ?>" class="float-left rounded-circle" alt="User Image">
										<h4 class="user-name align-self-center">
											<span><?= $this->session->fullname; ?></span><br>
											<small><?= $this->session->email; ?></small>
										</h4>
									</div>
								</li>
								<!-- Menu Body -->
								<li class="user-body">
									<a class="dropdown-item" href="<?= site_url('bpay\logout') ?>"><i class="ion-log-out"></i>Deconnexion</a>
									<div class="dropdown-divider"></div>
								</li>
							</ul>
						</li>

						<!-- Control Sidebar Toggle Button -->
						<li>
							<a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light">
								<img src="<?= base_url('assets/images/svg-icon/settings.svg') ?>" class="img-fluid svg-icon" alt="">
							</a>
						</li>

					</ul>
				</div>
			</nav>
		</header>
	
		<!-- Modal -->
		<div class="modal fade" id="profil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header text-center">
						<h5 class="modal-title text-white text-center" id="exampleModalCenterTitle">
							<ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Modifier le pseudo</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Modifier le mail</a>
								</li>
								<li class="nav-item">
									<a class="nav-link " id="nom" data-toggle="pill" href="#pills-nom" role="tab" aria-controls="pills-home" aria-selected="true">Modifier le Nom</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="password" data-toggle="pill" href="#pills-password" role="tab" aria-controls="pills-profile" aria-selected="false">Modifier le mot de pass</a>
								</li>

							</ul>
						</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body text-white ">

						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

								<div class="box-header with-border">
									<h4 class="box-title">Modifier le pseudos</h4>
								</div>
								<div class="box-body">
									<form action="<?= site_url('bpay\modifprofie') ?>" method="post" id="modiform">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Nouveau pseudos</label>
													<input type="text" class="form-control" name="pseudo" placeholder="Nouveau pseudo" value="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Nom</label>
													<input type="text" class="form-control" name="name" placeholder="Nom" value="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Numero</label>
													<input type="text" class="form-control" name="number" placeholder="numero" value="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>email</label>
													<input type="email" class="form-control" name="email" placeholder="Email" value="">
												</div>
											</div>
										</div>
										<hr>
										<div class="text-right">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
											<button type="submit" class="btn btn-primary">Modifier</button>
										</div>
									</form>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

								<div class="box-header with-border">
									<h4 class="box-title">Modifier le mail</h4>
								</div>
								<div class="box-body">
									<form action="<?= site_url('bpay\modifprofie') ?>" method="post" id="modiform">
										<div class="row">
											<div class="col-md-6">

												<div class="form-group">
													<label>Nouveau mail</label>
													<input type="email" class="form-control" name="email" placeholder="nouveau mail" value="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>pseudo</label>
													<input type="text" class="form-control" name="pseudo" placeholder="pseudo" value="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Numero</label>
													<input type="text" class="form-control" name="number" placeholder="numero" value="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Nom</label>
													<input type="text" class="form-control" name="name" placeholder="Nom" value="">
												</div>
											</div>
										</div>
										<hr>
										<div class="text-right">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
											<button type="submit" class="btn btn-primary">Modifier</button>
										</div>
									</form>
								</div>

							</div>
							<div class="tab-pane fade" id="pills-nom" role="tabpanel" aria-labelledby="nom">

								<div class="box-header with-border">
									<h4 class="box-title">Modifier le nom</h4>
								</div>
								<div class="box-body">
									<form action="<?= site_url('bpay\modifprofie') ?>" method="post" id="modiform">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Nouveau nom</label>
													<input type="text" class="form-control" name="name" placeholder="Nouveau nom" value="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>pseudo</label>
													<input type="text" class="form-control" name="pseudo" placeholder="pseudo" value="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Numero</label>
													<input type="text" class="form-control" name="number" placeholder="numero" value="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>email</label>
													<input type="email" class="form-control" name="email" placeholder="Email" value="">
												</div>
											</div>
										</div>
										<hr>
										<div class="text-right">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
											<button type="submit" class="btn btn-primary">Modifier</button>
										</div>
									</form>

								</div>
							</div>
							<div class="tab-pane fade" id="pills-password" role="tabpanel" aria-labelledby="password">

								<div class="box-header with-border">
									<h4 class="box-title">Mot de passe</h4>
								</div>
								<div class="box-body">
									<form action="<?= site_url('bpay\modifprofie') ?>" method="post" id="modiform">
										<div class="row">
											<div class="col-md-6">

												<div class="form-group">
													<label>Ancien mot de passe</label>
													<input type="password" class="form-control" name="password" placeholder="Ancien mot de passe" value="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Nouveau mot de passe</label>
													<input type="password" class="form-control" name="new_password" placeholder="Nouveau mot de passe" value="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Numero</label>
													<input type="tel" class="form-control" name="number" placeholder="numero" value="">
												</div>
											</div>

										</div>
										<hr>
										<div class="text-right">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
											<button type="submit" class="btn btn-primary">Modifier</button>
										</div>
									</form>
								</div>
							</div>

						</div>

					</div>
					<!-- <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
						<button type="submit" form="modiforme" class="btn btn-primary">Modifier</button>
					</div> -->

				</div>
			</div>
		</div>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar-->
			<section class="sidebar">
				<!-- sidebar menu-->
				<?= $dashboardlink ?>
			</section>
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<div class="container-full">
				<!-- Main content -->
				<section class="content">
					<?php if ($this->session->changesuccess) { ?>
						<!-- /.modal -->

						<div class="modal fade bs-example-modal-sm center-modal" id="changenum" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
							<div class="modal-dialog modal-sm">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="mySmallModalLabel">Alert</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									</div>
									<div class="modal-body text-white text-center">
										<h5> <?= $this->session->changesuccess ?> </h5>
									</div>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
						<!-- /.modal -->

					<?php } elseif ($this->session->notconnected) { ?>
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<span class=""><?php echo $this->session->notconnected; ?>
							</span>
							<button type="button" class="close" data-dismiss="alert" aria-label="close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div> <?php } ?>
					<div class="row">
						<div class="scrolling-wrapper row flex-row flex-nowrap m-1">
							<div class="col-md-4 col-12 ">
								<div data-toggle="modal" data-target="#modifnumairtel" class="box box-inverse box-dangerr">
									<img src="<?= base_url('assets\logo\airtel.png') ?>" alt="" style="position:absolute; width:20%;margin-left:76%;margin-top:1%">

									<div class="box-header with-border">
										<h6 class="box-title"><strong>Numero airtel money</strong></h6>
									</div>
									<div class="box-body" style="width:700px">
										<h5> <strong><?= $this->session->tel_airtel; ?>
											</strong></h5>
									</div>
								</div>
							</div>

							<!-- Modal -->
							<div class="modal fade" id="modifnumairtel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header text-center">
											<h4 class="modal-title text-white " id="exampleModalCenterTitle">Modifier numero Airtel money</h4>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body text-white ">
											<form action="<?= site_url('bpay\changenumber') ?>" method="post">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Ancien numero</label>
															<input type="text" class="form-control" name="old_number" placeholder="Ancien numero" value="" required>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Nouveau numero</label>
															<input type="text" class="form-control" name="new_number" placeholder="Nouveau numero" value="" required>
														</div>
													</div>
												</div>

										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
											<button type="submit" class="btn btn-primary">Modifier</button>
										</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-12 ">
								<div data-toggle="modal" data-target="#modifnumvdc" class="box box-inverse box-dangerr">
									<img src="<?= base_url('assets\logo\mpsa.png') ?>" alt="" style="position:absolute; width:25%;margin-left:66%;margin-top:1%">

									<div class="box-header with-border">
										<h6 class="box-title"> <strong>Numero m-psa</strong> </h6>
									</div>
									<div class="box-body">
										<h5> <strong> <?= $this->session->tel_vodacom; ?></strong></h5>
									</div>
								</div>
							</div>
							<!-- Modal -->
							<div class="modal fade" id="modifnumvdc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header text-center">
											<h4 class="modal-title text-white " id="exampleModalCenterTitle">Modifier numero M-psa</h4>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body text-white ">
											<form action="<?= site_url('bpay\changenumber') ?>" method="post">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Ancien numero</label>
															<input type="text" class="form-control" name="old_number" placeholder="Ancien numero" value="" required>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Nouveau numero</label>
															<input type="text" class="form-control" name="new_number" placeholder="Nouveau numero" value="" required>
														</div>
													</div>
												</div>

										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
											<button type="submit" class="btn btn-primary">Modifier</button>
										</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div data-toggle="modal" data-target="#modifnumorage" class="box colot box-inverse">
									<img src="<?= base_url('assets\logo\orange.png') ?>" alt="" style="position:absolute; width:20%;margin-left:63%;margin-top:1%">

									<div class="box-header with-border">
										<h6 class="box-title"> <strong>Numero orange-money</strong> </h6>
									</div>
									<div class="box-body" style="padding-bottom:10; padding-top: 11;">
										<h7> <strong> <?= $this->session->tel_orange; ?></strong></h7>
									</div>
								</div>
							</div>
							<!-- Modal -->
							<div class="modal fade" id="modifnumorage"" tabindex=" -1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header text-center">
											<h4 class="modal-title text-white " id="exampleModalCenterTitle">Modifier numero Orange money</h4>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body text-white ">
											<form action="<?= site_url('bpay\changenumber') ?>" method="post">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Ancien numero</label>
															<input type="text" class="form-control" name="old_number" placeholder="Ancien numero" value="" required>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Nouveau numero</label>
															<input type="text" class="form-control" name="new_number" placeholder="Nouveau numero" value="" required>
														</div>
													</div>
												</div>

										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
											<button type="submit" class="btn btn-primary">Modifier</button>
										</div>
										</form>
									</div>
								</div>
							</div>
							<style>
								.scrolling-wrapper {
									overflow-x: auto;
								}

								.colo {
									background-color: #ff7f00 !important;
									background-image: url(<?= base_url('assets\logo\airtel.png') ?>) !important;
								}
							</style>
						</div>
						<div class="col-lg-8 offset-2 col-12">
							<div class="box">
								<!-- <div class="box-header with-border">
									<h4 class="box-title">Infos personnelles</h4>
								</div> -->
								<!-- /.box-header -->
								<form class="form" method="post" action="modifprofie">
									<div class="box-body">
										<h4 class="box-title text-info"><i class="ti-user mr-15"></i>Infos personnelles</h4>
										<hr class="my-15">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Nom</label>
													<input type="text" class="form-control" name="name" placeholder="Nom" >
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Pseudo</label>
													<input type="text" class="form-control" name="pseudo" placeholder="Pseudo">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>E-mail</label>
													<input type="text" class="form-control" name="number" placeholder="E-mail">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Mot de passe</label>
													<input type="email" class="form-control" name="email" placeholder="Mot de pass">
												</div>
											</div>
											<button type="submit" class="btn btn-rounded btn-primary btn-outline">
												<i class="ti-save-alt"></i> Sauvegarder
											</button>
										</div>

									</div>
									<!-- /.box-body -->
									<!-- <div class="box-footer">
										<button type="button" class="btn btn-rounded btn-warning btn-outline mr-1">
											<i class="ti-trash"></i> Cancel
										</button>
										<button type="submit" class="btn btn-rounded btn-primary btn-outline">
											<i class="ti-save-alt"></i> Save
										</button>
									</div> -->
								</form>
							</div>
							<!-- /.box -->
						</div>
			</div>
			<!-- /.row -->

			</section>
			<!-- /.content -->
		</div>
	</div>
	<!-- /.content-wrapper -->
	<footer class="main-footer">
		<div class="pull-right d-none d-sm-inline-block">
			<ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
				<li class="nav-item">
					<a class="nav-link" href="javascript:void(0)">FAQ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://biz-payment.com/">www.bpay.com</a>
				</li>
			</ul>
		</div>
		&copy; 2020-2021 <a href="#">Bpay</a>. Tous les droits reservés.
	</footer>

	<!-- Control Sidebar -->
	<aside class="control-sidebar">
			<div class="rpanel-title">
				<span class="pull-right btn btn-circle p-10">
					<img src="<?= base_url('assets/images/svg-icon/close.svg') ?>" data-toggle="control-sidebar" class="img-fluid svg-icon" alt="">
				</span>
			</div> <!-- Create the tabs -->
			<ul class="nav nav-tabs control-sidebar-tabs">
				<li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab"><img src="<?= base_url('assets/images/svg-icon/apps.s') ?>" class="img-fluid svg-icon" alt=""></a></li>
				
				<li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><img src="<?= base_url('assets/images/svg-icon/advanced.s') ?>" class="img-fluid svg-icon" alt=""></a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<!-- Home tab content -->
				<div class="tab-pane" id="control-sidebar-home-tab">
					
					

						

					</div>

				</div>
				<!-- /.tab-pane -->
				<!-- Settings tab content -->
				
				<!-- /.tab-pane -->
			</div>
		</aside>
	<!-- /.control-sidebar -->

	<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
	<div class="control-sidebar-bg"></div>

	</div>
	<!-- ./wrapper -->

	<!-- Vendor JS -->
	<script type="text/javascript" src="<?= base_url('assets/js/vendors.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets\assets\vendor_components\bootstrap-select\dist\js\bootstrap-select.js') ?>"></script>
	<script src="<?= base_url('assets/assets/vendor_components/apexcharts-bundle/data.js') ?>"></script>
	<script src="<?= base_url('assets/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') ?>"></script>
	<!-- <script src="https://www.amcharts.com/lib/4/core.js"></script>
	<script src="https://www.amcharts.com/lib/4/charts.js"></script>
	<script src="https://www.amcharts.com/lib/4/themes/kelly.js"></script>
	<script src="https://www.amcharts.com/lib/4/themes/dark.js"></script>
	<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script> -->
	<script src="<?= base_url('assets/assets/vendor_components/Web-Ticker-master/jquery.webticker.min.js') ?>"></script>
	<script src="<?= base_url('assets/assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js') ?>"></script>
	<!-- Crypto Tokenizer Admin App -->
	<script src="<?= base_url('assets/js/template.js') ?>"></script>
	<script src="<?= base_url('assets\js\pages\dashboard9.js') ?>"></script>
	<script src="<?= base_url('assets\js\demo.js') ?>"></script>

	<!-- Modal -->
	<div class="modal   fade" id="recevoir">
		<div class="modal-dialog">
			<div class="modal-content  ">
				<div class="modal-header">
					<h4 class="modal-title">Recevoir un paiement</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
				</div>
				<div   id="orderDetails" class="modal-body">
					<form >
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Montant</label>
									<input id = "montantrecevoir" type="text" class="form-control"  placeholder="Montant"  required>
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									<label>Devise</label>
									<select id="currencydevise" name="devise" class="selectpicker col-md-12 col-sm-12 form-control" required>
										<option value="usd">USD</option>
										<option value="cdf">CDF</option>
									</select>
								</div>
							</div>

							<input id="busikey" type="hidden" value=<?= $value['business_key'] ?> class="form-control" name="business_key" id="key">
									
						</div>
						<hr>
						<div class="text-right">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
								<button id = "btnqrcode" type="button" data-key="<?=$value['business_key']?>" data-toggle="modal" data-target="#payer" class="btn btn-primary">
									payer
								</button>
							<div id="modal1" class="modalqr"  style="display: none">
						      <div class="modal-wrapper">
								    <img src = "" alt = "qr-code" style="position:absolute; width:25%;margin-left:76%;margin-top:16%">
						      </div>
						    </div>
						</div>
					</form>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	
	<input  type="hidden"  class="form-control" name="business_key" id="keybus" style="display: none">

	<div class="modal   fade" id="payer" >
		<div class="modal-dialog" >

		<div  class="modal-content  " style="height: 300px; width : 600px">
					
						<div class="row">
							<div class="col-md-6" style="height: 300px;">
								<div ><img id = "qrcodevalide" src = "" alt = "" style="height: 300px;
																		      width: 300px;
																		      padding: 1rem;
																		      border: 2px solid #bada55;
																		      border-radius: 0.5rem;
																		      grid-column: 1 / -1;">
								</div>
							</div>
							
							<div class="col-md-6" style="height: 200px;">
								<div >
									<img style="vertical-align: middle;
												width: 230px;
												height: 230px;
												display: block;
												margin-left: auto;
												margin-right: 45px;
												margin-top: 30px;" src="<?= base_url('assets/images/logo/b-vortex4w.png') ?>" alt="" srcset="">
								</div>
							</div>
						</div>
					
		</div>				
			
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- Modal -->
	<div class="modal  fade" id="abonnement">
		<div class="modal-dialog">
			<div class="modal-content  ">
				<div class="modal-header">
					<h4 class="modal-title">abonnement</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<p>One fine body&hellip;</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-rounded btn-danger" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-rounded btn-primary float-right">Save changes</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	
	<!-- /.modal -->

	<div class="modal fade" id="new_business">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Nouveau business</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="box-body">
						<form action="<?= site_url('Bpay/addBusiness') ?>" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Nom du business</label>
										<input type="text" class="form-control" name="business_name" placeholder="Nom du business" value="" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Description</label>
										<input type="text" class="form-control" name="business_description" placeholder="Description du business" value="" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Categories</label>
								<select class="selectpicker col-md-12 col-sm-12 form-control" name="categorie">
									<option value="1">E-commerce</option>
									<option value="2">Shop</option>
									<option value="3">Taxi</option>
								</select>
							</div> 
							<hr>
							<div class="text-right">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
								<button type="submit" class="btn btn-primary">Ajouter</button>
							</div>
						</form>

					</div>
					<!-- Modal -->
				</div>

			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	
	<!-- /.modal -->


	<script>

		$(document).ready(function(){
			$("#btnqrcode").click(function(){
				var amountmodal = $("#recevoir #montantrecevoir" ).val().trim();
				var currencymodal = $("#recevoir #currencydevise").val().trim();
				var businesskeymodal = $("#recevoir #busikey").val().trim();
	
				
				let qrcode = document.getElementById("qrcodevalide");
			    let qrbtn = document.getElementById("btnqrcode");
			    
			    let amount = amountmodal;
			    let currency = currencymodal;
			    let business_key = businesskeymodal ;
	
			    
			    let text = amount+"/"+currency+"/"+business_key;
			
			    var text_encode = btoa(text);
			    
			    
			 
			    
			    let size = "1000x1000";
			    let data = text_encode;
					
			    let baseURL = "http://api.qrserver.com/v1/create-qr-code/";
			    
			    let url = `${baseURL}?data=${data}&size=${size}`;
			    
			    qrcode.src = url;
			    
			    
			    
			    function select (el) {
			    
			        return document.querySelector(el);
			    
			    }
			});
		});

  </script>
	
	



</body>



</html>



<script type="text/javascript">
	$(window).on('load', function() {
		$('#changenum').modal('show');
	}
	);
</script>

<script>
    $('.attribut').click(function() {
    var key = $(this).data('key');      
    $('#key').val(key);  
   
    } );
</script>
