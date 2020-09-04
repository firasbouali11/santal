<div role="main" class="main">
    <div class="slider-container slider-container-height-550 rev_slider_wrapper bg-light-5">
        <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.7" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': [1140,960,720,540], 'gridheight': [250,550,550,550], 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,576], 'navigation' : {'arrows': { 'enable': false, 'style': 'slider-arrows-style-1' }, 'bullets': {'enable': false, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 35, 'h_offset': 0}}}">
            <ul>
                <li class="slide-overlay slide-overlay-level-8" data-transition="fade">
                    <img src="<?= base_url() ?>assets/img/slides/headers.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-duration="12000" data-ease="Linear.easeNone" class="rev-slidebg ">

                    <p class="tp-caption text-white font-weight-bold layer-letter-spacing-5" data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]' data-x="center" data-y="center" data-voffset="['0','-40','-40','-40']" data-fontsize="['54','54','54','47']" data-lineheight="['80','60','60','41']">Mon&nbsp;Compte</p>


                </li>
            </ul>
        </div>
    </div>
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="nav flex-column nav-tabs nav-tabs-vertical" id="tabVertical" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="vertical-portfolio-tab" data-toggle="tab" href="#vertical-info" role="tab" aria-controls="vertical-portfolio" aria-expanded="true"><button class="btn btn-outline btn-pink btn-rounded btn-4 btn-block btn-icon-effect-1 animated fadeInLeft">
                                    <span class="wrap">
                                        <span>Informations du Compte</span>
                                        <i class="lnr lnr-user"></i>
                                    </span>
                                </button></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" id="vertical-process-tab" data-toggle="tab" href="#vertical-password" role="tab" aria-controls="vertical-process"><button class="btn btn-outline btn-pink btn-rounded btn-4 btn-block btn-icon-effect-1 animated fadeInLeft" style="animation-delay: 0.1s;">
                                    <span class="wrap">
                                        <span>Mot de Passe</span>
                                        <i class="lnr lnr-lock"></i>
                                    </span>
                                </button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="vertical-process-tab" data-toggle="tab" href="#vertical-orders" role="tab" aria-controls="vertical-process"><button class="btn btn-outline btn-pink btn-rounded btn-4 btn-block btn-icon-effect-1 animated fadeInLeft" style="animation-delay: 0.2s;">
                                    <span class="wrap">
                                        <span>Commandes</span>
                                        <i class="lnr lnr-cart"></i>
                                    </span>
                                </button></a>
                        </li>
                        <li class="nav-item">   
                            <a class="nav-link" id="vertical-process-tab" data-toggle="tab" href="#" role="tab" aria-controls="vertical-process">
                                <button id="logout" class="btn btn-outline btn-pink btn-rounded btn-4 btn-block btn-icon-effect-1 animated fadeInLeft" style="animation-delay: 0.3s;">
                                    <span class="wrap">
                                        <span>Se déconnecter</span>
                                        <i class="lnr lnr-exit"></i>
                                    </span>
                                </button>                            
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
				
				<div class="row">
				<?php if ($this->session->flashdata("user_failed")) { ?>
					<p class="alert alert-danger my-3"><?= $this->session->flashdata("user_failed") ?></p>
				<?php } ?>
				<?php if ($this->session->flashdata("user_updated")) { ?>
					<p class="alert alert-success animated zoomIn"><?= $this->session->flashdata("user_updated") ?></p>
				<?php } ?>
				<?= validation_errors('<div class="alert alert-danger">', "</div>") ?>
				<?php if ($this->session->flashdata("password_failed")) { ?>
					<p class="alert alert-danger my-3"><?= $this->session->flashdata("password_failed") ?></p>
				<?php } ?>
				<?php if ($this->session->flashdata("password_updated")) { ?>
					<p class="alert alert-success animated zoomIn"><?= $this->session->flashdata("password_updated") ?></p>
				<?php } ?>
				</div>
				
                    <div class="tab-content" id="tabVerticalContent">
                        <div class="tab-pane fade pb-4 show active" id="vertical-info" role="tabpanel" aria-labelledby="vertical-portfolio-tab">
                            <p class="mb-0">
                            
                                <form id="shopCheckout" action="<?php echo base_url('users/edit'); ?>" method="post">
                                    <div class="row mb-5">
                                        <div class="col-md-12 mb-5 mb-md-0">
                                            <h2 class="font-weight-bold mb-3">Informations du Compte</h2>
                                            <p class="mb-3">Modifier vos informations personnelles :</p>
                                            
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="text-color-dark font-weight-semibold" for="billing_name">NOM :</label>
                                                    <input type="text" value="<?php echo $user_info[0]->name;?>" class="form-control line-height-1 bg-light-5" name="name" id="billing_name" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="text-color-dark font-weight-semibold" for="billing_last_name">NOM D'UTILISATEUR :</label>
                                                    <input type="text" value="<?php echo $user_info[0]->username;?>" class="form-control line-height-1 bg-light-5" name="username" id="billing_last_name" disabled>
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="text-color-dark font-weight-semibold" for="billing_email">EMAIL :</label>
                                                    <input type="email" value="<?php echo $user_info[0]->email;?>" class="form-control line-height-1 bg-light-5" name="email" id="billing_email" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="text-color-dark font-weight-semibold" for="billing_phone">TÉLÉPHONE :</label>
                                                    <input type="text" value="<?php echo $user_info[0]->phone;?>" class="form-control line-height-1 bg-light-5" name="phone" id="billing_phone" required>
                                                </div>
                                            </div>

                                            <div>
                                            <input type="submit" value="Valider" class="btn  font-weight-bold rounded text-2"/>
                                            </div>
                                        </div>

                                    </div>
                                </form>

                               
                            </p>
                        </div>
                        <div class="tab-pane fade pb-4" id="vertical-password" role="tabpanel" aria-labelledby="vertical-process-tab">
                            <p class="mb-0">
                                <form id="shopCheckout" action="<?php echo base_url('users/edit_pass'); ?>" method="post">
                                    <div class="row mb-5">
                                        <div class="col-md-12 mb-5 mb-md-0">
                                            <h2 class="font-weight-bold mb-3">Mot de passe</h2>
                                            <p class="mb-3">Modifier votre mot de passe</p>

                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label class="text-color-dark font-weight-semibold" for="oldpassword">MOT DE PASSE ACTUEL :</label>
                                                    <input type="password" value="" class="form-control line-height-1 bg-light-5" name="oldpassword" id="oldpassword" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label class="text-color-dark font-weight-semibold" for="password">NOUVEAU MOT DE PASSE :</label>
                                                    <input type="password" value="" class="form-control line-height-1 bg-light-5" name="password" id="password" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label class="text-color-dark font-weight-semibold" for="password2">CONFIRMATION DU MOT DE PASSE :</label>
                                                    <input type="password" value="" class="form-control line-height-1 bg-light-5" name="password2" id="password2" required>
                                                </div>
                                            </div>
                                            <div>
                                            <input type="submit" value="Valider" class="btn  font-weight-bold rounded text-2"/>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </p>
                        </div>
                        <div class="tab-pane fade pb-4" id="vertical-orders" role="tabpanel" aria-labelledby="vertical-process-tab">
                            <p class="mb-0">
                                <section class="section pt-0">
                                    <div class="container">
                                        <div class="row mb-5">
                                        <div class="col-md-12 mb-5 mb-md-0">
                                        <h2 class="font-weight-bold mb-3">Liste des commandes</h2>
                                            <p class="mb-3">Consulter vos commandes passées :</p>
                                            
                                            <div class="col shop-cart">
                                                    <div class="table-responsive">
                                                        <table class="shop-cart-table w-100">
                                                            <thead>
                                                            
                                                                <tr>
                                                                    <th class="product-name">
                                                                        <strong>Date de commande</strong></th>
                                                                    <th class="product-price"><strong>Type de paiement</strong></th>
                                                                    <th class="product-subtotal">
                                                                        <strong>Prix Total</strong></th>
                                                                </tr>
                                                            
                                                            </thead>
                                                            <tbody>
                                                            
                                                            <?php foreach ($user_orders as $order) { ?>
                                                                
                                                                <tr class="cart-item">
                                                                    <td><strong><?php echo $order->created; ?></strong></td>  
                                                                    <td><strong><?php echo $order->typePaiement; ?></strong></td>
                                                                    <td><span class="sub-total"><strong><?php echo $order->prixTotale; ?> DT</strong></span></td>
                                                                </tr>
                                                            
                                                            <?php } ?>
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>