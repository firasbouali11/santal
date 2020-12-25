<div role="main" class="main">
	<div class="slider-container slider-container-height-550 rev_slider_wrapper bg-light-5">
		<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.7" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': [1140,960,720,540], 'gridheight': [250,550,550,550], 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,576], 'navigation' : {'arrows': { 'enable': false, 'style': 'slider-arrows-style-1' }, 'bullets': {'enable': false, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 35, 'h_offset': 0}}}">
			<ul>
				<li class="slide-overlay slide-overlay-level-8" data-transition="fade">
					<img src="<?= base_url() ?>assets/img/slides/headers.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-duration="12000" data-ease="Linear.easeNone" class="rev-slidebg ">

					<p class=" d-block tp-caption text-white font-weight-bold layer-letter-spacing-5" data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-voffset="['0','0','0','0']" data-fontsize="['54','54','54','47']" data-lineheight="['80','80','80','41']"><?= $product["type"] ?> / <?= $product["category"] ?></p>


				</li>
			</ul>
		</div>
	</div>
	<br><br>
	<div class="container">
		<?php if ($this->session->flashdata("comment_sent")) { ?>
			<p class="alert alert-success my-3 mx-5 animated zoomIn"><?= $this->session->flashdata("comment_sent") ?></p>
		<?php } ?>
		<?php if ($this->session->flashdata("comment_not_sent")) { ?>
			<p class="alert alert-danger my-3 mx-5 animated zoomIn"><?= $this->session->flashdata("comment_not_sent") ?></p>
		<?php } ?>

		<div class="row mb-5">
			<div class="col-md-5 mb-5 mb-md-0">
				<div class="owl-carousel owl-theme manual dots-style-2 nav-style-2 nav-color-dark mb-3" id="thumbGalleryDetail">
					<?php foreach (explode(":", $product["images"]) as $image) { ?>
						<div>
							<img src="<?= base_url() . 'assets/img/products/' . $image ?>" class="img-fluid" alt="">
						</div>
					<?php } ?>
				</div>
				<div class="owl-carousel owl-theme manual thumb-gallery-thumbs mt" id="thumbGalleryThumbs">
					<?php foreach (explode(":", $product["images"]) as $image) { ?>
						<div>
							<span class="d-block">
								<img alt="Product Image" src="<?= base_url() . 'assets/img/products/' . $image ?>" class="img-fluid">
							</span>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="col-md-7">
				<h2 class="line-height-1 font-weight-bold mb-2"><?= $product["title"] ?></h2>
				<div class="product-info-rate d-flex mb-3">
					<?php for ($i = 0; $i < $product["rate"]; $i++) {  ?>
						<i class="fas fa-star text-color-default mr-1"></i>
					<?php } ?>
				</div>
				<span class="price font-primary text-4"><strong class="text-color-dark"><?= $product["price"] *(1-$product["reduction"]/100)?> DT</strong></span>
				<!-- <span class="old-price font-primary text-line-trough text-2"><strong class="text-color-default">160 DT</strong></span> -->
				<p class="mt-4"><?= $product["description"] ?></p>
				<hr class="my-4">
				<ul class="list list-unstyled">
					<li>DISPONIBILITE: <strong><?= $product["quantity"] == 0 ? "Indisponible" : "Disponible" ?></strong></li>
					<li>SKU: <strong><?= $product["reference"] ?></strong></li>
				</ul>
				<hr class="my-4">
				<form action="<?= base_url() ?>cart/addSingleToCart/<?= $product["id"] ?>" class="shop-cart d-flex align-items-center" method="post" enctype="multipart/form-data">
					<div class="quantity">
						<input type="button" value="-" class="minus">
						<input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="qty" size="2">
						<input type="button" value="+" class="plus">
					</div>
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
							<button type="submit" class="mx-5 btn btn-dark btn-rounded btn-v-3 btn-h-3 font-weight-bold">AJOUTER AU PANIER</button>
						<?php } else { ?>
							<!-- <button type="button" class="">AJOUTER AU PANIER</button> -->
							<a class="popup-with-move-anim mx-5 btn btn-dark btn-rounded btn-v-3 btn-h-3 font-weight-bold" href="#small-dialog">AJOUTER AU PANIER</a>
							<!-- Dialog -->
							<div id="small-dialog" class="dialog dialog-sm zoom-anim-dialog mfp-hide">
								<h2 class="mt-3">Ce produit est déjà dans votre panier</h2>
							</div>
					<?php }
					} else {
						echo '<a class="mx-5 btn btn-dark btn-rounded btn-v-3 btn-h-3 font-weight-bold" href="' . base_url() . 'shop-login">AJOUTER AU PANIER</a>';
					} ?>
				</form>
				<hr class="my-4">
				<!-- <div class="d-flex align-items-center">
					<span class="text-2">PARTAGER</span>
					<ul class="social-icons social-icons-dark social-icons-1 ml-3">
						<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
						<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
						<li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
					</ul>
				</div> -->
			</div>
		</div>
		<div class="row mb-5">
			<div class="col">
				<ul class="nav nav-tabs nav-tabs-default" id="productDetailTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link font-weight-bold active" id="productDetailDescTab" data-toggle="tab" href="#productDetailDesc" role="tab" aria-controls="productDetailDesc" aria-expanded="true">DESCRIPTION</a>
					</li>
					<li class="nav-item">
						<a class="nav-link font-weight-bold" id="productDetailReviewsTab" data-toggle="tab" href="#productDetailReviews" role="tab" aria-controls="productDetailReviews">AVIS CLIENTS (<?= count($comments) ?>)</a>
					</li>
				</ul>
				<div class="tab-content" id="contentTabProductDetail">
					<div class="tab-pane fade pt-4 pb-4 show active" id="productDetailDesc" role="tabpanel" aria-labelledby="productDetailDescTab">
						<p class="text-color-light-3"><?= $product["description"] ?></p>
						<!-- <ul class="list list-unstyled text-color-light-3 pl-5">
							<li class="mb-2"><i class="fas fa-check-circle text-color-dark mr-2"></i> Les Notes Olfactives</li>
							<p class="text-color-light-3">
								La rose sacrée de Lancôme au cœur de La Vie Est Belle, a été cette fois réinterprétée de manière très contemporaine, lumineuse et naturelle.
								Le Jasmin, Fleur immaculée et délicate, icône de la parfumerie apporte au parfum éclat et sensualité.
								Puis l'Accord chypre blanc, qui apporte à Idôle une sensation nue et seconde peau exceptionnelle grâce à une combinaison très contemporaine de muscs.
								Cette fragrance inédite de Rose, Jasmin et Chypre, a été pensé pour les femmes, par trois femmes parfumeurs venues de trois continents.
							</p>
							<li class="mb-2"><i class="fas fa-check-circle text-color-dark mr-2"></i> Le Flacon</li>
							<p class="text-color-light-3">
								Le Flacon, avec sa silhouette audacieuse est cerclé d’or mais aussi et surtout rechargeable ; il est bien plus qu’un flacon de parfum. Véritable petit bijou de technologie, le flacon d’Idôle Eau de Parfum est également le flacon le plus fin du monde.
							</p>

						</ul> -->
					</div>

					<div class="tab-pane fade pt-4 pb-4" id="productDetailReviews" role="tabpanel" aria-labelledby="productDetailReviewsTab">
						<ul class="comments">
							<?php foreach ($comments as $comment) { ?>
								<li>
									<div class="comment">
										<div class="d-none d-sm-block">
											<img class="avatar rounded-circle" alt="" src="<?= base_url() ?>assets/img/authors/aa.png">
										</div>
										<div class="comment-block">
											<span class="comment-by">
												<span class="comment-rating">
													<?php for ($i = 0; $i < $comment["rate"]; $i++) { ?>
														<i class="fas fa-star text-color-dark mr-1"></i>
													<?php } ?>

												</span>
												<strong class="comment-author text-color-dark"><?= $comment["name"] ?></strong>
												<span class="comment-date border-right-0 text-color-light-3"><?= $comment["created"] ?></span>
											</span>
											<p><?= $comment["content"] ?></p>
										</div>
									</div>
								</li>
							<?php } ?>
						</ul>

						<div class="row mt-4 pt-2">
							<div class="col">
								<h2 class="font-weight-bold text-3 mb-3">LAISSER UN AVIS</h2>
								<form class="form-style-2" action="<?= base_url() ?>products/addComments/<?= $product['id'] ?>" method="post">
									<div class="form-row">
										<div class="form-group">
											<div class="rating p-1">
												<label>
													<input type="radio" name="rating" value="5" title="5 stars"> 5
												</label>
												<label>
													<input type="radio" name="rating" value="4" title="4 stars"> 4
												</label>
												<label>
													<input type="radio" name="rating" value="3" title="3 stars"> 3
												</label>
												<label>
													<input type="radio" name="rating" value="2" title="2 stars"> 2
												</label>
												<label>
													<input type="radio" name="rating" value="1" title="1 star"> 1
												</label>
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<textarea class="form-control bg-light-5 border-0 rounded-0" placeholder="Avis" rows="6" name="review" required></textarea>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<input type="text" value="" class="form-control border-0 rounded-0" name="name" placeholder="Name" required>
										</div>
										<div class="form-group col-md-6">
											<input type="email" value="" class="form-control border-0 rounded-0" name="email" placeholder="E-mail" required>
										</div>
									</div>
									<div class="form-row mt-2">
										<div class="col">
											<input type="submit" value="Envoyer" class="btn btn-primary btn-rounded btn-h-2 btn-v-2 font-weight-bold">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<section class="section bg-light-2 mt-5">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="font-weight-bold text-4 mb-4">Produits similaires</h2>
				</div>
			</div>
			<div class="row">
				<?php foreach ($similar as $product) { ?>
					<div class="col-sm-6 col-md-3 mb-4">
						<div class="product portfolio-item portfolio-item-style-2">
							<div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
								<span class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
									<a href="shop-product-detail-right-sidebar.html">
										<img src="<?= base_url() ?>assets/img/products/<?php echo explode(":", $product["images"])[0]; ?>" class="img-fluid" alt="">
									</a>
									<span class="image-frame-action">
										<a href="#" class="btn text-white btn-rounded btn-v-3 font-weight-bold">AJOUTER AU PANIER</a>
									</span>
								</span>
							</div>
							<div class="product-info d-flex flex-column flex-lg-row justify-content-between">
								<div class="product-info-title">
									<h3 class="text-color-default text-2 line-height-1 mb-1"><a href="shop-product-detail-right-sidebar.html"><?= $product["title"] ?></a></h3>
									<span class="price font-primary text-4"><strong class="text-color-dark"><?= $product["price"] ?> DT</strong></span>
									<!-- <span class="old-price font-primary text-line-trough text-1"><strong class="text-color-default">220 DT</strong></span> -->
								</div>
								<div class="product-info-rate d-flex">
									<?php for ($i = 0; $i < $product["rate"]; $i++) { ?>
										<i class="fas fa-star text-color-dark mr-1"></i>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>

			</div>
		</div>
	</section>
</div>