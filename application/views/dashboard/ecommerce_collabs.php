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
                                <th>Colaborateurs</th>
                                <th>Lien facebook</th>
                                <th>Lien instagram</th>
                                <th>Remarques</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($collabs as $i => $collab) { ?>
                                <tr>
                                    <td><?= $collab["id"] ?></td>
                                    <td><?= $collab["username"] ?></td>
                                    <td>
                                        <?= $collab["lien_fb"] ?>
                                    </td>
                                    <td><?= $collab["lien_insta"] ?></td>
                                    <td><?= $collab["remarque"] ?></td>
                                    <td>
                                        <span class="badge <?= $collab["collab"] == 2 ? "badge-success": "badge-danger" ?> badge-pill"><?= $collab["collab"] == 2 ? "Approuvé" : "Non Approuvé" ?></span>
                                    </td>
                                    <td>

                                        <a class="text-light mr-2 font-16"  id=<?= "aww$i" ?>><i class="ti-heart"></i></a>
                                        <a class="text-light font-16"  id=<?= "bww$i" ?>><i class="ti-trash"></i></a>
                                        <a class="text-muted font-16" href="<?= base_url() ?>dashboard/profile/<?= $collab["id"] ?>" ><i class="la la-cloud-upload"></i></a>
                                    </td>
                                </tr>
                                <script>
                                    $("<?="#aww$i" ?>").click(()=>{
                                        $.ajax({
                                            url:"<?= base_url() ?>coupons/approveCollab/<?= $collab["id"] ?>",
                                            method:"post",
                                            // data:{
                                            //     id:"<?= $collab["id"] ?>"
                                            // },
                                            success:(data)=>{
                                               location.reload()
                                            }
                                        }).always(()=>{
                                            location.reload()
                                        })
                                    })
                                    $("<?="#bww$i" ?>").click(()=>{
                                        $.ajax({
                                            url:"<?= base_url() ?>coupons/deleteCollab/<?= $collab["id"] ?>",
                                            method:"post",
                                            // data:{
                                            //     id:"<?= $collab["id"] ?>"
                                            // },
                                            success:(data)=>{
                                               location.reload()
                                            },
                                            
                                        }).always(()=>{
                                            location.reload()
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