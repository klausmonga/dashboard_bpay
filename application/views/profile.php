<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="<?= base_url('assets/images/favicon.ico') ?>">

	<title>Crypto Tokenizer UI Interface & Cryptocurrency Admin Template</title>

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
						<span class="light-logo"><img src="<?= base_url('assets/images/logo-dark-text.png') ?>" alt="logo"></span>
						<span class="dark-logo"><img src="<?= base_url('assets/images/logo-light-text.png') ?>" alt="logo"></span>
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
						<li class="dropdown notifications-menu">
							<a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="Notifications">
								<img src="<?= base_url('assets/images/svg-icon/notifications.svg') ?>" class="img-fluid svg-icon" alt="">
							</a>
							<ul class="dropdown-menu animated bounceIn">

								<li class="header">
									<div class="p-20">
										<div class="flexbox">
											<div>
												<h4 class="mb-0 mt-0">Notifications</h4>
											</div>
											<div>
												<a href="#" class="text-danger">Clear All</a>
											</div>
										</div>
									</div>
								</li>

								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu sm-scrol">
										<li>
											<a href="#">
												<i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-user text-primary"></i> Nunc fringilla lorem
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
											</a>
										</li>
									</ul>
								</li>
								<li class="footer">
									<a href="#">View all</a>
								</li>
							</ul>
						</li>

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
											<span>Samuel Brus</span>
											<small>samuel@gmail.com</small>
										</h4>
									</div>
								</li>
								<!-- Menu Body -->
								<li class="user-body">
									<a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-person"></i> My Profile</a>
									<a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-bag"></i> My Balance</a>
									<a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-email-unread"></i> Inbox</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-settings"></i> Account Setting</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="javascript:void(0)"><i class="ion-log-out"></i> Logout</a>
									<div class="dropdown-divider"></div>
									<div class="p-10"><a href="javascript:void(0)" class="btn btn-sm btn-rounded btn-success">View Profile</a></div>
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
						<div class="col-lg-6 col-12">
							<div class="box">
								<div class="box-header with-border">
									<h4 class="box-title">Sample form 1</h4>
								</div>
								<!-- /.box-header -->
								<form class="form">
									<div class="box-body">
										<h4 class="box-title text-info"><i class="ti-user mr-15"></i> Personal Info</h4>
										<hr class="my-15">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>First Name</label>
													<input type="text" class="form-control" placeholder="First Name" value="datauser here">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Last Name</label>
													<input type="text" class="form-control" placeholder="Last Name">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>E-mail</label>
													<input type="text" class="form-control" placeholder="E-mail">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Contact Number</label>
													<input type="text" class="form-control" placeholder="Phone">
												</div>
											</div>
										</div>
										<h4 class="box-title text-info"><i class="ti-save mr-15"></i> Requirements</h4>
										<hr class="my-15">
										<div class="form-group">
											<label>Company</label>
											<input type="text" class="form-control" placeholder="Company Name">
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Interested in</label>
													<select class="form-control">
														<option>Interested in</option>
														<option>design</option>
														<option>development</option>
														<option>illustration</option>
														<option>branding</option>
														<option>video</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Budget</label>
													<select class="form-control">
														<option>Budget</option>
														<option>less than 5000$</option>
														<option>5000$ - 10000$</option>
														<option>10000$ - 20000$</option>
														<option>more than 20000$</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label>Select File</label>
											<label class="file">
												<input type="file" id="file">
											</label>
										</div>
										<div class="form-group">
											<label>About Project</label>
											<textarea rows="5" class="form-control" placeholder="About Project"></textarea>
										</div>
									</div>
									<!-- /.box-body -->
									<div class="box-footer">
										<button type="button" class="btn btn-rounded btn-warning btn-outline mr-1">
											<i class="ti-trash"></i> Cancel
										</button>
										<button type="submit" class="btn btn-rounded btn-primary btn-outline">
											<i class="ti-save-alt"></i> Save
										</button>
									</div>
								</form>
							</div>
							<!-- /.box -->
						</div>

						<div class="col-lg-6 col-12">
							<div class="box">
								<div class="box-header with-border">
									<h4 class="box-title">Sample form 2</h4>
								</div>
								<!-- /.box-header -->
								<form class="form">
									<div class="box-body">
										<h4 class="box-title text-info"><i class="ti-user mr-15"></i> About User</h4>
										<hr class="my-15">
										<div class="row">
											<div class="col-md-6">

												<div class="form-group">
													<label>First Name</label>
													<input type="text" class="form-control" placeholder="First Name">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Last Name</label>
													<input type="text" class="form-control" placeholder="Last Name">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>E-mail</label>
													<input type="text" class="form-control" placeholder="E-mail">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Contact Number</label>
													<input type="text" class="form-control" placeholder="Phone">
												</div>
											</div>
										</div>
										<h4 class="box-title text-info"><i class="ti-envelope mr-15"></i> Contact Info & Bio</h4>
										<hr class="my-15">
										<div class="form-group">
											<label>Email</label>
											<input class="form-control" type="email" placeholder="email">
										</div>
										<div class="form-group">
											<label>Website</label>
											<input class="form-control" type="url" placeholder="http://">
										</div>
										<div class="form-group">
											<label>Contact Number</label>
											<input class="form-control" type="tel" placeholder="Contact Number">
										</div>
										<div class="form-group">
											<label>Bio</label>
											<textarea rows="4" class="form-control" placeholder="Bio"></textarea>
										</div>
									</div>
									<!-- /.box-body -->
									<div class="box-footer text-right">
										<button type="button" class="btn btn-rounded btn-warning btn-outline mr-1">
											<i class="ti-trash"></i> Cancel
										</button>
										<button type="submit" class="btn btn-rounded btn-primary btn-outline">
											<i class="ti-save-alt"></i> Save
										</button>
									</div>
								</form>
							</div>
							<!-- /.box -->
						</div>
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
					<a class="nav-link" href="#">Purchase Now</a>
				</li>
			</ul>
		</div>
		&copy; 2020 <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
	</footer>

	<!-- Control Sidebar -->
	<aside class="control-sidebar">

		<div class="rpanel-title">
			<span class="pull-right btn btn-circle p-10">
				<img src="<?= base_url('assets/images/svg-icon/close.svg') ?>" data-toggle="control-sidebar" class="img-fluid svg-icon" alt="">
			</span>
		</div> <!-- Create the tabs -->
		<ul class="nav nav-tabs control-sidebar-tabs">
			<li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab"><img src="<?= base_url('assets/images/svg-icon/apps.svg') ?>" class="img-fluid svg-icon" alt=""></a></li>
			<li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><img src="<?= base_url('assets/images/svg-icon/advanced.svg') ?>" class="img-fluid svg-icon" alt=""></a></li>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content">
			<!-- Home tab content -->
			<div class="tab-pane" id="control-sidebar-home-tab">
				<div class="flexbox">
					<a href="javascript:void(0)" class="text-grey">
						<i class="ti-more"></i>
					</a>
					<p>Users</p>
					<a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
				</div>
				<div class="lookup lookup-sm lookup-right d-none d-lg-block">
					<input type="text" name="s" placeholder="Search" class="w-p100">
				</div>
				<div class="media-list media-list-hover mt-20">
					<div class="media py-10 px-0">
						<a class="avatar avatar-lg status-success" href="#">
							<img src="<?= base_url('assets/images/avatar/1.jpg') ?>" alt="...">
						</a>
						<div class="media-body">
							<p class="font-size-16">
								<a class="hover-primary" href="#"><strong>Tyler</strong></a>
							</p>
							<p>Praesent tristique diam...</p>
							<span>Just now</span>
						</div>
					</div>

					<div class="media py-10 px-0">
						<a class="avatar avatar-lg status-danger" href="#">
							<img src="<?= base_url('assets/images/avatar/2.jpg') ?>" alt="...">
						</a>
						<div class="media-body">
							<p class="font-size-16">
								<a class="hover-primary" href="#"><strong>Luke</strong></a>
							</p>
							<p>Cras tempor diam ...</p>
							<span>33 min ago</span>
						</div>
					</div>

					<div class="media py-10 px-0">
						<a class="avatar avatar-lg status-warning" href="#">
							<img src="<?= base_url('assets/images/avatar/3.jpg') ?>" alt="...">
						</a>
						<div class="media-body">
							<p class="font-size-16">
								<a class="hover-primary" href="#"><strong>Evan</strong></a>
							</p>
							<p>In posuere tortor vel...</p>
							<span>42 min ago</span>
						</div>
					</div>

					<div class="media py-10 px-0">
						<a class="avatar avatar-lg status-primary" href="#">
							<img src="<?= base_url('assets/images/avatar/4.jpg') ?>" alt="...">
						</a>
						<div class="media-body">
							<p class="font-size-16">
								<a class="hover-primary" href="#"><strong>Evan</strong></a>
							</p>
							<p>In posuere tortor vel...</p>
							<span>42 min ago</span>
						</div>
					</div>

					<div class="media py-10 px-0">
						<a class="avatar avatar-lg status-success" href="#">
							<img src="<?= base_url('assets/images/avatar/1.jpg') ?>" alt="...">
						</a>
						<div class="media-body">
							<p class="font-size-16">
								<a class="hover-primary" href="#"><strong>Tyler</strong></a>
							</p>
							<p>Praesent tristique diam...</p>
							<span>Just now</span>
						</div>
					</div>

					<div class="media py-10 px-0">
						<a class="avatar avatar-lg status-danger" href="#">
							<img src="<?= base_url('assets/images/avatar/2.jpg') ?>" alt="...">
						</a>
						<div class="media-body">
							<p class="font-size-16">
								<a class="hover-primary" href="#"><strong>Luke</strong></a>
							</p>
							<p>Cras tempor diam ...</p>
							<span>33 min ago</span>
						</div>
					</div>

					<div class="media py-10 px-0">
						<a class="avatar avatar-lg status-warning" href="#">
							<img src="<?= base_url('assets/images/avatar/3.jpg') ?>" alt="...">
						</a>
						<div class="media-body">
							<p class="font-size-16">
								<a class="hover-primary" href="#"><strong>Evan</strong></a>
							</p>
							<p>In posuere tortor vel...</p>
							<span>42 min ago</span>
						</div>
					</div>

					<div class="media py-10 px-0">
						<a class="avatar avatar-lg status-primary" href="#">
							<img src="<?= base_url('assets/images/avatar/4.jpg') ?>" alt="...">
						</a>
						<div class="media-body">
							<p class="font-size-16">
								<a class="hover-primary" href="#"><strong>Evan</strong></a>
							</p>
							<p>In posuere tortor vel...</p>
							<span>42 min ago</span>
						</div>
					</div>

				</div>

			</div>
			<!-- /.tab-pane -->
			<!-- Settings tab content -->
			<div class="tab-pane" id="control-sidebar-settings-tab">
				<div class="flexbox">
					<a href="javascript:void(0)" class="text-grey">
						<i class="ti-more"></i>
					</a>
					<p>Todo List</p>
					<a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
				</div>
				<ul class="todo-list mt-20">
					<li class="py-15 px-5 by-1">
						<!-- checkbox -->
						<input type="checkbox" id="basic_checkbox_1" class="filled-in">
						<label for="basic_checkbox_1" class="mb-0 h-15"></label>
						<!-- todo text -->
						<span class="text-line">Nulla vitae purus</span>
						<!-- Emphasis label -->
						<small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
						<!-- General tools such as edit or delete-->
						<div class="tools">
							<i class="fa fa-edit"></i>
							<i class="fa fa-trash-o"></i>
						</div>
					</li>
					<li class="py-15 px-5">
						<!-- checkbox -->
						<input type="checkbox" id="basic_checkbox_2" class="filled-in">
						<label for="basic_checkbox_2" class="mb-0 h-15"></label>
						<span class="text-line">Phasellus interdum</span>
						<small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
						<div class="tools">
							<i class="fa fa-edit"></i>
							<i class="fa fa-trash-o"></i>
						</div>
					</li>
					<li class="py-15 px-5 by-1">
						<!-- checkbox -->
						<input type="checkbox" id="basic_checkbox_3" class="filled-in">
						<label for="basic_checkbox_3" class="mb-0 h-15"></label>
						<span class="text-line">Quisque sodales</span>
						<small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
						<div class="tools">
							<i class="fa fa-edit"></i>
							<i class="fa fa-trash-o"></i>
						</div>
					</li>
					<li class="py-15 px-5">
						<!-- checkbox -->
						<input type="checkbox" id="basic_checkbox_4" class="filled-in">
						<label for="basic_checkbox_4" class="mb-0 h-15"></label>
						<span class="text-line">Proin nec mi porta</span>
						<small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
						<div class="tools">
							<i class="fa fa-edit"></i>
							<i class="fa fa-trash-o"></i>
						</div>
					</li>
					<li class="py-15 px-5 by-1">
						<!-- checkbox -->
						<input type="checkbox" id="basic_checkbox_5" class="filled-in">
						<label for="basic_checkbox_5" class="mb-0 h-15"></label>
						<span class="text-line">Maecenas scelerisque</span>
						<small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
						<div class="tools">
							<i class="fa fa-edit"></i>
							<i class="fa fa-trash-o"></i>
						</div>
					</li>
					<li class="py-15 px-5">
						<!-- checkbox -->
						<input type="checkbox" id="basic_checkbox_6" class="filled-in">
						<label for="basic_checkbox_6" class="mb-0 h-15"></label>
						<span class="text-line">Vivamus nec orci</span>
						<small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
						<div class="tools">
							<i class="fa fa-edit"></i>
							<i class="fa fa-trash-o"></i>
						</div>
					</li>
					<li class="py-15 px-5 by-1">
						<!-- checkbox -->
						<input type="checkbox" id="basic_checkbox_7" class="filled-in">
						<label for="basic_checkbox_7" class="mb-0 h-15"></label>
						<!-- todo text -->
						<span class="text-line">Nulla vitae purus</span>
						<!-- Emphasis label -->
						<small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
						<!-- General tools such as edit or delete-->
						<div class="tools">
							<i class="fa fa-edit"></i>
							<i class="fa fa-trash-o"></i>
						</div>
					</li>
					<li class="py-15 px-5">
						<!-- checkbox -->
						<input type="checkbox" id="basic_checkbox_8" class="filled-in">
						<label for="basic_checkbox_8" class="mb-0 h-15"></label>
						<span class="text-line">Phasellus interdum</span>
						<small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
						<div class="tools">
							<i class="fa fa-edit"></i>
							<i class="fa fa-trash-o"></i>
						</div>
					</li>
					<li class="py-15 px-5 by-1">
						<!-- checkbox -->
						<input type="checkbox" id="basic_checkbox_9" class="filled-in">
						<label for="basic_checkbox_9" class="mb-0 h-15"></label>
						<span class="text-line">Quisque sodales</span>
						<small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
						<div class="tools">
							<i class="fa fa-edit"></i>
							<i class="fa fa-trash-o"></i>
						</div>
					</li>
					<li class="py-15 px-5">
						<!-- checkbox -->
						<input type="checkbox" id="basic_checkbox_10" class="filled-in">
						<label for="basic_checkbox_10" class="mb-0 h-15"></label>
						<span class="text-line">Proin nec mi porta</span>
						<small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
						<div class="tools">
							<i class="fa fa-edit"></i>
							<i class="fa fa-trash-o"></i>
						</div>
					</li>
				</ul>
			</div>
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

	<script src="<?= base_url('assets/assets/vendor_components/apexcharts-bundle/data.js') ?>"></script>
	<script src="<?= base_url('assets/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') ?>"></script>
	<!-- <script src="https://www.amcharts.com/lib/4/core.js"></script>
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