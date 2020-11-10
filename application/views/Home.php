<div role="main" class="main">
	<section class="page-header page-header-text-light section-video overlay overlay-color-dark overlay-show overlay-op-3 bg-transparent" data-video-path="<?= base_url() ?>assets/video/bg-video" data-plugin-video-background data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%', 'overlay': true}">
		<div class="container d-flex flex-column">
			<div class="row align-items-center position-relative min-height-370 z-index-10">
				<div class="col-md-12">
					<div class="row text-center">
						<div class="col-md-12 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
							<h1 style="font-family: 'Montserrat', sans-serif;font-size: 50px;color: #FCA1A0; margin-top: 50px;">
								SANTAL</h1>
						</div>
						<div class="col-md-12 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000">
							<p style="font-family: 'Montserrat', sans-serif;font-size: 30px;color: #fff;">La
								Nature Nous Appartient.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section pb-5 section-height-3">
		<div class="container">
			<div class="row text-center mb-4">
				<div class="col">
					<div class="overflow-hidden">
						<span class="d-block top-sub-title  appear-animation" data-appear-animation="maskUp">RECOMENDATIONS</span>
					</div>
					<div class="overflow-hidden mb-2">
						<h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Produits populaires</h2>
					</div>
				</div>
			</div>
			<div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
				<div class="col p-1">
					<div class="owl-carousel owl-theme nav-style-3" data-plugin-options="{'loop': false, 'autoplay': true, 'items': 4, 'nav': false, 'dots': false, 'margin': 8, 'autoplayHoverPause': true}">

						<?php foreach ($popular_products as $popular) { ?>

							<div class="text-center">
								<div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
									<span class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
										<a href="<?= base_url() . 'produits/' . $popular->id ?>">
											<img src="<?php echo base_url(); ?>assets/img/products/<?php echo $popular->images; ?>" class="img-fluid" alt="">
										</a>
										<span id="b<?= $popular->id ?>" class="image-frame-action">
											<?php
											$check = false;
											foreach ($panier as $prod) {
												if ($popular->id == $prod["idProduit"]) {
													$check = true;
													break;
												}
											}
											if ($this->session->userdata("logged_in")) {
												if (!$check) {
											?>
													<a id="popular<?= $popular->id ?>" class="btn text-white bold btn-rounded font-weight-semibold btn-v-3 btn-fs-2">Ajouter au panier</a>
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
								<h3 class="text-color-default text-2 mb-0"><a href="<?= base_url() . 'produits/' . $popular->id ?>"><?php echo $popular->title; ?></a></h3>
								<span class="price font-primary text-4"><strong class="text-color-dark"><?php echo $popular->price; ?> DT</strong></span>
								<!-- <span class="old-price font-primary text-line-trough text-2"><strong class="text-color-default">69 DT</strong></span> -->
								<script>
									$("<?= "#popular" . $popular->id ?>").click(() => {
										$.ajax({
											type: "post",
											url: "<?= base_url() ?>cart/addToCart/<?= $popular->id ?>",
											complete: (data) => {
												$("<?= "#b" . $popular->id ?>").load(" <?= "#b" . $popular->id ?>")
												$("#panier").load(" #panier")
											}
										})
									})
								</script>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section pb-5 section-height-1">
		<div class="container">
			<div class="row">
				<div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
					<h2 class="font-weight-bold text-4 mb-4">Produits nouveautés</h2>

					<?php foreach ($new_products as $new) { ?>

						<div class="product row align-items-center mb-4">
							<div class="col-4">
								<div class="image-frame image-frame-style-1 image-frame-effect-2">
									<span class="image-frame-wrapper">
										<img src="<?= base_url() ?>assets/img/products/<?php echo explode(":", $new->images)[0]; ?>" class="img-fluid" alt="">
										<span class="image-frame-action image-frame-action-style-2 image-frame-action-effect-1 image-frame-action-md">
											<a href="<?= base_url() . 'produits/' . $new->id ?>">
												<span class="image-frame-action-icon">
													<i class="lnr lnr-link text-color-light"></i>
												</span>
											</a>
										</span>
									</span>
								</div>
							</div>
							<div class="col-8">
								<h3 class="text-color-default text-2 mb-0"><a href="<?= base_url() . 'produits/' . $new->id ?>"><?php echo $new->title; ?></a></h3>
								<span class="price font-primary text-4"><strong class="text-color-dark"><?php echo $new->price; ?> DT</strong></span>
								<!-- <span class="old-price font-primary text-line-trough text-2"><strong class="text-color-default">69 DT</strong></span> -->
							</div>
						</div>

					<?php } ?>

				</div>
				<div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
					<h2 class="font-weight-bold text-4 mb-4">
						Produits les mieux notés</h2>

					<?php foreach ($top_products as $top) { ?>

						<div class="product row align-items-center mb-4">
							<div class="col-4">
								<div class="image-frame image-frame-style-1 image-frame-effect-2">
									<span class="image-frame-wrapper">
										<img src="<?= base_url() ?>assets/img/products/<?php echo explode(":", $top->images)[0]; ?>" class="img-fluid" alt="">
										<span class="image-frame-action image-frame-action-style-2 image-frame-action-effect-1 image-frame-action-md">
											<a href="<?= base_url() . 'produits/' . $top->id ?>">
												<span class="image-frame-action-icon">
													<i class="lnr lnr-link text-color-light"></i>
												</span>
											</a>
										</span>
									</span>
								</div>
							</div>
							<div class="col-8">
								<h3 class="text-color-default text-2 mb-1"><a href="<?= base_url() . 'produits/' . $top->id ?>"><?php echo $top->title; ?></a></h3>

								<span class="product-info-rate d-flex mb-1">

									<?php for ($i = 0; $i < $top->rate; $i++) { ?>

										<i class="fas fa-star text-color-default mr-1"></i>

									<?php } ?>

								</span>

								<span class="price font-primary text-4"><strong class="text-color-dark"><?php echo $top->price; ?> DT</strong></span>
								<!-- <span class="old-price font-primary text-line-trough text-2"><strong class="text-color-default">99 DT</strong></span> -->
							</div>
						</div>

					<?php } ?>
				</div>
				<div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
					<h2 class="font-weight-bold text-4 mb-4">Nos bons plans</h2>
					<div class="image-frame">
						<div class="image-frame-wrapper align-items-center">
							<img src="<?= base_url() ?>assets/img/shop/<?= $plan["cover"] ?>" class="img-fluid" alt="">
							<div class="image-frame-info image-frame-info-show flex-column align-items-start px-4 mx-2">
								<h2 class="text-color-light font-weight-semibold text-4 line-height-1 mb-4">
									<strong class="font-weight-semibold text-6"><?= $plan["remise"] ?>% OFF</strong>
									<br>
									<!-- Crèmes soins
									de visage -->
								</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- <section class="section bg-light-5 bg-dark">
				<div class="container-fluid">
					<div class="responsive-images responsive-images-left">
						<div class="position-absolute z-index-1 d-none d-xl-block appear-animation"
							data-appear-animation="fadeInDownShorter" style="margin:20%;margin-top:35%">
							<img src="img/livraison-express-png.png" class="img-fluid" alt="" data-plugin-float-element
								data-plugin-options="{'startPos': 'none', 'speed': 4, 'transition': true}" />
						</div>
						<div class="position-absolute z-index-1 d-none d-xl-block appear-animation"
							data-appear-animation="fadeInDownShorter" data-appear-animation-delay="300">
						</div>
						<div class="position-absolute z-index-1 d-none d-xl-block appear-animation"
							data-appear-animation="fadeInDownShorter" data-appear-animation-delay="600">
						</div>
					</div>
					<div class="responsive-images responsive-images-right">
						<div class="position-absolute z-index-1 d-none d-xl-block appear-animation"
							data-appear-animation="fadeInDownShorter" data-appear-animation-delay="" style="margin:10%">
							<img src="img/house.png" class="img-fluid" alt="" data-plugin-float-element
								data-plugin-options="{'startPos': 'none', 'speed': 4, 'transition': true}" />
						</div>
						<div class="position-absolute z-index-1 d-none d-xl-block appear-animation"
							data-appear-animation="fadeInDownShorter" data-appear-animation-delay="200">
						</div>
						<div class="position-absolute z-index-1 d-none d-xl-block appear-animation"
							data-appear-animation="fadeInDownShorter" data-appear-animation-delay="400">
						</div>
						<div class="position-absolute z-index-1 d-none d-xl-block appear-animation"
							data-appear-animation="fadeInDownShorter" data-appear-animation-delay="600">
						</div>
					</div>
					<div class="row justify-content-center text-center text-lg-right py-3 my-3 py-sm-4 my-sm-5">
						<div class="col col-lg-auto px-md-5 px-lg-3">
							<div class="overflow-hidden mb-2 mb-lg-0">
								<span class="d-block font-primary font-weight-semibold text-4 appear-animation"
									style="color:#FCA1A0" data-appear-animation="maskUp"
									data-appear-animation-delay="1100">Livraison - SANTAL</span>
							</div>
							<h1 class="text-color-light font-weight-bold text-15 resp-text-15 line-height-2 appear-animation"
								data-appear-animation="blurIn" data-appear-animation-delay="500">c'est plus facile que
								vous pensez</h1>
							<div class="overflow-hidden opacity-8 mb-4 mt-2 mt-lg-0">
								<span
									class="text-color-light d-block font-primary font-weight-light line-height-2 text-5 resp-text-5 mb-0  >Profitez de rester
									à la maison, Vous recevrez vos produit gratuitement</span>
							</div>
							<div class="d-flex flex-column align-items-center">
								<a href="produits.html" data-hash
									class="btn btn-dark btn-rounded font-weight-bold btn-v-3 btn-h-5 mb-3 appear-animation"
									data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">Commandez
									maintenant</a>
							</div>
						</div>
					</div>
				</div>
			</section> -->
	<section>
		<div class="row text-center " style='background:linear-gradient(to bottom,#19733B,#A2C63D) !important;'>
			<div class="col-md-12">
				<div class="featured-box">
					<div class="m-4 appear-animation" data-appear-animation="fadeIn">
						<img id="my-img" src="<?= base_url() ?>assets/img/shipping-truck.png" class="mb-2" width="100" length="200" onmouseover="hover()" onmouseout="unhover()" />
						<h2 class="text-5 mb-0 pt-1 text-white appear-animation" data-appear-animation="fadeInUpShorter">Livraison</h2>
						<h1 class="text-color-light font-weight-bold text-6 resp-text-15 line-height-2 appear-animation mt-2" data-appear-animation="blurIn" data-appear-animation-delay="500">C'est plus facile
							que
							vous pensez</h1>
						<p class="text-white appear-animation" data-appear-animation="maskUp">Recevez votre produit en restant au confort de votre maison</p>
						<div class="d-flex flex-column align-items-center">
							<a href="<?= base_url() ?>produits" data-hash class="btn btn-dark btn-rounded font-weight-bold btn-v-3 btn-h-5 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">Commandez
								maintenant</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section pb-5 section-height-1">
		<div class="container">
			<div class="row text-center mb-4">
				<div class="col">
					<div class="overflow-hidden">
						<span class="d-block top-sub-title  appear-animation" data-appear-animation="maskUp">PRODUITS A LA UNE</span>
					</div>
					<div class="overflow-hidden mb-2">
						<h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Best Selling</h2>
					</div>
				</div>
			</div>
			<div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">

				<?php foreach ($best_products as $best) { ?>

					<div class="col-md-3">
						<div class="product mb-4">
							<div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
								<span class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
									<a href="<?= base_url() . 'produits/' . $best->id ?>">
										<img src="<?= base_url() ?>assets/img/products/<?php echo explode(":", $best->images)[0]; ?>" class="img-fluid" alt="">
									</a>
									<span id="c<?= $best->id ?>" class="image-frame-action">
										<?php
										$check = false;
										foreach ($panier as $prod) {
											if ($best->id == $prod["idProduit"]) {
												$check = true;
												break;
											}
										}
										if ($this->session->userdata("logged_in")) {
											if (!$check) {
										?>
												<a id="best<?= $best->id ?>" class="btn text-white bold btn-rounded font-weight-semibold btn-v-3 btn-fs-2">Ajouter au panier</a>
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
									<h3 class="text-color-default text-2 line-height-1 mb-1"><a href="<?= base_url() . 'produits/' . $best->id ?>"><?php echo $best->title; ?></a>
									</h3>
									<span class="price font-primary text-4"><strong class="text-color-dark"><?php echo $best->price; ?> DT</strong></span>
									<!-- <span class="old-price font-primary text-line-trough text-2"><strong class="text-color-default">199 DT</strong></span> -->
								</div>
								<div class="product-info-rate d-flex">

									<?php for ($i = 0; $i < $best->rate; $i++) { ?>

										<i class="fas fa-star text-color-default mr-1"></i>

									<?php } ?>

								</div>
							</div>
						</div>
					</div>
					<script>
						$("<?= "#best" . $best->id ?>").click(() => {
							$.ajax({
								type: "post",
								url: "<?= base_url() ?>cart/addToCart/<?= $best->id ?>",
								complete: (data) => {
									$("<?= "#c" . $best->id ?>").load(' #c<?= $best->id ?>')
									$("#panier").load(" #panier")
								}
							})
						})
					</script>
				<?php } ?>
			</div>
		</div>
	</section>
	<section class="section pb-5 section-height-1">
		<div class="container">
			<div class="row text-center mb-4">
				<div class="col">
					<div class="overflow-hidden">
						<span class="d-block top-sub-title  appear-animation" data-appear-animation="maskUp">CATEGORIES</span>
					</div>
					<div class="overflow-hidden mb-2">
						<h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Naviguer nos catégories</h2>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-8 col-md-5 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
					<a href="<?= base_url() ?>produits#femme_visage">
						<div class="image-frame overlay overlay-show overlay-op-5 image-frame-style-1 image-frame-effect-2 image-frame-style-5">
							<div class="image-frame-wrapper">
								<img src="<?= base_url() ?>assets/img/shop/categorie-bg-1.jpg" class="img-fluid" alt="">
								<div class="image-frame-info image-frame-info-show">
									<div class="image-frame-info-box-style-1 background-pink">
										<h3 style="color: #fff;font-weight: 700;" class=" text-uppercase text-1 m-0 p-0">
											Visage</h3>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-8 col-md-5 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter">
					<a href="<?= base_url() ?>produits#femme_cheveux">
						<div class="image-frame overlay overlay-show overlay-op-5 image-frame-style-1 image-frame-effect-2 image-frame-style-5">
							<div class="image-frame-wrapper">
								<img src="<?= base_url() ?>assets/img/shop/categorie-bg-2.jpg" class="img-fluid" alt="">
								<div class="image-frame-info image-frame-info-show">
									<div class="image-frame-info-box-style-1 background-pink">
										<h3 style="color: #fff;font-weight: 700;" class="text-uppercase text-1 m-0 p-0">
											Cheveux</h3>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-8 col-md-5 col-lg-3 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInRightShorter">
					<a href="<?= base_url() ?>produits#femme_deodorants">
						<div class="image-frame overlay overlay-show overlay-op-5 image-frame-style-1 image-frame-effect-2 image-frame-style-5">
							<div class="image-frame-wrapper">
								<img src="<?= base_url() ?>assets/img/shop/categorie-bg-3.jpg" class="img-fluid" alt="">
								<div class="image-frame-info image-frame-info-show">
									<div class="image-frame-info-box-style-1 background-pink">
										<h3 style="color: #fff;font-weight: 700;" class=" text-uppercase text-1 m-0 p-0">
											Corps et bain</h3>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-8 col-md-5 col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
					<a href="<?= base_url() ?>produits#femme_parfums">
						<div class="image-frame overlay overlay-show overlay-op-5 image-frame-style-1 image-frame-effect-2 image-frame-style-5">
							<div class="image-frame-wrapper">
								<img src="<?= base_url() ?>assets/img/shop/categorie-bg-4.jpg" class="img-fluid" alt="">
								<div class="image-frame-info image-frame-info-show">
									<div class="image-frame-info-box-style-1 background-pink">
										<h3 style="color: #fff;font-weight: 700;" class=" text-uppercase text-1 m-0 p-0">
											Parfums</h3>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="section pb-5 section-height-1">
		<div class="fluid-container">
			<div class="row text-center mb-4">
				<div class="col">
					<div class="overflow-hidden">
						<span class="d-block top-sub-title  appear-animation" data-appear-animation="maskUp">SANTAL</span>
					</div>
					<div class="overflow-hidden mb-2">
						<h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
							Témoignages</h2>
					</div>
				</div>
			</div>
			<div class="section section-background section-height-3 overlay  overlay-show overlay-op-2 back" data-plugin-image-background data-plugin-options="{'imageUrl': '<?= base_url() ?>assets/img/flowers.jpg'}" style="background-attachment: fixed;z-index:1">
				<div class="container">
					<div class="row appear-animation" data-appear-animation="fadeInLeftShorter">
						<div class="col">

							<div class="owl-carousel owl-theme dots-style-3 nav-style-3 mb-0" data-plugin-options="{'items': 1, 'dots': true, 'nav': true, 'navtext': []}">
								<?php foreach ($testimonies as $testimony) { ?>
									<div>
										<div class="row align-items-center justify-content-center">
											<div class="col-md-9 text-center">
												<div class="testimonial testimonial-style-1">
													<blockquote>
														<p class="text-light">"
															<?= $testimony["content"] ?>
															"</p>
													</blockquote>
													<div class="testimonial-author mb-4">
														<span>
															<strong class="text-light"><?= $testimony["name"] ?></strong>
															<span class="text-light">SANTAL</span>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>

						</div>
					</div>
				</div>
				<?php if ($this->session->userdata("logged_in")) { ?>
					<div class="col-md-4 text-center text-color-light m-auto pt-3 mb-5 mb-md-0">
						<a class="popup-with-zoom-anim mr-2 btn btn-lg btn-light btn-outline btn-rounded text-3" style="z-index: 100000;" href="#small-dialog">Commentez</a>
					</div>
				<?php } ?>
			</div>
			<!-- Dialog -->
			<div id="small-dialog" class="dialog dialog-md zoom-anim-dialog mfp-hide">
				<h2 class="mt-3">Nous sommes intéressé par votre opinion</h2>
				<form action="<?= base_url() ?>contact/addTestimony" method="post">
					<div class="form-group bg-light border">
						<label for="message-text" class="form-control-label">Message:</label>
						<textarea class="form-control bg-light" id="message-text" rows="10" name="content"></textarea>
					</div>
					<div class="form-group row">
						<div class="col">
							<button type="submit" class="btn btn-primary">Envoyer</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>
<!-- <section>
			<div class="row text-center bg-dark">
				<div class="col-md-12">
					<div class="featured-box">
						<div class="mt-5">
							<img id="my-img" src="img/shipping-truck.png" class="mb-2" width="50" length="100"
								onmouseover="hover();" onmouseout="unhover();" />
							<h2 class="text-1 mb-0 pt-1 text-white">Livraison</h2>
							<p class="text-white">Recevez votre produit en restant au confort de votre maison</p>
						</div>
					</div>
				</div>
			</div>
		</section> -->
<script>
	$(".sender").click(() => {
		location.replace("<?= base_url() ?>shop-login")
	})

	function hover() {
		document.getElementById("my-img").src = '<?= base_url() ?>assets/img/shipping-truck-hover.png';

	}

	function unhover() {
		document.getElementById("my-img").src = '<?= base_url() ?>assets/img/shipping-truck.png';

	}
</script>