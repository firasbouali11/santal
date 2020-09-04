<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-body">
                <h5 class="font-strong mb-5">EDITER UN PRODUIT</h5>
                <form action="<?= base_url() ?>products/editProduct/<?= $product["id"] ?>" method="post" name="form" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-4">
                            <div>
                                <img src="<?= base_url() ?>assets/img/products/<?= explode(":", $product["images"])[0] ?>" alt="image" />
                            </div>
                            <div class="flexbox-b mt-4">
                                <?php $count = count(explode(":", $product["images"])) ?>
                                <?php for($i=1;$i<$count;$i++){ ?>
                                <div class="file-input-plus file-input">
                                    <img src="<?= base_url() ?>assets/img/products/<?= explode(":", $product["images"])[$i] ?>" alt="">
                                </div>
                                <?php }  ?>
                                <div class="file-input-plus file-input"><i class="la la-plus-circle"></i>
                                    <input type="file" name="userfile" multiple>
                                    <input type="hidden" name="imagess" value="<?= $product["images"] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group mb-4">
                                <label>Nom du produit</label>
                                <input value="<?= $product["title"] ?>" class="form-control form-control-solid" name="productTitle" type="text" placeholder="Nom du produit">
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group mb-4">
                                    <label>Catégorie</label>
                                    <div>
                                        <select class="selectpicker show-tick form-control" name="productCategory" title="Sélectionner" data-style="btn-solid">
                                            <optgroup label="Femmes">
                                                <?php foreach ($women_categories as $women) { ?>
                                                    <option <?= $women->nom_categorie == $product["category"] &&  $women->type == $product["type"]  ? "selected" : "" ?> value='<?= "$women->type $women->nom_categorie" ?>'><?= $women->nom_categorie ?></option>
                                                <?php } ?>
                                            </optgroup>
                                            <optgroup label="Hommes">
                                                <?php foreach ($men_categories as $men) { ?>
                                                    <option <?= $men->nom_categorie == $product["category"] &&  $men->type == $product["type"]  ? "selected" : "" ?> value='<?= "$men->type $men->nom_categorie" ?>'><?= $men->nom_categorie ?></option>
                                                <?php } ?>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group mb-4">
                                    <label>Référence</label>
                                    <input value="<?= $product["reference"] ?>" name="reference" class="form-control form-control-solid" type="text" placeholder="Numéro de référence">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 form-group mb-4">
                                    <label>Prix</label>
                                    <input value="<?= $product["price"] ?>" name="price" class="form-control form-control-solid" type="text" placeholder="Prix unitaire">
                                </div>
                                <div class="col-sm-4 form-group mb-4">
                                    <label>Quantité totale</label>
                                    <input value="<?= $product["quantity"] ?>" name="qty" class="form-control form-control-solid" type="text" placeholder="Quantité totale">
                                </div>
                                <div class="col-sm-4 form-group mb-4">
                                    <label>Taux d'évaluation</label>
                                    <input value="<?= $product["rate"] ?>" name="eval" class="form-control form-control-solid" type="text" placeholder="Taux d'évaluation">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label>Description</label>
                                <textarea name="description" class="form-control form-control-solid" rows="4" placeholder="Description"><?= $product["description"] ?></textarea>
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