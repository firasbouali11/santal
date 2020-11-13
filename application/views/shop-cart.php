<div role="main" class="main">
	<div class="slider-container slider-container-height-550 rev_slider_wrapper bg-light-5">
		<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.7" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': [1140,960,720,540], 'gridheight': [250,550,550,550], 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,576], 'navigation' : {'arrows': { 'enable': false, 'style': 'slider-arrows-style-1' }, 'bullets': {'enable': false, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 35, 'h_offset': 0}}}">
			<ul>
				<li class="slide-overlay slide-overlay-level-8" data-transition="fade">
					<img src="<?= base_url() ?>assets/img/slides/headers.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-duration="12000" data-ease="Linear.easeNone" class="rev-slidebg ">

					<p class="tp-caption text-white font-weight-bold layer-letter-spacing-5" data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-voffset="['0','-40','-40','-40']" data-fontsize="['54','54','54','47']" data-lineheight="['60','60','60','41']">
						Mon&nbsp;Panier</p>


				</li>
			</ul>
		</div>
	</div>
	<br><br>

	<section id="sec" class="section pt-0">
		<div class="container">
			<div class="row mb-5">
				<div class="col">
					<form class="shop-cart" method="post" action="#">

						<div class="table-responsive">
							<table class="shop-cart-table w-100">
								<thead>
									<tr>
										<th class="product-remove"></th>
										<th class="product-thumbnail"></th>
										<th class="product-name"><strong>Produit</strong></th>
										<th class="product-price"><strong>Prix de l'unité</strong></th>
										<th class="product-quantity"><strong>Quantité</strong></th>
										<th class="product-subtotal"><strong>Total</strong></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($panier as $produit) { ?>
										<tr class="cart-item" id="item<?= $produit['id'] ?>">
											<td class="product-remove">
												<a id="<?= 'del' . $produit['id'] ?>"><i class="fas fa-times" aria-label="Remove"></i></a>
											</td>
											<td class="product-thumbnail">
												<img src="<?= base_url() ?>assets/img/products/<?= explode(":", $produit["images"])[0] ?>" class="img-fluid" width="67" alt="" />
											</td>
											<td class="product-name">
												<a href="<?= base_url() ?>produits/<?= $produit['id'] ?>"><?= $produit["title"] ?>e</a>
											</td>
											<td class="product-price">
												<span class="unit-price"><?= $produit["price"] ?> DT</span>
											</td>
											<td class="product-quantity">
												<div class="quantity">
													<input type="button" value="-" class="minus" id="minus<?= $produit["id"] ?>">
													<input type="number" step="1" min="2" name="quantity" value="<?= $produit["nbrProduit"] ?>" title="Qty" class="qty" id="qty<?= $produit["id"] ?>" size="2">
													<input type="button" value="+" class="plus" id="plus<?= $produit["id"] ?>">
												</div>
											</td>
											<td class="product-subtotal">
												<span class="sub-total"><strong id="<?= $produit["id"] ?>"><?= $produit["price"] * $produit["nbrProduit"] ?> DT</strong></span>
											</td>
											<script>
												$("#minus<?= $produit["id"] ?>").on("click", () => {
													qty = parseInt($("#qty<?= $produit["id"] ?>").val()) - 1
													if (qty < 0) {
														qty = 0
														$("#qty<?= $produit["id"] ?>").val(1)
													}
													$("#<?= $produit["id"] ?>").text((qty * <?= $produit["price"] ?>) + " DT")
													$.ajax({
														type: "post",
														url: "<?= base_url() ?>cart/updateCart",
														data: {
															id: <?= $produit["id"] ?>,
															nb: parseInt($("#qty<?= $produit["id"] ?>").val()) - 1,
														},
														success: (data) => {
															$("#panier").fadeOut(300).load(" #panier").fadeIn(300)
															$(".a").load(" .a")
															$(".aa").text("")
															$("#livra").text("Choisir la destination de la livraison")
															$("#gover").val("cc")
														}
													})


												})
												$("#plus<?= $produit["id"] ?>").on("click", () => {
													qty = parseInt($("#qty<?= $produit["id"] ?>").val()) + 1
													$("#<?= $produit["id"] ?>").text((qty * <?= $produit["price"] ?>) + " DT")
													$.ajax({
														type: "post",
														url: "<?= base_url() ?>cart/updateCart",
														data: {
															id: <?= $produit["id"] ?>,
															nb: parseInt($("#qty<?= $produit["id"] ?>").val()) + 1,
														},
														success: (data) => {
															$("#panier").fadeOut(300).load(" #panier").fadeIn(300)
															$(".a").load(" .a")
															$(".aa").text("")
															$("#livra").text("Choisir la destination de la livraison")
															$("#gover").val("cc")
														}
													})
												})
											</script>
										</tr>
										<script>
											$("#del<?= $produit['id'] ?>").click(() => {
												$.ajax({
													url: "<?= base_url() ?>cart/deleteFromCart/<?= $produit['id'] ?>",
													type: 'post',
													success: () => {
														$("#item<?= $produit['id'] ?>").load(" #item<?= $produit['id'] ?>")
														$("#panier").load(" #panier")
														$(".a").load(" .a")
														$("#gover").val("cc")
													},
												})
											})
										</script>
									<?php } ?>
									<!-- <tr class="border-bottom-0">
										<td colspan="6" class="px-0">
											<div class="row mx-0">
												<div class="col-md-5 px-0 mb-3 mb-md-0">
													<div class="input-group input-group-style-3 rounded">
														<input type="text" class="form-control bg-light-5 border-0" placeholder="Entrer cotre code de remise..." aria-label="Enter Coupon Code">
														<span class="input-group-btn bg-light-5 p-1">
															<button class="btn  font-weight-semibold btn-h-3 rounded h-100" type="submit">APPLIQUER</button>
														</span>
													</div>
												</div>
												 <div class="col-md-7 text-right px-0">
													<button id="maj" class="btn btn-dark btn-outline btn-rounded font-weight-bold btn-h-2 btn-v-3" type="submit">MISE À JOUR DU PANIER</button>
												</div> 
											</div>
										</td>
									</tr> -->
								</tbody>
							</table>
						</div>

					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 mb-5 mb-md-0">
					<h2 class="font-weight-bold text-4 mb-3">Calculer les frais de livraison</h2>
					<form class="shipping-calculator" action="<?= base_url() ?>" method="post">
						<div class="form-row">
							<div class="form-group col">
								<div class="custom-select-1">
									<select id="gover" name="destination" class="form-control bg-light-5 text-color-dark border-0" aria-label="Choose a country" required>
										<option value="cc">Choisir la destination de la livraison...</option>
										<?php foreach ($destinations as $destination) { ?>
											<option value="<?= $destination["prix"] ?>"><?= $destination["governorat"] ?></option>
										<?php } ?>

									</select>
								</div>
							</div>
						</div>
						<!-- <div class="form-row mb-1">
							<div class="form-group col-md-6">
								<input type="text" value="" class="form-control bg-light-5 border-0" placeholder="État / Pays" required>
							</div>
							<div class="form-group col-md-6">
								<input type="text" value="" class="form-control bg-light-5 border-0" placeholder="Code postal / ZIP" required>
							</div>
						</div> -->
						<p>Vous aurez une reduction de 5% si vous choisissez au checkout de payer en ligne !</p>
						<div class="form-row">
							<div class="col">
								<a class="btn btn-rounded font-weight-bold btn-h-2 btn-v-3 wa <?= !$this->session->userdata("logged_in") ? 'disabled':''?>" href="<?= base_url() ?>shop-checkout">PASSER À LA CAISSE </a>
								<!-- <a href="shop-checkout" class=""></a> -->
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-6">
					<h2 class="font-weight-bold text-4 mb-3">Totaux du panier</h2>
					<div class="table-responsive">
						<table class="cart-totals w-100">
							<tbody>
								<tr>
									<td>
										<span class="cart-total-label">Sous-total du panier</span>
									</td>
									<td>
										<span class="cart-total-value a"><?= $sum ?> DT</span>
									</td>
								</tr>
								<tr>
									<td>
										<span class="cart-total-label">Livraison</span>
									</td>
									<td>
										<span class="cart-total-value " id="livra">Choisir la destination de la livraison</span>
									</td>
								</tr>
								<tr class="border-bottom-0">
									<td>
										<span class="cart-total-label">Total</span>
									</td>
									<td>
										<span id="final-price" class="cart-total-value text-color-primary text-4 aa"></span>
									</td>
								</tr>
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<script>
	$("#gover").on("change", () => {
		$.ajax({
			url: "<?= base_url() ?>cart/updateLivraison",
			type: "post",
			data: {
				destination: $("#gover").val(),
			},
			success: (data) => {
				if (data != "cc") {
					$("#livra").text(data + " DT")
					// document.cookie = "livraison="+data;
					localStorage.setItem("livraison",data)
					$("#final-price").text((parseInt(data) + parseInt($(".a").text())) + " DT")
				} else {
					$("#livra").text("Choisir la destination de la livraison")
					$("#final-price").text("")
					$("#gover").select("cc")
				}

			}
		})
	})
	$(".wa").click((e)=>{
		if($("#gover").val() == "cc") {
			e.preventDefault()
			alert("SVP choisissez la destination !")
		}
	})
</script>