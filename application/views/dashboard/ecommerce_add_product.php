<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-body">
                <h5 class="font-strong mb-5">AJOUTER UN NOUVEAU PRODUIT</h5>
                <form action="<?= base_url() ?>products/addProduct" method="post" name="form" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-4">
                            <div>
                                <img id="principalImage" src="<?= base_url() ?>dashboard_assets/img/products/placeholder_product.png" alt="image" />
                            </div>
                            <div class="aa flexbox-b mt-4">
                                <div class="file-input-plus file-input"><i class="la la-plus-circle"></i>
                                    <input id="userfile" type="file" name="userfile[]" multiple>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group mb-4">
                                <label>Nom du produit</label>
                                <input class="form-control form-control-solid" name="productTitle" type="text" placeholder="Nom du produit">
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group mb-4">
                                    <label>Catégorie</label>
                                    <div>
                                        <select class="selectpicker show-tick form-control" name="productCategory" title="Sélectionner" data-style="btn-solid">
                                            <optgroup label="Femmes">
                                                <?php foreach($women_categories as $women){ ?>
                                                    <option value='<?= "$women->type $women->nom_categorie" ?>'><?= $women->nom_categorie ?></option>
                                                <?php } ?>
                                            </optgroup>
                                            <optgroup label="Hommes">
                                            <?php foreach($men_categories as $men){ ?>
                                                    <option value='<?= "$men->type $men->nom_categorie" ?>'><?= $men->nom_categorie ?></option>
                                                <?php } ?>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group mb-4">
                                    <label>Référence</label>
                                    <input name="reference" class="form-control form-control-solid" type="text" placeholder="Numéro de référence">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 form-group mb-4">
                                    <label>Prix</label>
                                    <input name="price" class="form-control form-control-solid" type="text" placeholder="Prix unitaire">
                                </div>
                                <div class="col-sm-4 form-group mb-4">
                                    <label>Quantité totale</label>
                                    <input name="qty" class="form-control form-control-solid" type="text" placeholder="Quantité totale">
                                </div>
                                <div class="col-sm-4 form-group mb-4">
                                    <label>Taux d'évaluation</label>
                                    <input name="eval" class="form-control form-control-solid" type="text" placeholder="Taux d'évaluation">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label>Description</label>
                                <textarea name="description" class="form-control form-control-solid" rows="4" placeholder="Description"></textarea>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary btn-air mr-2">Valider</button>
                                <button class="btn btn-secondary">Annuler</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT-->
<script>
   
</script>