<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-body">
                <div class="flexbox mb-5">
                    <h5 class="font-strong">LISTE DES CLIENTS</h5>
                    <div class="flexbox">
                        <div class="input-group-icon input-group-icon-left mr-3">
                            <span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span>
                            <input class="form-control form-control-rounded form-control-solid" id="key-search" type="text" placeholder="Search ...">
                        </div>
                        <!-- <a class="btn btn-rounded btn-primary btn-air" href="ecommerce_add_customer.html">Add Customer</a> -->
                    </div>
                </div>
                <div class="table-responsive row">
                    <table class="table table-bordered table-hover" id="customers-table">
                        <thead class="thead-default thead-lg">
                            <tr>
                                <th>ID</th>
                                <th>Clients</th>
                                <th>Email</th>
                                <th>Achats</th>
                                <th>Telephone</th>
                                <th class="no-sort"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($users as $i => $user) { ?>
                                <tr>
                                <td><?= $user["id"] ?></td>
                                <td>
                                    <img class="img-circle mr-3" src="<?= base_url() ?>dashboard_assets/img/users/u6.jpg" alt="image" width="40" /><?= $user["username"] ?></td>
                                <td><?= $user["email"] ?></td>
                                <?php 
                                    $tot = 0;
                                    foreach($facturations as $facturation){
                                        if($user["id"] == $facturation["idClient"]) $tot += $facturation["prixTotale"];
                                    }
                                ?>
                                <td><?= $tot ?> DT</td>
                                <td><?= $user["phone"] ?></td>
                                <td>
                                    <a class="text-light font-16" href="javascript:;" id="<?= "a$i" ?>"><i class="ti-trash"></i></a>
                                </td>
                            </tr>
                            <script>
                                $("<?= "#a$i" ?>").click(()=>{
                                    $.ajax({
                                        url:"<?= base_url() ?>users/deleteUser",
                                        method:"post",
                                        data:{
                                            id:<?= $user["id"] ?>
                                        },
                                        success:data =>{
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
    <!-- END PAGE CONTENT-->