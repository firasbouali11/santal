<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-body">
                <h5 class="font-strong mb-4">LISTE DES COMMANDES</h5>
                <div class="flexbox mb-4">
                    <div class="flexbox">
                        <label class="mb-0 mr-2">Type de paiement :</label>
                        <select class="selectpicker show-tick form-control" id="type-filter" title="Filtrer" data-style="btn-solid" data-width="150px">
                            <option value="">Tous</option>
                            <option>En ligne</option>
                            <option>À la livraison</option>
                        </select>
                    </div>
                    <div class="input-group-icon input-group-icon-left mr-3">
                        <span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span>
                        <input class="form-control form-control-rounded form-control-solid" id="key-search" type="text" placeholder="Rechercher ...">
                    </div>
                </div>
                <div class="table-responsive row">
                    <table class="table table-bordered table-hover" id="orders-table">
                        <thead class="thead-default thead-lg">
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Client</th>
                                <th>Prix total</th>
                                <th>Paiement</th>
                                <th>Date</th>
                                <th class="no-sort"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($facturations as $i => $facturation) { ?>
                                <tr>
                                    <td><?= $i + 1 ?></td>
                                    <td>
                                        <a href="ecommerce_order_details.html">#<?= $facturation["id"] ?></a>
                                    </td>
                                    <td><?= $facturation["username"] ?></td>
                                    <td><?= $facturation["prixTotale"] ?> DT</td>
                                    <td><?= $facturation["typePaiement"] ?></td>
                                    <td><?= $facturation["created"] ?></td>
                                    <td>
                                        <a class="text-muted font-16" href="<?= base_url() ?>dashboard/order/<?= $facturation["id"] ?>" ><i class="la la-cloud-upload"></i></a>
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