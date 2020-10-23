
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-body">
                        <h5 class="font-strong mb-4">LISTE DES COUPONS</h5>
                        <div class="flexbox mb-4">
                            <div class="flexbox">
                            </div>
							<div class="flexbox">
                                <div class="input-group-icon input-group-icon-left mr-3">
                                    <span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span>
                                    <input class="form-control form-control-rounded form-control-solid" id="key-search" type="text" placeholder="Rechercher ...">
                                </div>
                                <a class="btn btn-rounded btn-primary btn-air" href="<?= base_url() ?>dashboard/ecommerce_add_coupon">Ajouter un coupon</a>
                            </div>	
                        </div>
                        <div class="table-responsive row">
                            <table class="table table-bordered table-hover" id="orders-table">
                                <thead class="thead-default thead-lg">
                                    <tr>
                                        <th>ID</th>
                                        <th>Propriétaire</th>
                                        <th>Code coupon</th>
                                        <th>Nombre d'utilisation</th>
										<th>Réduction</th>
                                        <th>Date d'expiration</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($coupons as $i => $coupon) { ?>
                                        <tr>
                                        <td><?= $coupon["id"] ?></td>
                                        <td><?= $coupon["insta"] ?></td>
                                        <td><?= $coupon["couponsCle"] ?></td>
                                        <td><?= $coupon["used"] ?></td>
										<td><?= $coupon["reduction"] ?></td>
                                        <td><?= $coupon["expiration"] ?></td>
                                        <td>
                                            <a class="text-muted font-16" href="javascript:;" id="<?= "a$i" ?>"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <script>
                                        $("<?= "#a$i" ?>").click(()=>{
                                            $.ajax({
                                                url:"<?= base_url() ?>coupons/deleteCoupons/<?= $coupon["id"]?>",
                                                method:"post",
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
            <!-- END PAGE CONTENT-->
          