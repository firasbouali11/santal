<footer id="footer" class="footer-hover-links-light mt-0" style='background:linear-gradient(to bottom,#19733B,#A2C63D) !important;'>
	<div class="container">
		<div class="row">
			<div class="row">
				<div class="col-lg-2 mb-2 mb-lg-0">
					<a href="<?= base_url() ?>" class="logo">
						<img alt="Santal" class="img-fluid mb-3" src="<?= base_url() ?>assets/img/logos/logo.png">
					</a>
				</div>

				<div class="col-lg-4 mb-4 mb-lg-0">
					<h2 class="text-3 mb-3">SANTAL.tn</h2>
					<p class="text-color-light">Notre boutique en ligne spécialisée dans la vente de produits cosmétiques en Tunisie.
						Découvrir nos crèmes pour le visage, nos huiles essentielles et végétales pour les
						cheveux et le corps et plein d'autres produits au meilleurs prix.
				</div>



				<div class="col-lg-3 mb-3 mb-lg-0">
					<h2 class="text-3 mb-3">NOS PRODUITS</h2>
					<ul class="list list-icon list-unstyled">
						<li class="mb-2 text-color-light"><i class="fas fa-angle-right mr-2 ml-1 "></i> <a class="text-color-light" href="shop-3-columns-left-sidebar.html">Promotions</a></li>
						<li class="mb-2 text-color-light"><i class="fas fa-angle-right mr-2 ml-1 "></i> <a class="text-color-light" href="shop-3-columns-left-sidebar.html">Nouveautés</a></li>
						<li class="mb-2 text-color-light"><i class="fas fa-angle-right mr-2 ml-1 "></i> <a class="text-color-light" href="shop-3-columns-left-sidebar.html">Meilleures ventes</a></li>
					</ul>
				</div>

				<div class="col-lg-3">
					<h2 class="text-3 mb-3">CONTACT</h2>
					<ul class="list list-icons list-unstyled">
						<li class="text-color-light mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <span class="text-color-light">Adresse:</span> <?= $contact[1]["value"] ?></li>
						<li class="text-color-light mb-2"><i class="fas fa-angle-right mr-2 ml-1"></i> <span class="text-color-light">Téléphone:</span> <a class="text-color-light" href="tel:+1234567890">(123)
						<?= $contact[0]["value"] ?></a>
						</li>
						<li class="mb-2 text-color-light"><i class="fas fa-angle-right mr-2 ml-1"></i> <span class="text-color-light">Email:</span> <a href="mailto:mail@example.com" class="link-underline-light"><?= $contact[2]["value"] ?></a></li>
					</ul>
					<div class="col-md-7 col-lg-8">
						<ul class="social-icons social-icons-transparent social-icons-icon-light social-icons-lg">
							<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
							<li class="social-icons-linkedin"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-linkedin"></i></a></li>
							<li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>

			<div style="width:100%;display:flex;justify-content:center;">
				<div class="container">
					<p class="text-center text-color-light">Copyrights © 2020, ENSI Junior Entreprise </p>
				</div>
			</div>

		</div>

</footer>
</div>

<!-- Vendor -->
<script src="<?= base_url() ?>assets/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-cookie/jquery-cookie.min.js"></script>
<script src="<?= base_url() ?>assets/master/style-switcher/style.switcher.js" id="styleSwitcherScript" data-base-path="assets/" data-skin-src=""></script>
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
<!-- Examples -->
<script src="<?= base_url() ?>assets/js/examples/examples.lightboxes.js"></script>
<script src="<?= base_url() ?>assets/js/examples/examples.gallery.js"></script>
<script>
	$("#logout").click(() => {
		$.ajax({
			type: "post",
			url: "<?= base_url() ?>users/logout",
			success: () => {
				window.location.href = "<?= base_url() ?>shop-login"
			}
		})
	})
	$()
</script>
</body>

</html>