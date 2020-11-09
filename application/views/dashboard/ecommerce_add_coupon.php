<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-body">
                <h5 class="font-strong mb-5">AJOUTER UN NOUVEAU COUPON</h5>
                <div class="row">

                    <div class="col-lg-8">
                        <form action="<?= base_url() ?>coupons/addCoupons" method="post">
                            <div class="row">
                                <div class="col-sm-6 form-group mb-4">
                                    <label>Propritaire</label>
                                    <div>
                                        <select class="selectpicker show-tick form-control" name="id_user" title="Sélectionner" data-style="btn-solid">
                                            <?php foreach($collabs as $collab ) {?>
                                                <option value=<?= $collab["id"] ?>><?= $collab["username"] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group mb-4">
                                    <label>Code coupon</label>
                                    <input name="code" class="form-control form-control-solid" type="text" placeholder="Code coupon">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group mb-4">
                                    <label>Réduction</label>
                                    <div>
                                        <input name="reduction" class="form-control form-control-solid" type="text" placeholder="Réduction">
                                    </div>
                                </div>
                                <!-- <div class="col-sm-6 form-group mb-4">
                                    <label>Date d'expiration</label>
                                    <input name="expiration" class="form-control form-control-solid" type="date" placeholder="Date d'expiration">
                                </div> -->
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary btn-air mr-2">Valider</button>
                                <button class="btn btn-secondary">Annuler</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->