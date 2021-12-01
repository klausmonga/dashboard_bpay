<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Connexion</title>
                                <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='' rel='stylesheet'>
                                <link rel="stylesheet" href="<?= base_url('assets/assets/vendor_components/bootstrap/dist/css/bootstrap.css') ?>">
                                <style>@import url(https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap);

body {
    background: #f5f5f5;
}

@media only screen and (max-width: 767px) {
    .hide-on-mobile {
        display: none;
    }
}

.login-box {
    background: url(https://i.imgur.com/73BxBuI.png);
    background-size: cover;
    background-position: center;
    padding: 50px;
    margin: 50px auto;
    min-height: 700px;
    -webkit-box-shadow: 0 2px 60px -5px rgba(0, 0, 0, 0.1);
    box-shadow: 0 2px 60px -5px rgba(0, 0, 0, 0.1);
}

.logo {
    font-family: "Script MT";
    font-size: 54px;
    text-align: center;
    color: #888888;
    margin-bottom: 50px;
}

.logo .logo-font {
    color: #3BC3FF;
}

@media only screen and (max-width: 767px) {
    .logo {
        font-size: 34px;
    }
}

.header-title {
    text-align: center;
    margin-bottom: 50px;
}

.login-form {
    max-width: 300px;
    margin: 0 auto;
}

.login-form .form-control {
    border-radius: 0;
    margin-bottom: 30px;
}

.login-form .form-group {
    position: relative;
}

.login-form .form-group .forgot-password {
    position: absolute;
    top: 6px;
    right: 15px;
}

.login-form .btn {
    border-radius: 0;
    -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

.login-form .btn.btn-primary {
    background: #3BC3FF;
    border-color: #31c0ff;
}

.slider-feature-card {
    background: #fff;
    max-width: 280px;
    margin: 0 auto;
    padding: 30px;
    text-align: center;
    -webkit-box-shadow: 0 2px 25px -3px rgba(0, 0, 0, 0.1);
    box-shadow: 0 2px 25px -3px rgba(0, 0, 0, 0.1);
}

.slider-feature-card img {
    height: 80px;
    margin-top: 30px;
    margin-bottom: 30px;
}

.slider-feature-card h3,
.slider-feature-card p {
    margin-bottom: 30px;
}

.carousel-indicators {
    bottom: -50px;
}

.carousel-indicators li {
    cursor: pointer;
}</style>
                                <script type='text/javascript' src=''></script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
                            </head>
                            <body oncontextmenu='return false' class='snippet-body'>
                            <section class="body">
    <div class="container">
        <div class="login-box">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <span class="logo-font"><img src="<?= base_url('assets\images\logo\bpay.png') ?>" alt="" style="max-width: 40%;" ></span>
                    </div>
                </div>
            </div>
            
            <div class="row">
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
                <div class="col-sm-6">
                    <br>
                    <h3 class="header-title">CONNEXION</h3>
                    <form action="<?= site_url('bpay\connexion') ?>" method="POST" class="was-validated">
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Entrer le numero de telephone" name="phone_number"  size="12" minlength="9" maxlength="10" required autofocus>
                            <span class="ion ion-email form-control-feedback text-white"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" type="password" class="form-control text-white plc-white" id="password" placeholder="Entrer le mot de passe" name="password" inputmode="numeric" minlength="4"  maxlength="8" size="8" required autofocus>
                            <a href="#!" class="forgot-password">Mot de passe oublié?</a>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Se connecter</button>
                        </div>
                        <div class="form-group">
                            <div class="text-center">Nouveau membre? <a href="#!">S'enregistrer</a></div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6 hide-on-mobile">
                    <div id="demo" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                        </ul>
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="slider-feature-card">
                                    <img src="<?= base_url('assets\images\logo\14.png') ?>" alt="">
                                    <h3 class="slider-title">Gestion</h3>
                                    <p class="slider-description">Vous avez une vue globale de toutes vos activités </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="slider-feature-card">
                                    <img src="<?= base_url('assets\images\logo\82.png') ?>" alt="">
                                    <h3 class="slider-title">Rapidité</h3>
                                    <p class="slider-description">Vous devenez très productif et toutes vos opérations financières sont rapide</p>
                                </div>
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
                            <script type='text/javascript'></script>
                            <script type="text/javascript" src="<?= base_url('assets\js\jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets\js\bootstrap.bundle.min.js') ?>"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                            </body>
                        </html>