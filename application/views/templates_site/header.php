<!DOCTYPE html>
<html lang="zxx" class="shop">

<!-- Mirrored from okler.net/previews/ezy/1.1.0/shop-3 by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 10:32:27 GMT -->

<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>SANTAL - Home</title>
	
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="EZY - Responsive HTML5 Template">
	<meta name="author" content="okler.net">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet">


	<!-- Vendor CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/font-awesome/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/animate/animate.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/linear-icons/css/linear-icons.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/magnific-popup/magnific-popup.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/theme.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/theme-elements.css">

	<!-- Current Page CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/rs-plugin/css/layers.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/rs-plugin/css/navigation.css">

	<!-- Skin CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/skins/default.css">
	<script src="<?= base_url() ?>assets/master/style-switcher/style.switcher.localstorage.js"></script>

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css">
	<link rel="icon" href="<?= base_url() ?>assets/img/logos/logo.png" >

	<!-- Head Libs -->
	<script src="<?= base_url() ?>assets/vendor/modernizr/modernizr.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>

</head>

<body>
	<?php if ($this->session->flashdata("user_in")) { ?>
		<p class="alert alert-success my-3 mx-5 animated zoomIn"><?= $this->session->flashdata("user_in") ?></p>
	<?php } ?>
	<?php if ($this->session->flashdata("user_out")) { ?>
		<p class="alert alert-warning my-3 mx-5 animated zoomIn"><?= $this->session->flashdata("user_out") ?></p>
	<?php } ?>
	<?php if ($this->session->flashdata("testimony_sent")) { ?>
		<p class="alert alert-success my-3 mx-5 animated zoomIn"><?= $this->session->flashdata("testimony_sent") ?></p>
	<?php } ?>
	<?php if ($this->session->flashdata("success_sale")) { ?>
		<p class="alert alert-success my-3 mx-5 animated zoomIn"><?= $this->session->flashdata("success_sale") ?></p>
	<?php } ?>
	<div class="body">
		<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 120, 'stickyChangeLogo': false}">
			<div class="header-body">
				<div class="header-top">
					<div class="header-top-container container">
						<div class="header-row">
							<div class="header-column justify-content-start">
								<span class="d-none d-sm-flex align-items-center">
									<i class="fas fa-map-marker-alt mr-1"></i>
									<?= $contact[1]["value"] ?>
								</span>
								<span class="d-none d-sm-flex align-items-center ml-4">
									<i class="fas fa-phone mr-1"></i>
									<a href="tel:+216<?= $contact[0]["value"] ?>"><?= $contact[0]["value"] ?></a>
								</span>
							</div>
							<div class="header-column justify-content-end">
								<ul class="nav">
									<!-- <li><a href="#" class="header-search-button order-1 text-5 d-none d-sm-block mt-2 mr-xl-2">
											<i class="lnr lnr-magnifier pink-color "></i>
										</a></li> -->
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url() ?>contact-us">Contactez-nous</a>
									</li>
									<!-- <li class="nav-item">
										<a class="nav-link" href="about-us-1">Qui sommes nous</a>
									</li> -->
									<!-- <li class="nav-item">
										<a href="#" class="nav-link dropdown-menu-toggle py-2" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
											English	<i class="fas fa-angle-down fa-sm"></i>
										</a>
										<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">
											<li><a href="#" class="no-skin"><img src="img/blank.gif" class="flag flag-us" alt="English" /> English</a></li>
											<li><a href="#" class="no-skin"><img src="img/blank.gif" class="flag flag-es" alt="Español" /> Español</a></li>
											<li><a href="#" class="no-skin"><img src="img/blank.gif" class="flag flag-fr" alt="Française" /> Française</a></li>
										</ul>
									</li> -->
								</ul>
								<ul class="header-top-social-icons social-icons social-icons-transparent d-none d-md-block">
									<li class="social-icons-facebook">
										<a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
									</li>
									<li class="social-icons-linkedin">
										<a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-linkedin"></i></a>
									</li>
									<li class="social-icons-instagram">
										<a href="http://www.instagram.com/" target="_blank" title="Instragram"><i class="fab fa-instagram"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="header-container " style="padding:0 40px; margin:0">
					<div class="header-row">
						<div class="header-column justify-content-start">
							<div class="header-logo">
								<a href="<?= base_url() ?>">
									<img alt="Santal" style="width: 100px" src="<?= base_url() ?>assets/img/logos/logo-santal-light.png">
								</a>
							</div>
						</div>
						<div class="header-column justify-content-end">
							<div class="header-search-expanded">
								<form method="GET">
									<div class="input-group bg-light border">
										<input type="text" class="form-control text-4" name="s" placeholder="I'm looking for..." aria-label="I'm looking for...">
										<span class="input-group-btn">
											<button class="btn" type="submit"><i class="lnr lnr-magnifier text-color-dark"></i></button>
										</span>
									</div>
								</form>
							</div>
							<div class="header-nav justify-content-start">
								<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
									<nav class="collapse">
										<ul class="nav flex-column flex-lg-row" id="mainNav">
											<li class="dropdown dropdown-mega">
												<a class="dropdown-item dropdown-toggle active" href="<?= base_url() ?>">
													ACCEUIL
												</a>
											</li>
											<?php foreach ($women_categories as $categ) { ?>

												<li class="dropdown dropdown-mega dropdown-mega-style-2">
													<a class="dropdown-item dropdown-toggle" href="<?= base_url() ?>produits#femme_<?php echo $categ->nom_categorie; ?>">
														<?php echo strtoupper($categ->nom_categorie); ?>
													</a>
												</li>

											<?php } ?>

											<!-- <li class="dropdown">
												<a class="dropdown-item dropdown-toggle" href="<?= base_url() ?>produits">
													Homme
												</a>
											</li> -->
											<li class="dropdown">
												<a class="dropdown-item dropdown-toggle" href="<?= base_url() ?>about-us-1">
													QUI SOMMES NOUS
												</a>
											</li>
											<?php if ($this->session->userdata("logged_in") && $user_info[0]->collab ==2 ) { ?>
											<li class="dropdown">
												<a class="dropdown-item dropdown-toggle" href="<?= base_url() ?>collab">
													PROFILE
												</a>
											</li>
											<?php } ?>
											
											
										</ul>
									</nav>
								</div>
								<?php if (!$this->session->userdata("logged_in")) { ?>
									<a href="shop-login" class="btn btn-rounded  btn-3 btn-icon-effect-2 order-3 d-none d-sm-block ml-auto mr-2 pt-1 text-1">
										<span class="text-white font-weight-bold">Se connecter</span>
										<i class="lnr lnr-users"></i>
									</a>
								<?php } else { ?>
									<a href="user-dashboard" class="btn btn-rounded  btn-3 order-3 d-none d-sm-block ml-auto mr-2 pt-1 text-1">
										<span class="text-white font-weight-bold">Mon Compte</span>
									</a>
								<?php } ?>

								<div id="panier" class="mini-cart order-4">
									<span class="font-weight-bold font-primary">Panier / <span class="cart-total"><?= $sum ?>
											DT</span></span>
									<div class="mini-cart-icon">
										<img src="<?= base_url() ?>assets/img/icons/cart-bag.svg" class="img-fluid" alt="" />
										<span class="badge background-pink rounded-circle"><?= count($panier) ?></span>
									</div>
									<div class="mini-cart-content">
										<div class="inner-wrapper bg-light rounded">
											<?php $j=0 ?>
											<?php foreach ($panier as $produit) { ?>
												<div class="mini-cart-product">
													<div class="row" id="pro<?= $produit['id'] ?>">
														<div class="col-7">
															<h2 class="text-color-default font-secondary text-1 mt-3 mb-0"><?= $produit["title"] ?></h2>
															<strong class="text-color-dark">
																<span class="qty"><?= $produit["nbrProduit"] ?>x</span>
																<span class="product-price"><?= $produit["price"] ?> DT</span>
															</strong>
														</div>
														<div class="col-5">
															<div class="product-image">
																<a href="#" id=<?= "cross$j" ?> class="btn btn-light btn-rounded justify-content-center align-items-center"><i  class="fas fa-times"></i></a>
																<img src="<?= base_url() ?>assets/img/products/<?= explode(":", $produit["images"])[0] ?>" class="img-fluid rounded" alt="" />
															</div>
														</div>
													</div>
												</div>
												<script>
													$('<?="#cross$j" ?>').click((e)=>{
														e.preventDefault()
														$.ajax({
															type:"post",
															url:"<?= base_url() ?>cart/deleteFromCart/<?= $produit['id']?>",
															success:()=>{
																$("#pro<?= $produit['id'] ?>").load(" #pro<?= $produit['id'] ?>")
																$(".cart-total").load(" .cart-total")
																$(".total-value").load(" .total-value")
															}
														})
													})
												</script>
												<?php $j++ ?>
											<?php } ?>
											<div class="mini-cart-total">
												<div class="row">
													<div class="col">
														<strong class="text-color-dark">TOTAL:</strong>
													</div>
													<div class="col text-right">
														<strong class="total-value text-color-dark"><?= $sum !== false ? $sum:0 ?> DT</strong>
													</div>
												</div>
											</div>
											<div class="mini-cart-actions">
												<div class="row">
													<div class="col pr-1">
														<a href=" <?= base_url() ?>shop-cart" class="btn  font-weight-bold rounded text-0">VOIR LE
															PANIER</a>
													</div>
													<!-- <div class="col pl-1">
														<a href=" <?= base_url() ?>shop-checkout" class="btn  font-weight-bold rounded text-0">CHECKOUT</a>
													</div> -->
												</div>
											</div>
										</div>
									</div>
								</div>
								<button class="header-btn-collapse-nav order-4 ml-3" data-toggle="collapse" data-target=".header-nav-main nav">
									<span class="hamburguer">
										<span></span>
										<span></span>
										<span></span>
									</span>
									<span class="close">
										<span></span>
										<span></span>
									</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>