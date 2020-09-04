<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-body">
                <h5 class="font-strong mb-4">LISTE DES PRODUITS</h5>
                <div class="flexbox mb-4">
                    <div class="flexbox">
                        <label class="mb-0 mr-2">Catégorie :</label>
                        <select class="selectpicker show-tick form-control" id="type-filter" title="Filtrer" data-style="btn-solid" data-width="150px">
                            <option value="">Tous</option>
                            <optgroup label="Femmes">
                                <option>Visage</option>
                                <option>Cheveux</option>
                                <option>Corps et bain</option>
                                <option>Parfums</option>
                            </optgroup>
                            <optgroup label="Hommes">
                                <option>Parfums</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="flexbox">
                        <div class="input-group-icon input-group-icon-left mr-3">
                            <span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span>
                            <input class="form-control form-control-rounded form-control-solid" id="key-search" type="text" placeholder="Rechercher ...">
                        </div>
                        <a class="btn btn-rounded btn-primary btn-air" href="ecommerce_add_product.html">Ajouter un produit</a>
                    </div>
                </div>
                <div class="table-responsive row">
                    <table class="table table-bordered table-hover" id="products-table">
                        <thead class="thead-default thead-lg">
                            <tr>
                                <th>ID</th>
                                <th>Produit</th>
                                <th>Catégorie</th>
                                <th>Prix</th>
                                <th>Référence</th>
                                <th>Quantité</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($all_products as $product) { ?>
                                <tr>
                                    <td><?= $product->id ?></td>
                                    <td>
                                        <img class="mr-3" src="<?= base_url() ?>assets/img/products/<?= explode(":", $product->images)[0] ?>" alt="image" width="60" /><?= $product->title ?></td>
                                    <td> <?= "$product->type / $product->category "  ?></td>
                                    <td><?= "$product->price DT" ?></td>
                                    <td>F0522</td>
                                    <td>
                                        <span class="badge <?= $product->quantity == 0 ? "badge-danger" : "badge-success"  ?> badge-pill"><?= $product->quantity == 0 ? "Non Disponible" : "Disponible" ?></span>
                                    </td>
                                    <td>
                                        <a href="<?= base_url() ?>dashboard/product/<?= $product->id ?>" class="text-light mr-3 font-16" href="javascript:;"><i class="ti-pencil"></i></a>
                                        <a href="<?= base_url() ?>products/deleteProduct/<?= $product->id ?>" class="text-light font-16" href="javascript:;"><i class="ti-trash"></i></a>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->