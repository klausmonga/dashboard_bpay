<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="<?= base_url('assets/images/logo/b-vortex4.png') ?>">

	<title>Bpay</title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="<?= base_url('assets/css/vendors_css.css') ?>">
	<!-- Style-->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/skin_color.css') ?>">

	<!-- style vendor -->
	<?= $style; ?>

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
								<li class="user-header bg-img" style="background-image: url(<?= base_url('assets/images/user-info.jpg') ?>)" data-overlay="3">
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
					<div class="row">
						<div class="col-xl-8 col-12">
							<div class="row">
								<div class="col-lg-4 col-12">
									<div class="box pull-up">
										<div class="box-body">
											<h5 class="mb-0">
												<img src="<?= base_url('assets\logo\orange.png') ?>" alt="">
												<hr>
											</h5>
											<br>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-12">
									<div class="box pull-up">
										<div class="box-body">
											<h5 class="mb-0">
												<img src="<?= base_url('assets\logo\airtel.png') ?>" alt="">
												<hr>
											</h5>
											<br>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-12">
									<div class="box pull-up">
										<div class="box-body">
											<h5 class="mb-0">
												<img src="<?= base_url('assets\logo\mpsa.png') ?>" alt="">
												<hr>
											</h5>
											<br>
										</div>
									</div>
								</div>
							</div>
							
							<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Transactions envoyées</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Transactions recues</a>
								</li>
							</ul>
							<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
									<div class="row" >
										<table class="table no-bordered no-margin table-striped">
											<thead>
												<tr>
													<th>ITM</th>
													<th>code</th>
													<th>amount</th>
													<th>currency</th>
													<th>type</th>
												</tr>
											</thead>
										</table>
										<?php $i = 1;
										$varferrors = isset($transactionsended) ? $transactionsended : null;
										foreach ($transactionsended as $value) {
											# code...
										?>
											<tbody>
											<div class="box box-slided-up">
													<div class="box-header with-border">
														<h6 class="box-title"><?= $value->code ?></h6>
														<ul class="box-controls pull-right">
															<li><a class="box-btn-slide" href="#"></a></li>
														</ul>
													</div>
													<div class="box-body">
														<div class="table-responsive">
															<table class="table no-bordered no-margin table-striped">
																<tbody>
																	<tr>
																		<td><?php echo $i; ?></td>
																		<td><?= $value->code ?></td>
																		<td><i class="fa fa-arrow-up text-danger"></i><?= $value->amount ?></td>
																		<td><?= $value->currency ?></td>
																		<td><span class="label label-success"><?= $value->type ?></span></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
										<?php $i++;}?>
											</tbody>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
									<div class="row">
										<table class="table no-bordered no-margin table-striped">
											<thead>
												<tr>
													<th>ITM</th>
													<th>code</th>
													<th>amount</th>
													<th>currency</th>
													<th>type</th>
												</tr>
											</thead>
										</table>
										<?php $i = 1;
										foreach ($transactionreceived as $value){
											# code...
										?><tbody>
											<div class="box box-slided-up">
													<div class="box-header with-border">
														<h6 class="box-title"><?= $value->code ?></h6>
														<ul class="box-controls pull-right">
															<li><a class="box-btn-slide" href="#"></a></li>
														</ul>
													</div>
													<div class="box-body">
														<div class="table-responsive">
															<table class="table no-bordered no-margin table-striped">
																<tbody>
																	<tr>
																		<td><?php echo $i; ?></td>
																		<td><?= $value->code ?></td>
																		<td><i class="fa fa-arrow-up text-danger"></i><?= $value->amount ?></td>
																		<td><?= $value->currency ?></td>
																		<td><span class="label label-success"><?= $value->type ?></span></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
										<?php $i++;} ?>
										</tbody>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-12">
						<style> 
						.table-responsive {
    						max-height:400px;
							}
						</style>
							<div class="box">
							<div class="box-header">
								<h4 class="box-title">
									Business
								</h4>
							</div>
							<?php
							if ($business != null) {
								$i=1;
								foreach ($business as $key => $value) { ?>
									<div class="box-body p-0">
										<div id="slimtest1">
											<div class="d-flex bb-1 py-10 px-15">
												<?php
												if ($value['type'] == 2) { ?>
													<div class="mr-2"><img src="<?= base_url('assets/icon/shop_50px.png') ?>" alt="" srcset=""></div>
												<?php } elseif ($value['type'] == 3) { ?>
													<div class="mr-2"><img src="<?= base_url('assets/icon/taxi_50px.png') ?>" alt="" srcset=""></div>

												<?php } elseif ($value['type'] == 1) { ?>
													<div class="mr-2"><img src="<?= base_url('assets/icon/e-commerce_50px.png') ?>" alt="" srcset=""></div>

												<?php } elseif ($value['type'] == 0) { ?>
													<div class="mr-2"><img src="<?= base_url('assets/icon/help_50px.png') ?>" alt="" srcset=""></div>

												<?php } ?>
												<div>
													<h4 class="mb-0"><?php
																		if ($value['type'] == 1) {
																			echo "E-commerce";
																		} elseif ($value['type'] == 2) {
																			# code...
																			echo "Shop";
																		} elseif ($value['type'] == 3) {
																			# code...
																			echo "Taxi";
																		}
																		?></h4>
													<p style=" -webkit-line-clamp : 4;
																display : -webkit-box;
																-webkit-box-orient : vertical;
																word-wrap : break-word;
																max-width : 30ch;
																 " >Déscription : <?= urldecode($value['description']) ?></p>
													<p class="text-fade" >Business key : <?= $value['business_key']?> </p>
													<?php 
														if ($value['type'] == 1) { ?>
																<p class="text-fade">Dev key : <?= $value['dev_key']?> </p>
															<?php } ?>
													<?php $tab[$i]=$value['description'] ?>
													<?php if ($value['is_expired'] == 0) { ?>
														<div>
															<p class="text-right"><span class="label label-danger"> Inactif </span></p>
														</div>
													<?php }
													if ($value['is_expired'] != 0) { 
														if ($value['is_expired'] == 1 ){ ?>
														<div>
															<p class="text-right"><span class="label label-success"><?= $value['is_expired'] ?> transaction restante</span></p>
														</div>
														<?php }
														else { ?>
															<div>
																<p class="text-right"><span class="label label-success"><?= $value['is_expired'] ?> transactions restantes</span></p>
															</div>
														<?php } 
														} ?>
													

													<div>
														<!--button type="button" class="waves-effect waves-light btn btn-outline btn-primary mb-5" data-toggle="modal" data-target="#abonnement"><i class="fa fa-paper-plane"></i> Abonnement</button-->
														
														<?php 
														if ($value['type'] > 1) { ?>
																<button type="button" data-key="<?=$value['business_key']?>" data-toggle="modal" data-target="#recevoir" class="waves-effect waves-light btn btn-outline btn-info mb-5 attribut"><i class="fa fa-money"></i> Recevoir</button>
															<?php } ?>
														
														
													
													</div>
												</div>
											</div>

										</div>
									</div>
								
								<?php 
								$i++; } ?>
							<?php } else { ?>
								<div class="d-flex bb-1 py-10 px-15 ">
									<div>
										<h4 class="text-center">Aucun business à afficher</h4>
									</div>
								</div>
							<?php	} ?>

							<div class="box-footer p-0 bg-light">
								<a href="#" class="d-block p-15 text-center" data-toggle="modal" data-target="#new_business"><i class="fa fa-plus"></i> Ajouter un business</a>
							</div>					
						</div>
						<!-- /.box-body -->
							</div>
						</div>
					</div>
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
						<a class="nav-link" href="https://biz-payment.com">www.bpay.com</a>
					</li>
				</ul>
			</div>&copy;
			<?php	
				$Object = new DateTime();  
				$year = $Object->format("Y");
				echo $year - 1 .'-'.$year;
			?>
			<a href="#">Bpay </a>.Tous les droits reservés
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

	</div>
	<!-- ./wrapper -->
	<!-- Vendor JS -->
	<script type="text/javascript" src="<?= base_url('assets/js/vendors.min.js') ?>"></script>
	<!-- /.modal -->

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
							<div class="col-md-5 offset-1">
								<div class="form-group">
									<label>Montant</label>
									<input id = "montantrecevoir" type="text" class="form-control"  placeholder="Montant"  required>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<label>Devise</label>
									<select id="currencydevise" name="devise" class="col-md-12 col-sm-12 form-control" required>
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
				<form action="<?= site_url('Bpay/subscription') ?>" method="post">
					<div class="modal-body">
						<div class="row">
							<div class="form-group">
								<label>Nombre des transactions</label>
								<input name="days" type="text" class="form-control"  placeholder="Montant"  required>
							</div>
							<div class="form-group">
								<label>Devise</label>
								<select name="currency" class="col-md-12 col-sm-12 form-control" required>
									<option value="usd">USD</option>
									<option value="cdf">CDF</option>
								</select>
							</div>
						</div>
						<input id="busikey" type="hidden" value=<?= $value['business_id'] ?> class="form-control" name="business_id" id="key">
					</div>
					<hr>
					<div class="modal-footer">
						<button type="button" class="btn btn-rounded btn-danger" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-rounded btn-primary float-right" data-key="<?=$value['business_key']?>">Save changes</button>
					</div>
				</form>
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
								<select class="col-md-12 col-sm-12 form-control" name="categorie">
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
	<script src="<?= base_url('assets/assets/vendor_components/apexcharts-bundle/data.js') ?>"></script>
	<script src="<?= base_url('assets/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') ?>"></script>
	<!--<script src="https://www.amcharts.com/lib/4/core.js"></script>
	<script src="https://www.amcharts.com/lib/4/charts.js"></script>
	<script src="https://www.amcharts.com/lib/4/themes/kelly.js"></script>
	<script src="https://www.amcharts.com/lib/4/themes/dark.js"></script>
	<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script> -->
	<script src="<?= base_url('assets/assets/vendor_components/Web-Ticker-master/jquery.webticker.min.js') ?>"></script>

	<!-- Crypto Tokenizer Admin App -->
	<script src="<?= base_url('assets/js/template.js') ?>"></script>
	<script src="<?= base_url('assets\js\pages\dashboard9.js') ?>"></script>
	<script src="<?= base_url('assets\js\demo.js') ?>"></script>
</body>
</html>
