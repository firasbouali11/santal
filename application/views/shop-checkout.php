<?php $subtotale = 0;
$orders = "";
$nbr = ""; ?>
<div role="main" class="main">

	<div class="slider-container slider-container-height-550 rev_slider_wrapper bg-light-5">
		<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.7" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': [1140,960,720,540], 'gridheight': [250,550,550,550], 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,576], 'navigation' : {'arrows': { 'enable': false, 'style': 'slider-arrows-style-1' }, 'bullets': {'enable': false, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 35, 'h_offset': 0}}}">
			<ul>
				<li class="slide-overlay slide-overlay-level-8" data-transition="fade">
					<img src="<?= base_url() ?>assets/img/slides/headers.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-duration="12000" data-ease="Linear.easeNone" class="rev-slidebg ">

					<p class="tp-caption text-white font-weight-bold layer-letter-spacing-5" data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-voffset="['0','-40','-40','-40']" data-fontsize="['54','54','54','47']" data-lineheight="['60','60','60','41']">Checkout</p>


				</li>
			</ul>
		</div>
	</div>
	<br><br>

	<section class="section">
		<div class="container">
			<?php if ($this->session->flashdata("coupons_applique")) { ?>
				<p class="alert alert-success animated zoomIn"><?= $this->session->flashdata("coupons_applique") ?></p>
			<?php } ?>
			<?php if ($this->session->flashdata("coupons_expire")) { ?>
				<p class="alert alert-danger animated zoomIn"><?= $this->session->flashdata("coupons_expire") ?></p>
			<?php } ?>
			<div class="row pb-4 mb-3">
				<!-- <div class="col-md-6 mb-4 mb-md-0">
					<div class="accordion accordion-default accordion-toggle accordion-style-1" role="tablist">
						<div class="card">
							<div class="card-header accordion-header accordion-header-shrink" role="tab" id="shopCheckoutLogin">
								<span class="mb-0">
									<?php if (!$this->session->userdata("logged_in")) { ?>
										<a href="#" class="text-color-dark collapsed" data-toggle="collapse" data-target="#toggleShopCheckoutLogin" aria-expanded="false" aria-controls="toggleShopCheckoutLogin">Returning Customer? <span class="text-color-primary">Click here to login</span></a>
									<?php } ?>
								</span>
							</div>
							<div id="toggleShopCheckoutLogin" class="accordion-body collapse" role="tabpanel" aria-labelledby="shopCheckoutLogin">
								<div class="card-body">
									<form action="#" id="shopCheckoutSignIn" method="post">
										<div class="form-row">
											<div class="form-group col mb-2">
												<input type="email" value="" maxlength="100" class="form-control rounded-0 bg-light-5 border-0 px-3 text-1" name="email" id="signInEmail" placeholder="Email / Username" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<input type="password" value="" class="form-control rounded-0 bg-light-5 border-0 px-3 text-1" name="password" id="signInPassword" placeholder="Password" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<div class="form-check checkbox-custom checkbox-default">
													<input class="form-check-input" type="checkbox" id="signInRemember">
													<label class="form-check-label" for="signInRemember">
														Remember me
													</label>
												</div>
											</div>
											<div class="form-group col text-right">
												<a href="#" id="headerRecover" class="forgot-pw text-color-dark d-block">Forgot password?</a>
											</div>
										</div>
										<div class="row align-items-center">
											<div class="col text-right">
												<button class="btn btn-primary btn-rounded btn-v-3 btn-h-3 text-color-light font-weight-bold">SIGN IN</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div> -->
			</div>
			<div class="row">
				<div class="col">
					<form id="shopCheckout" action="<?= base_url() ?>facturation/addFacturation" method="post">
						<div class="row mb-5">
							<div class="col-md-6 mb-5 mb-md-0">
								<h2 class="font-weight-bold mb-3">Adresse de facturation</h2>
								<p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc.</p>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label class="text-color-dark font-weight-semibold" for="billing_name">PRENOM:</label>
										<input type="text" value="" class="form-control line-height-1 bg-light-5" name="billing_name" id="billing_name" required>
										<input type="hidden" name="couponn" value="<?= !empty($this->session->flashdata("coupons_applique")) ? explode(" ", $this->session->flashdata("coupons_applique"))[2] : '' ?>">
									</div>
									<div class="form-group col-md-6">
										<label class="text-color-dark font-weight-semibold" for="billing_last_name">NOM:</label>
										<input type="text" value="" class="form-control line-height-1 bg-light-5" name="billing_last_name" id="billing_last_name" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label class="text-color-dark font-weight-semibold" for="billing_company">NOM DE LA COMPAGNIE:</label>
										<input type="text" value="" class="form-control line-height-1 bg-light-5" name="billing_company" id="billing_company" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label class="text-color-dark font-weight-semibold" for="billing_address">ADDRESSE:</label>
										<input type="text" value="" class="form-control line-height-1 bg-light-5" name="billing_address" id="billing_address" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label class="text-color-dark font-weight-semibold" for="billing_city">VILLE:</label>
										<input type="text" value="" class="form-control line-height-1 bg-light-5" name="billing_city" id="billing_city" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label class="text-color-dark font-weight-semibold" for="billing_email">ADRESSE EMAIL:</label>
										<input type="text" value="" class="form-control line-height-1 bg-light-5" name="billing_email" id="billing_email" required>
									</div>
									<div class="form-group col-md-6">
										<label class="text-color-dark font-weight-semibold" for="billing_phone">TELEPHONE:</label>
										<input type="text" value="" class="form-control line-height-1 bg-light-5" name="billing_phone" id="billing_phone" required>
									</div>
								</div>
								<h3 class="font-weight-bold text-4 mb-3">Paiement</h3>
								<div id="shopPayment">
									<div class="radio-custom">
										<input type="radio" id="shopPaymentBankTransfer" name="paymentMethod" value="a la livraison" checked>
										<label class="font-weight-semibold" for="shopPaymentBankTransfer">Paiement à la livraison</label>
									</div>
									<div class="radio-custom">
										<input type="radio" id="shopPaymentCheque" name="paymentMethod" value="en ligne">
										<label class="font-weight-semibold" for="shopPaymentCheque">Paiement en ligne</label>
									</div>
									<br>
									<div class="reduction">
										<i class="lnr lnr-diamond pr-1 text-5"></i>
										<span> Vous recevrez une reduction de 5% si vous choisissez de payer en ligne !</span>
									</div>
									<input type="hidden" name="orders" value="<?= $orders ?>">

								</div>
								<div class="row">
									<div class="col text-right">
										<button class="mt-4 btn btn-dark btn-rounded btn-v-3 btn-h-3 font-weight-bold">ACHETER</button>
									</div>
								</div>
							</div>
							</form>
							<div class="col-md-6 mb-4 mb-md-0">
								<div class="row">
									<div class="col-md-12">
										<h3 class="font-weight-bold text-4">Vos commandes</h3>
										<div class="shop-cart">

											<div class="table-responsive">
												<table class="shop-cart-table w-100">
													<thead>
														<tr>
															<th class="product-thumbnail"></th>
															<th class="product-name"><strong>Produit</strong></th>
															<th class="product-price"><strong>Prix unitaire</strong></th>
															<th class="product-quantity"><strong>Quantité</strong></th>
															<th class="product-subtotal"><strong>Totale</strong></th>
														</tr>
													</thead>
													<tbody>

														<?php foreach ($panier as $product) { ?>
															<tr class="cart-item">
																<td class="product-thumbnail">
																	<img src="img/products/product-1.jpg" class="img-fluid" width="67" alt="" />
																</td>
																<td class="product-name">
																	<a href="shop-product-detail-right-sidebar.html"><?= $product["title"] ?></a>
																</td>
																<td class="product-price">
																	<span class="unit-price"><?= $product["price"] ?></span>
																</td>
																<td class="product-quantity">
																	<?= $product["nbrProduit"] ?>
																</td>
																<td class="product-subtotal">
																	<span class="sub-total"><strong><?= $product["price"] * $product["nbrProduit"] ?></strong></span>
																</td>
															</tr>
															<?php $subtotale += $product["price"] * $product["nbrProduit"];
															$orders .= $product["id"] . ":";
															$nbr .= $product["nbrProduit"] . ":";
															?>
														<?php } ?>

													</tbody>
												</table>
											</div>

										</div>
									</div>
								</div>
								<br>
								<div class="col-md-12">
									<h3 class="font-weight-bold text-4 mb-3">Cart Totals</h3>
									<div class="table-responsive mb-4">
										<table class="cart-totals w-100">
											<tbody class="border-top-0">
												<tr>
													<td>
														<span class="cart-total-label">Sous totale du panier</span>
													</td>
													<td>
														<span class="cart-total-value"><?= $subtotale ?> DT</span>
													</td>
												</tr>
												<tr>
													<td>
														<span class="cart-total-label">Livraison</span>
													</td>
													<td>
														<span id="livrai" class="cart-total-value">Free Delivery</span>
													</td>
												</tr>
												<tr class="border-bottom-0">
													<td>
														<span class="cart-total-label">Totale</span>
													</td>
													<td>
														<span id="totale" class="cart-total-value pink-color text-4">135 DT</span>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<input type="hidden" name="price" id="priceTotal">
									<input type="hidden" name="nbr" id="nbr">
									<script>
										var reg = /.[A-Za-z]+/
										// var x = document.cookie;
										// alert(x)
										// var livraison = x.split(";")[1].split("=")[1]
										var livraison = localStorage.getItem("livraison")
										if (livraison.match(reg)) {
											livraison = 0
										}
										$("#livrai").text(livraison + " DT")
										$("#totale").text((parseInt(livraison) + <?= $subtotale  ?>) + " Dt")
										$("#priceTotal").val((parseInt(livraison) + <?= $subtotale ?>))
										$("#nbr").val("<?= $nbr ?>")
									</script>
									<?php
									if (!empty($coupon)) {
										$tot = $subtotale * (1 - $coupon["reduction"] / 100);
										echo "<script>
											var livraison = localStorage.getItem('livraison')
											$('#livrai').text(livraison + ' DT')
											$('#totale').text((parseInt(livraison) + $tot ) + ' Dt    (reduction coupon)')
											$('#priceTotal').val((parseInt(livraison) + $tot))
											</script>";
									}else{
										$tot = $subtotale ;
										echo "<script>
											var livraison = localStorage.getItem('livraison')
											$('#livrai').text(livraison + ' DT')
											$('#totale').text((parseInt(livraison) + $tot ) + ' Dt')
											$('#priceTotal').val((parseInt(livraison) + $tot))
											</script>";
									}
									?>
									<form class="form-group col-md" action="<?= base_url() ?>coupons/useCoupons" method="post">
										<label class="text-color-dark font-weight-semibold" for="billing_email">Vous avez un coupon ?</label>
										<div class="input-group input-group-style-3 rounded">
											<input id="couponval" type="text" value="<?= !empty($this->session->flashdata("coupons_applique")) ? explode(" ", $this->session->flashdata("coupons_applique"))[2] : '' ?>" name="coupon" class="form-control bg-light-5 border-0" placeholder="Enter Coupon Code..." aria-label="Enter Coupon Code" required>
											<span class="input-group-btn bg-light-5 p-1">
												<button class="btn btn-primary font-weight-semibold btn-h-3 rounded h-100" id="btncoup" type="submit">APPLIQUER</button>
											</span>
										</div>
									</form>
									<br>
									<br>
									<br>
									<!-- <h3 class="font-weight-bold text-4 mb-3">Paiement</h3>
									<div id="shopPayment">
										<div class="radio-custom">
											<input type="radio" id="shopPaymentBankTransfer" name="paymentMethod" value="a la livraison" checked>
											<label class="font-weight-semibold" for="shopPaymentBankTransfer">Paiement à la livraison</label>
										</div>
										<div class="radio-custom">
											<input type="radio" id="shopPaymentCheque" name="paymentMethod" value="en ligne">
											<label class="font-weight-semibold" for="shopPaymentCheque">Paiement en ligne</label>
										</div>
										<br>
										<div class="reduction">
											<i class="lnr lnr-diamond pr-1 text-5"></i>
											<span> Vous recevrez une reduction de 5% si vous choisissez de payer en ligne !</span>
										</div>
										<input type="hidden" name="orders" value="<?= $orders ?>">

									</div> -->
								</div>
							</div>
						</div>

						<!-- <div class="row">
							<div class="col text-right">
								<button class="mx-5 btn btn-dark btn-rounded btn-v-3 btn-h-3 font-weight-bold">ACHETER</button>
							</div>
						</div> -->
					
				</div>
			</div>
	</section>
	<script>
		// 	$("#btncoup").on("click", () => {
		// 	$.ajax({
		// 		url: "<?= base_url() ?>coupons/useCoupons",
		// 		type: "post",
		// 		data: {
		// 			coupon: $("#couponval").val(),
		// 		},
		// 		success: (data) => {
		// 			alert("fezjkfhzkje")

		// 		}
		// 	})
		// })
	</script>
</div>