
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <?php if ($this->session->flashdata("password_updated_admin")) { ?>
		<p class="alert alert-success my-3 mx-5 animated zoomIn"><?= $this->session->flashdata("password_updated_admin") ?></p>
	<?php } ?>
<?php if ($this->session->flashdata("password_failed_admin")) { ?>
    <p class="alert alert-danger my-3 mx-5 animated zoomIn"><?= $this->session->flashdata("password_failed_admin") ?></p>
<?php } ?>
<?php if ($this->session->flashdata("check_password_admin")) { ?>
    <p class="alert alert-danger my-3 mx-5 animated zoomIn"><?= $this->session->flashdata("check_password_admin") ?></p>
<?php } ?>
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-body">
                <h5 class="font-strong mb-5">Settings</h5>
                <div class="row">

                    <div class="col-lg-8">
                        <form action="<?= base_url() ?>contact/updateContact" method="post">
                            <div class="row">
                                <!-- <div class="col-sm-6 form-group mb-4">
                                    <label>Email</label>
                                    <div>
                                        <input name="email" value="<?= $contact[2]["value"] ?>" class="form-control form-control-solid" type="text" placeholder="Propriétaire">
                                    </div>
                                </div> -->
                                <div class="col-sm-6 form-group mb-4">
                                    <label>Adresse</label>
                                    <div>
                                        <input name="add" value="<?= $contact[1]["value"] ?>" class="form-control form-control-solid" type="text" placeholder="Réduction">
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group mb-4">
                                    <label>Telephone</label>
                                    <input name="phone" value="<?= $contact[0]["value"] ?>" class="form-control form-control-solid" type="text" placeholder="Code coupon">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                <label>Email</label>
                                    <div>
                                        <input name="email" value="<?= $contact[2]["value"] ?>" class="form-control form-control-solid" type="email" placeholder="Réduction">
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary btn-air mr-2">Save</button>
                                <!-- <button class="btn btn-secondary">Annuler</button> -->
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-body">
                <h5 class="font-strong mb-5">Compte</h5>
                <div class="row">

                    <div class="col-lg-8">
                        <form action="<?= base_url() ?>admin/edit_pass" method="post">
                            <div class="row">
                                <div class="col-sm-12 form-group mb-4">
                                    <label>L'ancien mot de passe</label>
                                    <div>
                                        <input name="oldpassword" class="form-control form-control-solid" type="password">
                                    </div>
                                </div>
                                <div class="col-sm-12 form-group mb-4">
                                    <label>Le nouveau mot de passe</label>
                                    <input name="password" class="form-control form-control-solid" type="password">
                                </div>
                                <div class="col-sm-12 form-group mb-4">
                                    <label>Confirmer mot de passe</label>
                                    <input name="password2" class="form-control form-control-solid" type="password">
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary btn-air mr-2">Save</button>
                                <!-- <button class="btn btn-secondary">Annuler</button> -->
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
    <!-- END PAGE CONTENT-->
   