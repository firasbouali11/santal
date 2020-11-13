<div role="main" class="main">
	<div class="slider-container slider-container-height-550 rev_slider_wrapper bg-light-5">
		<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.7" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': [1140,960,720,540], 'gridheight': [250,550,550,550], 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,576], 'navigation' : {'arrows': { 'enable': false, 'style': 'slider-arrows-style-1' }, 'bullets': {'enable': false, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 35, 'h_offset': 0}}}">
			<ul>
				<li class="slide-overlay slide-overlay-level-8" data-transition="fade">
					<img src="<?= base_url() ?>assets/img/slides/headers.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-duration="12000" data-ease="Linear.easeNone" class="rev-slidebg ">

					<p class="tp-caption font-weight-bold layer-letter-spacing-5 text-white" data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"opacity:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-voffset="['0','-40','-40','-40']" data-fontsize="['54','54','54','47']" data-lineheight="['80','60','60','41']">Profile Collaborateur</p>


				</li>
			</ul>
		</div>
	</div>

	<section class="section">
		<div class="container">
			<!-- <div class="row text-center">
				<div class="col">
					<span class="top-sub-title  appear-animation" data-appear-animation="fadeInUpShorter">SANTAL</span>
					<h2 class="font-weight-bold appear-animation" data-appear-animation="fadeInUpShorter">
						Contactez nous</h2>
					<p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Si vous avez d'autres questions,
						n'hésitez pas à nous contacter.</p>
				</div>
			</div> -->
			<div class="row pt-5">
				<div class="col-lg-4">
					<div class="row">
						<div class="col-12 col-md-4 col-lg-12 mb-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter">
							<div class="icon-box icon-box-style-1">
								<div class="icon-box-icon">
									<i class="lnr lnr-user "></i>
								</div>
								<div class="icon-box-info mt-1">
									<div class="icon-box-info-title">
										<h3 class="font-weight-bold text-4 mb-0">Profile</h3>
									</div>
									<p><?= $user_info[0]->username ?></p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4 col-lg-12 mb-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
							<div class="icon-box icon-box-style-1">
								<div class="icon-box-icon icon-box-icon-no-top">
									<i class="fab fa-facebook-f" style="color:blue !important"></i>
								</div>
								<div class="icon-box-info mt-1">
									<div class="icon-box-info-title">
										<h3 class="font-weight-bold text-4 mb-0">Facebook</h3>
									</div>
									<p><a href="mailto:you@domain.com"><?= $user_info[0]->lien_fb ?></a></p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4 col-lg-12 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
							<div class="icon-box icon-box-style-1">
								<div class="icon-box-icon">
									<i class="fab fa-instagram" style="color:orange !important"></i>
								</div>
								<div class="icon-box-info mt-1">
									<div class="icon-box-info-title">
										<h3 class="font-weight-bold text-4 mb-0">Instagram</h3>
									</div>
									<p><a href="tel:+21624 505 920"><?= $user_info[0]->lien_insta ?></a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8 appear-animation" data-appear-animation="fadeInRightShorter">
					<?php if($user_info[0]->collab == 2){ ?>
					<?php foreach($coupons_user as $coup){ ?>
					<h3 class="my-3">coupon: <?= $coup["couponsCle"] ?>     |      utilisé <?= $coup["used"] ?> fois       |      reduction : <?= $coup["reduction"] ?>%  </h3>
					<?php }
					} else{ ?>
					<h1>Merci d'attendre l'affectation des coupons</h1>
					<?php } ?>
					<p>Modifier vos coordonnées</p>
					<?= validation_errors('<div class="alert alert-danger">', "</div>") ?>
					<form class="contact-form form-style-2" action="<?= base_url() ?>coupons/updateCollab" method="POST">
						<?php if ($this->session->flashdata("msg_sent")) { ?>
							<div class="contact-form-success alert alert-success">
								<strong>Success!</strong> <?= $this->session->flashdata("msg_sent") ?>
							</div>
						<?php } ?>
						<?php if ($this->session->flashdata("msg_not_sent")) { ?>
							<div class="contact-form-error alert alert-danger">
								<strong>Error!</strong> <?= $this->session->flashdata("msg_not_sent") ?>
								<span class="mail-error-message d-block"></span>
							</div>
						<?php } ?>

						<div class="form-row">
							<div class="form-group col-md-6">
								<input type="url" value="<?= $user_info[0]->lien_fb ?>" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="lien_fb" id="lien_fb" placeholder="Name" required>
							</div>
							<div class="form-group col-md-6">
								<input type="url" value="<?= $user_info[0]->lien_insta ?>" data-msg-required="Please enter your email address." name="lien_insta" data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" placeholder="E-mail" required>
							</div>
						</div>
						<div class="form-row mt-2">
							<div class="col">
								<input type="submit" value="ENREGISTRER" class="btn btn-primary btn-rounded btn-4 font-weight-semibold text-0" data-loading-text="Loading...">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- <div class="container">
		<iframe class="google-map my-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3174.9315734043607!2d9.871983215768273!3d37.273049679853905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e31f831625a953%3A0x6cfdee7d0211fe93!2sSANTAL!5e0!3m2!1sfr!2stn!4v1586784736144!5m2!1sfr!2stn" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div> -->

</div>