
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-body">
                        <h5 class="font-strong mb-4">LISTE DES CATÉGORIES</h5>
                        <div class="flexbox mb-4">
                            <div class="flexbox">
                                
                            </div>
                            <div class="flexbox">
                                <div class="input-group-icon input-group-icon-left mr-3">
                                    <span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span>
                                    <input class="form-control form-control-rounded form-control-solid" id="key-search" type="text" placeholder="Rechercher ...">
                                </div>
                                <a class="btn btn-rounded btn-primary btn-air" href="<?= base_url() ?>dashboard/ecommerce_add_category">Ajouter une catégorie</a>
                            </div>
                        </div>
                        <div class="table-responsive row">
                            <table class="table table-bordered table-hover" id="products-table">
                                <thead class="thead-default thead-lg">
                                    <tr>
                                        <th>ID</th>
                                        <th>Type</th>
                                        <th>Nom de catégorie</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($women_categories as $women){ ?>
                                        <tr>
                                        <td><?= $women->id ?></td>
                                        <td><?= $women->type ?></td>
                                        <td><?= $women->nom_categorie ?></td>
                                        <td>
                                            <a class="text-light mr-3 font-16" href="<?= base_url() ?>dashboard/category/<?= $women->id ?>"><i class="ti-pencil"></i></a>
                                            <a class="text-light font-16" href="<?= base_url() ?>category/deleteCategory/<?= $women->id ?>"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?> 
                                    <?php foreach($men_categories as $men){ ?>
                                        <tr>
                                        <td><?= $men->id ?></td>
                                        <td><?= $men->type ?></td>
                                        <td><?= $men->nom_categorie ?></td>
                                        <td>
                                            <a class="text-light mr-3 font-16" href="<?= base_url() ?>dashboard/category/<?= $men->id ?>"><i class="ti-pencil"></i></a>
                                            <a class="text-light font-16" href="<?= base_url() ?>category/deleteCategory/<?= $men->id ?>"><i class="ti-trash"></i></a>
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
          