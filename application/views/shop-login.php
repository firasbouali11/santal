<div role="main" class="main">
	<div class="slider-container slider-container-height-550 rev_slider_wrapper bg-light-5">
		<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.7" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': [1140,960,720,540], 'gridheight': [250,550,550,550], 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,576], 'navigation' : {'arrows': { 'enable': false, 'style': 'slider-arrows-style-1' }, 'bullets': {'enable': false, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 35, 'h_offset': 0}}}">
			<ul>
				<li class="slide-overlay slide-overlay-level-8" data-transition="fade">
					<img src="<?= base_url() ?>assets/img/slides/headers.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-duration="12000" data-ease="Linear.easeNone" class="rev-slidebg ">

					<p class=" d-block tp-caption text-white font-weight-bold layer-letter-spacing-5" data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-voffset="['0','0','0','0']" data-fontsize="['54','54','54','47']" data-lineheight="['80','80','80','41']">Se&nbsp;Connecter</p>


				</li>
			</ul>
		</div>
	</div>
	<br><br>

	<section class="section">
		<div class="container">
			<?= validation_errors('<div class="alert alert-danger">', "</div>") ?>
			<?php if ($this->session->flashdata("user_failed")) { ?>
				<p class="alert alert-danger my-3"><?= $this->session->flashdata("user_failed") ?></p>
			<?php } ?>
			<?php if ($this->session->flashdata("user_registred")) { ?>
				<p class="alert alert-success animated zoomIn"><?= $this->session->flashdata("user_registred") ?></p>
			<?php } ?>
			<div class="row">
				<div class="col-md-6 col-lg-5 col-xl-4 mb-5 mb-md-0">
					<div class="bg-primary rounded p-5">
						<span class="top-sub-title text-color-light-2">DÉJÀ MEMBRE?</span>
						<h2 class="text-color-light font-weight-bold text-4 mb-4">Se connecter</h2>
						<form action="<?= base_url() ?>users/login" id="shopLoginSignIn" method="post">
							<div class="form-row">
								<div class="form-group col mb-2">
									<label class="text-color-light-2" for="shopLoginSignInEmail">EMAIL / NOM D'UTILISATEUR</label>
									<input type="text" value="" maxlength="100" class="form-control bg-light border-0 rounded text-1" name="email_login" id="shopLoginSignInEmail" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col">
									<label class="text-color-light-2" for="shopLoginSignInPassword">MOT DE PASSE</label>
									<input type="password" value="" class="form-control bg-light border-0 rounded text-1" name="password_login" id="shopLoginSignInPassword" required>
								</div>
							</div>
							<div class="form-row mb-3">
								<div class="form-group col">
									<div class="form-check checkbox-custom checkbox-custom-transparent checkbox-default">
										<input class="form-check-input" type="checkbox" id="shopLoginSignInRemember">
										<label class="form-check-label text-color-light-2" for="shopLoginSignInRemember">
											Souviens-toi de moi
										</label>
									</div>
								</div>
								<div class="form-group col text-right">
									<a href="#" class="forgot-pw text-color-light-2 d-block">Mot de passe oublié?</a>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col text-right">
									<button type="submit" class="btn btn-dark btn-rounded btn-v-3 btn-h-3 font-weight-bold">SE CONNECTER</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-6 col-lg-7 col-xl-8 pt-3">
					<span class="top-sub-title">NOUVEAU UTILISATEUR</span>
					<h2 class="font-weight-bold text-4 mb-1">Vous n'avez pas de compte? S'inscrire maintenant!</h2>
					<p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
					<form id="shopLoginRegister" action="<?= base_url() ?>users/register" method="post">

						<div class="form-row">
							<div class="form-group col-lg-6">
								<label class="text-color-dark" for="shopLoginRegisterName">NOM:</label>
								<input type="text" value="" class="form-control bg-light-5 border-0 rounded" name="name" id="shopLoginRegisterName" required>
							</div>
							<div class="form-group col-lg-6">
								<label class="text-color-dark" for="shopLoginRegisterEmail">ADDRESSE EMAIL:</label>
								<input type="email" value="" class="form-control bg-light-5 border-0 rounded" name="email" id="shopLoginRegisterEmail" required>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-lg-6">
								<label class="text-color-dark" for="shopLoginRegisterUsername">NOM D'UTILISATEUR:</label>
								<input type="text" value="" class="form-control bg-light-5 border-0 rounded" name="username" id="shopLoginRegisterUsername" required>
							</div>
							<div class="form-group col-lg-6">
								<label class="text-color-dark" for="shopLoginRegisterPhone">TELEPHONE:</label>
								<input type="text" value="" class="form-control bg-light-5 border-0 rounded" name="phone" id="shopLoginRegisterPhone" required>
							</div>
						</div>
						<div class="form-row mb-4">
							<div class="form-group col-lg-6">
								<label class="text-color-dark" for="shopLoginRegisterPassword">MOT DE PASSE:</label>
								<input type="password" value="" class="form-control bg-light-5 border-0 rounded" name="password" id="shopLoginRegisterPassword" required>
							</div>
							<div class="form-group col-lg-6">
								<label class="text-color-dark" for="shopLoginRegisterPassword2">COMFIRMER LE MOT DE PASSE:</label>
								<input type="password" value="" class="form-control bg-light-5 border-0 rounded" name="password2" id="shopLoginRegisterPassword2" required>
							</div>
						</div>
						<div class="form-row mb-3" id="ww">
							<div class="form-group col">
								<div class="form-check checkbox-custom checkbox-default">
									<input class="form-check-input" type="checkbox" id="collab">
									<label class="form-check-label text-color-dark-2" for="collab">
										Devenir un collaborateur
									</label>
								</div>
							</div>
						</div>
						<div id="colllab">
						<div class="form-row mb-4">
							<div class="form-group col-lg-6">
								<label class="text-color-dark" for="shopLoginRegisterPassword">LIEN FACEBOOK</label>
								<input type="url" value="" class="form-control bg-light-5 border-0 rounded" name="lien_fb" id="shopLoginRegisterPassword" >
							</div>
							<div class="form-group col-lg-6">
								<label class="text-color-dark" for="shopLoginRegisterPassword2">LIEN INSTAGRAM</label>
								<input type="url" value="" class="form-control bg-light-5 border-0 rounded" name="lien_insta" id="shopLoginRegisterPassword2" >
							</div>
						</div>
						<div class="form-row mb-4">
							<div class="form-group col-lg-12">
								<label class="text-color-dark" for="shopLoginRegisterPassword">REMARQUES</label>
								<textarea class="form-control bg-light-5 border-0 rounded" name="remarque" id="shopLoginRegisterPassword"></textarea>
							</div>
							
						</div>

					</div>
						<div class="form-row">
							<div class="col text-right">
								<button type="submit" class="btn btn-dark btn-rounded btn-v-3 btn-h-3 font-weight-bold">S'INSCRIRE</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

</div>

<script>
	$("#colllab").fadeOut()
	$("#ww").click(()=>{
		if( $("#ww input").is(':checked') ){
			$("#colllab").fadeIn()
		}else{
			$("#colllab").fadeOut()
		}
	})
</script>