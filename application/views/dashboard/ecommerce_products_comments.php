<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-body">
                <h5 class="font-strong mb-4">Commentaires</h5>
                <div class="flexbox mb-4">
                    <div class="flexbox">
                        <!-- <label class="mb-0 mr-2">Type :</label>
                        <select class="selectpicker show-tick form-control" id="type-filter" title="Filtrer" data-style="btn-solid" data-width="150px">
                            <option value="">Tous</option>
                            <option>Approuvés</option>
                            <option>En attente</option>
                        </select> -->
                    </div>
                    <div class="flexbox">
                        <div class="input-group-icon input-group-icon-left mr-3">
                            <span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span>
                            <input class="form-control form-control-rounded form-control-solid" id="key-search" type="text" placeholder="Rechercher ...">
                        </div>

                    </div>
                </div>
                <div class="table-responsive row">
                    <table class="table table-bordered table-hover" id="products-table">
                        <thead class="thead-default thead-lg">
                            <tr>
                                <th>ID</th>
                                <th>Produit</th>
                                <th>Client</th>
                                <th>Évaluation</th>
                                <th>Contenu</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($comments as $i => $comment) { ?>
                                <tr>
                                    <td><?= $comment["id"] ?></td>
                                    <td>
                                        <img class="mr-3" src="<?= base_url() ?>assets/img/products/<?= explode(":",$comment["images"])[0] ?>" alt="image" width="60" /><?= $comment["title"] ?></td>
                                    <td>
                                        <?= $comment["name"] ?>
                                    </td>
                                    <td><?= $comment["rate"] ?></td>
                                    <td><?= $comment["content"] ?></td>
                                    <td>
                                        <span class="badge <?= $comment["approval"] == 1 ? "badge-success": "badge-danger" ?> badge-pill"><?= $comment["approval"] == 1 ? "Approuvé" : "Non Approuvé" ?></span>
                                    </td>
                                    <td>

                                        <a class="text-light mr-2 font-16" href="javascript:;" id=<?= "a$i" ?>><i class="ti-heart"></i></a>
                                        <a class="text-light font-16" href="javascript:;" id=<?= "b$i" ?>><i class="ti-trash"></i></a>
                                    </td>
                                </tr>
                                <script>
                                    $("<?="#a$i" ?>").click(()=>{
                                        $.ajax({
                                            url:"<?= base_url() ?>products/approveComment",
                                            method:"post",
                                            data:{
                                                id:"<?= $comment["content"] ?>"
                                            },
                                            success:(data)=>{
                                               location.reload()
                                            }
                                        })
                                    })
                                    $("<?="#b$i" ?>").click(()=>{
                                        $.ajax({
                                            url:"<?= base_url() ?>products/deleteComment",
                                            method:"post",
                                            data:{
                                                id:"<?= $comment["content"] ?>"
                                            },
                                            success:(data)=>{
                                               location.reload()
                                            }
                                        })
                                    })
                                </script>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
    </script>
    <!-- END PAGE CONTENT-->