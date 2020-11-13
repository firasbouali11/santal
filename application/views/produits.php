<!DOCTYPE html>
<html lang="zxx" class="shop">

<!-- Mirrored from okler.net/previews/ezy/1.1.0/shop-3-columns-left-sidebar by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 11:10:58 GMT -->

<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>SANTAL - Produits</title>

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
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/nouislider/nouislider.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/theme.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/theme-elements.css">

	<!-- Skin CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/skins/default.css">
	<script src="<?= base_url() ?>assets/master/style-switcher/style.switcher.localstorage.js"></script>

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css">

	<!-- Head Libs -->
	<script src="<?= base_url() ?>assets/vendor/modernizr/modernizr.min.js"></script>

	<!-- Vendor -->
	<script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>

	<script>
	</script>

</head>

<body>
	<div class="body">
		<header id="header" class="header-effect-shrink " data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 120, 'stickyChangeLogo': false}">
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
									<a href="tel:+1234567890"><?= $contact[0]["value"] ?></a>
								</span>
							</div>
							<div class="header-column justify-content-end">
								<ul class="nav">
									<li><a href="#" class="header-search-button order-1 text-5 d-none d-sm-block mt-2 mr-xl-2">
											<i class="lnr lnr-magnifier pink-color "></i>
										</a></li>
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
									<li class="social-icons-twitter">
										<a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
									</li>
									<li class="social-icons-instagram">
										<a href="http://www.instagram.com/" target="_blank" title="Instragram"><i class="fab fa-instagram"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="header-container " style="padding: 0 40px">
					<div class="header-row">
						<div class="header-column justify-content-start">
							<div class="header-logo">
								<a href="Home">
									<img alt="Santal" src="<?= base_url() ?>assets/img/logos/logo-santal-light.png">
								</a>
							</div>
						</div>
						<div class="header-column justify-content-end">
							<div class="header-search-expanded">
								<form method="POST" action="<?= base_url() ?>produits/searchProduct">
									<div class="input-group bg-light border">
										<input type="text" class="form-control text-4" name="search" placeholder="I'm looking for..." aria-label="I'm looking for...">
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
												<a class="dropdown-item dropdown-toggle" href="<?= base_url() ?>produits#homme">
													Homme
												</a>
											</li> -->
											<li class="dropdown">
												<a class="dropdown-item dropdown-toggle" href="<?= base_url() ?>about-us-1">
													QUI SOMMES NOUS
												</a>
											</li>
											<?php if ($this->session->userdata("logged_in") && $user_info[0]->collab != NULL) { ?>
											<li class="dropdown">
												<a class="dropdown-item dropdown-toggle" href="<?= base_url() ?>collab">
													PROFILE
												</a>
											</li>
											<?php } ?>

										</ul>
									</nav>
								</div>
								<!-- <a href="shop-login"
									class="btn btn-pink btn-rounded text-color-default font-weight-bold order-3 d-none d-sm-block ml-auto mr-2 pt-1 text-1">Se
									connecter</a> -->
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
								<div class="mini-cart order-4" id="panier">
									<span class="font-weight-bold font-primary">Panier / <span class="cart-total"><?= $sum ?> DT</span></span>
									<div class="mini-cart-icon">
										<img src="<?= base_url() ?>assets/img/icons/cart-bag.svg" class="img-fluid" alt="" />
										<span class="badge background-pink rounded-circle"><?= count($panier) ?></span>
									</div>
									<div class="mini-cart-content">
										<div class="inner-wrapper bg-light rounded">
											<?php foreach ($panier as $produit) { ?>
												<div class="mini-cart-product ">
													<div class="row " id="pro<?= $produit['id'] ?>">
														<div class="col-7">
															<h2 class="text-color-default font-secondary text-1 mt-3 mb-0"><?= $produit["title"] ?></h2>
															<strong class="text-color-dark">
																<span class="qty"><?= $produit["nbrProduit"] ?>x</span>
																<span class="product-price"><?= $produit["price"] ?> DT</span>
															</strong>
														</div>
														<div class="col-5">
															<div class="product-image">
																<a id="<?= "cross" . $produit["id"] ?>" class="btn text-white btn-light btn-rounded justify-content-center align-items-center"><i class="fas fa-times"></i></a>
																<img src="<?= base_url() ?>assets/img/products/<?= explode(":", $produit["images"])[0] ?>" class="img-fluid rounded" alt="" />
															</div>
														</div>
													</div>
												</div>
												<script>
													$('<?= "#cross" . $produit["id"] ?>').click((e) => {
														$.ajax({
															type: "post",
															url: "<?= base_url() ?>cart/deleteFromCart/<?= $produit['id'] ?>",
															complete: () => {
																$("#pro<?= $produit['id'] ?>").load(" #pro<?= $produit['id'] ?>")
																$(".cart-total").load(" .cart-total")
																$(".total-value").load(" .total-value")
															}
														})
													})
												</script>
											<?php } ?>
											<div class="mini-cart-total">
												<div class="row">
													<div class="col">
														<strong class="text-color-dark">TOTAL:</strong>
													</div>
													<div class="col text-right">
														<strong class="total-value text-color-dark"><?= $sum ?> DT</strong>
													</div>
												</div>
											</div>
											<div class="mini-cart-actions">
												<div class="row">
													<div class="col pr-1">
														<a href="<?= base_url() ?>shop-cart" class="btn btn-green font-weight-bold rounded text-0">VOIR LE PANIER</a>
													</div>
													<!-- <div class="col pl-1">
														<a href="<?= base_url() ?>shop-checkout" class="btn btn-green font-weight-bold rounded text-0">CHECKOUT</a>
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
		<div role="main" class="main">
			<div class="slider-container slider-container-height-550 rev_slider_wrapper bg-light-5">
				<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.7" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': [1140,960,720,540], 'gridheight': [250,550,550,550], 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,576], 'navigation' : {'arrows': { 'enable': false, 'style': 'slider-arrows-style-1' }, 'bullets': {'enable': false, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 35, 'h_offset': 0}}}">
					<ul>
						<li class="slide-overlay slide-overlay-level-8" data-transition="fade">
							<img src="<?= base_url() ?>assets/img/slides/headers.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-duration="12000" data-ease="Linear.easeNone" class="rev-slidebg ">

							<p class="tp-caption font-weight-bold layer-letter-spacing-5 text-white" data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-voffset="['0','-40','-40','-40']" data-fontsize="['54','54','54','47']" data-lineheight="['60','60','60','41']">Découvrir&nbsp;Tous&nbsp;Les&nbsp;Produits</p>
						</li>
					</ul>
				</div>
			</div>
			<br><br>

			<div class="container">
				<div class="row">
					<aside class="sidebar col-md-4 col-lg-3 order-2 order-md-1">
						<div class="accordion accordion-default accordion-toggle accordion-style-1" role="tablist">

							<div class="card">
								<div class="card-header accordion-header" role="tab" id="categories">
									<h5 class="mb-0">
										<a href="#" data-toggle="collapse" data-target="#toggleCategories" aria-expanded="false" aria-controls="toggleCategories">Categories</a>
									</h5>
								</div>
								<div id="toggleCategories" class="accordion-body collapse show" role="tabpanel" aria-labelledby="categories">
									<div class="card-body">
										<ul class="list list-unstyled mb-0 sort-source" data-sort-id="products" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
											<li class="nav-item" data-option-value="*"><a class="nav-link active" href="#">AFFICHER TOUT</a></li>

											<ul class="list list-unstyled mb-0 sort-source">
												<li class="nav-item" data-option-value=".femme"><a class="nav-link text-uppercase" href="#">Femmes</a></li>

												<?php foreach ($women_categories as $categ) { ?>

													<li class="nav-item" data-option-value=".femme_<?php echo $categ->nom_categorie; ?>"><a class="nav-link text-uppercase" href="#"><?php echo $categ->nom_categorie; ?></a></li>

												<?php } ?>

											</ul>

											<ul class="list list-unstyled mb-0 sort-source">
												<li class="nav-item" data-option-value=".homme"><a class="nav-link text-uppercase" href="#">Hommes</a></li>

												<?php foreach ($men_categories as $categ) { ?>

													<li class="nav-item" data-option-value=".homme_<?php echo $categ->nom_categorie; ?>"><a class="nav-link text-uppercase" href="#"><?php echo $categ->nom_categorie; ?></a></li>

												<?php } ?>

											</ul>

										</ul>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header accordion-header" role="tab" id="price">
									<h5 class="mb-0">
										<a href="#" data-toggle="collapse" data-target="#togglePrice" aria-expanded="false" aria-controls="togglePrice">Prix</a>
									</h5>
								</div>
								<div id="togglePrice" class="accordion-body collapse show" role="tabpanel" aria-labelledby="price">
									<div class="card-body">
										<div class="slider-range-wrapper">
											<div class="slider-range mb-3" data-plugin-slider-range></div>
											<form class="d-flex align-items-center justify-content-between" method="post" action="<?= base_url() ?>produits/filtred">
												<span>
													Prix <span class="price-range-low">0</span> - <span class="price-range-high">0</span> DT
												</span>
												<input type="hidden" class="hidden-price-range-low" name="priceLow" value="" />
												<input type="hidden" class="hidden-price-range-high" name="priceHigh" value="" />
												<button type="submit" class="btn  btn-h-1 font-weight-bold rounded-0">Filtrer</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</aside>
					<div class="col-md-8 col-lg-9 order-1 order-md-2 mb-5 mb-md-0">
						<div class="row align-items-center justify-content-between mb-4">
							<div class="col-auto mb-3 mb-sm-0">
								<!-- <form method="get">
									<div class="custom-select-1">
										<select class="form-control border">
											<option value="popularity">Trier par popularité</option>
											<option value="rating">Trier par note moyenne</option>
											<option value="date" selected="selected">Trier par nouveauté</option>
											<option value="price">Trier par prix: faible à élevé</option>
											<option value="price-desc">Trier par prix: de haut en bas</option>
										</select>
									</div>
								</form> -->
							</div>
							<div class="col-auto">
								<div class="d-flex align-items-center">
									<!-- <span>Affichage 1-9 de 60 résultats</span> -->
									<a href="#" class="text-color-dark text-3 ml-2" data-toggle="tooltip" data-placement="top" title="Grid"><i class="fas fa-th"></i></a>
									<!-- <a href="#" class="text-color-dark text-3 ml-2" data-toggle="tooltip"
										data-placement="top" title="List"><i class="fas fa-list-ul"></i></a> -->
								</div>
							</div>
						</div>
						<div class="sort-destination-loader sort-destination-loader-showing">
							<div class="row portfolio-list sort-destination" data-sort-id="products">
								<?php $j = 0 ?>
								<?php foreach ($men_products as $product) { ?>
									<div class="col-sm-6 col-md-4 p-3 isotope-item <?= $product["type"] ?>_<?php echo $product["category"]; ?> <?= $product["type"] ?>">
										<div class="product portfolio-item portfolio-item-style-2">
											<div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
												<span class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
													<a href="<?= base_url() . 'produits/' . $product["id"] ?>">
														<img src="<?= base_url() ?>assets/img/products/<?php echo explode(":", $product['images'])[0]; ?>" class="img-fluid" alt="">
													</a>
													<span id="c<?= $j ?>" class="image-frame-action">
														<?php
														$check = false;
														foreach ($panier as $prod) {
															if ($product["id"] == $prod["idProduit"]) {
																$check = true;
																break;
															}
														}
														if ($this->session->userdata("logged_in")) {
															if (!$check) {
														?>
																<a id="<?= 'men' . $j ?>" class="btn bold text-white btn-rounded font-weight-semibold btn-v-3 btn-fs-2">Ajouter Au Panier</a>
															<?php } else { ?>
																<a class="btn bold text-white text-center btn-rounded font-weight-semibold btn-v-3 btn-fs-2"><i class="lnr lnr-chevron-down"></i></a>
														<?php }
														} else {
															echo '<a class="sender btn bold text-white text-center btn-rounded font-weight-semibold btn-v-3 btn-fs-2">Ajouter Au Panier</a>';
														}
														?>
													</span>
												</span>
											</div>
											<div class="product-info d-flex flex-column flex-lg-row justify-content-between">
												<div class="product-info-title">
													<h3 class="text-color-default text-2 line-height-1 mb-1"><a href="<?= base_url() . 'produits/' . $product["id"] ?>"><?php echo $product["title"]; ?></a>
													</h3>
													<span class="price font-primary text-4"><strong class="text-color-dark"><?php echo $product["price"]; ?> DT</strong></span>
													<!-- <span class="old-price font-primary text-line-trough text-1"><strong class="text-color-default">15 DT</strong></span> -->
												</div>
												<div class="product-info-rate d-flex">
													<?php for ($i = 0; $i < $product["rate"]; $i++) { ?>

														<i class="fas fa-star text-color-default mr-1"></i>

													<?php } ?>
												</div>
											</div>
										</div>
									</div>
									<script>
										$("<?= "#men$j" ?>").click(() => {
											$.ajax({
												type: "post",
												url: "<?= base_url() ?>cart/addToCart/<?= $product['id'] ?>",
												complete: (data) => {
													$("<?= "#c$j" ?>").load(" #c<?= $j ?>")
													$("#panier").load(" #panier")
												}
											})
										})
									</script>
									<?php $j++ ?>
								<?php } ?>
							</div>

						</div>
						<hr class="mt-5 mb-4">
						<div class="row align-items-center justify-content-between">
							<div class="col-auto mb-3 mb-sm-0">
								<!-- <span>Affichage 1-9 de 60 résultats</span> -->
							</div>
							<div class="col-auto">
								<nav aria-label="Page navigation example">
									<?= $this->pagination->create_links() ?>
									<!-- <li class="page-item">
											<a class="page-link prev" href="#" aria-label="Previous">
												<span><i class="fas fa-angle-left" aria-label="Previous"></i></span>
											</a>
										</li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item">...</li>
										<li class="page-item"><a class="page-link" href="#">15</a></li>
										<li class="page-item">
											<a class="page-link next" href="#" aria-label="Next">
												<span><i class="fas fa-angle-right" aria-label="Next"></i></span>
											</a>
										</li> -->
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>

		<footer id="footer" class="footer-hover-links-light mt-0" style='background:linear-gradient(to bottom,#19733B,#A2C63D) !important;'>
			<div class="container">

				<div class="row">

					<div class="col-lg-2 mb-2 mb-lg-0">
						<a href="index" class="logo">
							<img alt="Santal" class="img-fluid mb-3" src="<?= base_url() ?>assets/img/logos/logo.png">
						</a>
					</div>

					<div class="col-lg-4 mb-4 mb-lg-0">
						<h2 class="text-3 mb-3">SANTAL.tn</h2>
						<p class="text-color-light">Notre boutique en ligne spécialisée dans la vente de produits cosmétiques en Tunisie.
							Découvrir nos crèmes pour le visage, nos huiles essentielles et végétales pour les cheveux
							et le corps et plein d'autres produits au meilleurs prix.
					</div>



					<div class="col-lg-3 mb-3 mb-lg-0">
						<h2 class="text-3 mb-3">NOS PRODUITS</h2>
						<ul class="list list-icon list-unstyled">
							<li class="mb-2 text-color-light"><i class="fas fa-angle-right mr-2 ml-1"></i> <a class="text-color-light" href="shop-3-columns-left-sidebar">Promotions</a></li>
							<li class="mb-2 text-color-light"><i class="fas fa-angle-right mr-2 ml-1"></i> <a class="text-color-light" href="shop-3-columns-left-sidebar">Nouveautés</a></li>
							<li class="mb-2 text-color-light"><i class="fas fa-angle-right mr-2 ml-1"></i> <a class="text-color-light" href="shop-3-columns-left-sidebar">Meilleures ventes</a></li>
						</ul>
					</div>

					<div class="col-lg-3">
						<h2 class="text-3 mb-3">CONTACT</h2>
						<ul class="list list-icons list-unstyled">
							<li class="mb-2 text-color-light"><i class="fas fa-angle-right mr-2 ml-1 text-color-light"></i> <span class="text-color-light">Adresse:</span> <?= $contact[1]["value"] ?></li>
							<li class="mb-2 text-color-light"><i class="fas fa-angle-right mr-2 ml-1"></i> <span class="text-color-light">Téléphone:</span> <a class=" text-color-light" href="tel:+1234567890">(123)
									<?= $contact[0]["value"] ?></a>
							</li>
							<li class="mb-2 text-color-light"><i class="fas fa-angle-right mr-2 ml-1"></i> <span class="text-color-light">Email:</span> <a href="mailto:mail@example.com" class="link-underline-light "><?= $contact[2]["value"] ?></a></li>
						</ul>
						<div class="col-md-7 col-lg-8">
							<ul class="social-icons social-icons-transparent social-icons-icon-light social-icons-lg">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div style="width:100%;display:flex;justify-content:center;">
					<div class="container">
						<div class="row text-center">
							<p class="col-12 text-center  text-color-light">Copyrights © 2020, ENSI Junior Entreprise </p>
						</div>
					</div>
				</div>

			</div>

		</footer>
	</div>

	<script src="<?= base_url() ?>assets/vendor/jquery.appear/jquery.appear.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/jquery-cookie/jquery-cookie.min.js"></script>
	<script src="<?= base_url() ?>assets/master/style-switcher/style.switcher.js" id="styleSwitcherScript" data-base-path="" data-skin-src=""></script>
	<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/common/common.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/jquery.validation/jquery.validation.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/jquery.gmap/jquery.gmap.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/isotope/jquery.isotope.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/vide/vide.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/vivus/vivus.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/nouislider/nouislider.min.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="<?= base_url() ?>assets/js/theme.js"></script>

	<!-- Current Page Vendor and Views -->
	<script src="<?= base_url() ?>assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<!-- Theme Custom -->
	<script src="<?= base_url() ?>assets/js/custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="<?= base_url() ?>assets/js/theme.init.js"></script>
	<script>
		$(".sender").click(() => {
			location.replace("<?= base_url() ?>shop-login")
		})
		$(".page-item a").addClass("page-link")
	</script>

</body>

<!-- Mirrored from okler.net/previews/ezy/1.1.0/shop-3-columns-left-sidebar by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 11:10:58 GMT -->

</html>