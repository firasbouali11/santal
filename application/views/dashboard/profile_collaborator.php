<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="d-flex align-items-center mb-5">
            <span class="mr-4 static-badge badge-pink"><i class="ti-shopping-cart-full"></i></span>
            <div>
                <h5 class="font-strong">Collaborateur #<?= $profile["id"] ?></h5>
                <!-- <div class="text-light"><?= $profile["first_name"] . " " . $order["last_name"] ?>, <?= $order["created"] ?>, <?= $order["typePaiement"] ?></div> -->
            </div>
        </div>
        <div class="row">
            <div class="col-xl-7">
                <div class="ibox">
                    <div class="ibox-body">
                        <h5 class="font-strong mb-5">Profil du Collaborateur</h5>
                        <img class="mb-5" src="<?= base_url() ?>assets/img/authors/aa.png" alt="profile-image">
                        <input type="file" name="userfile" id="">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-default thead-lg">
                                <tr>
                                    <th>Coupons</th>
                                    <th>Nombre d'utilisation</th>
                                    <th>Reduction</th>
                                    <th>Somme Totale</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($coupons as $i => $coup) {?>
                                <tr>
                                    <td><?= $coup["couponsCle"] ?></td>
                                    <td><?= $coup["used"] ?></td>
                                    <td><?= $coup["reduction"] ?> %</td>
                                    <td><?= $coup["sum"]?> DT</td>
                                </tr>
                                <?php  } ?>
                            </tbody>
                        </table>
                        <!-- <div>
                            <button class="btn btn-primary">Passer la commande</button>
                        </div> -->
                        <!-- <div class="d-flex justify-content-end">
                            <div class="text-right" style="width:300px;">
                                <div class="row mb-2">
                                    <div class="col-6">Subtotal Price</div>
                                    <div class="col-6">$1265</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6">Discount 5%:</div>
                                    <div class="col-6">-$63.25</div>
                                </div>
                                <div class="row font-strong font-20">
                                    <div class="col-6">Total Price:</div>
                                    <div class="col-6">
                                        <div class="h3 font-strong">$1201.71</div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="ibox">
                    <div class="ibox-body">
                        <h5 class="font-strong mb-4">Informations sur le collaborateur</h5>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Nom & Prénom</div>
                            <div class="col-8 h3 font-strong text-pink mb-0"><?= $profile["name"] ?></div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Lien Facebook</div>
                            <div class="col-8"><?= $profile["lien_fb"] ?></div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Lien Instagram</div>
                            <div class="col-8"><?= $profile["lien_insta"] ?></div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Date de creation</div>
                            <div class="col-8">
                                <span class="badge badge-danger badge-pill"><?= $profile["created"] ?></span>
                            </div>
                        </div>
                        <!-- <div class="row align-items-center">
                            <div class="col-4 text-light">Payment</div>
                            <div class="col-8">
                                <span><?= "fjekzhf" ?></span>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- <div class="ibox">
                    <div class="ibox-body">
                        <h5 class="font-strong mb-4">Buyer Information</h5>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Customer</div>
                            <div class="col-8"><?= "ezfjhzef" ?></div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Address</div>
                            <div class="col-8"><?= "efjekfze" ?></div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Email</div>
                            <div class="col-8"><?= "jezkfhzkejfh" ?></div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4 text-light">Phone</div>
                            <div class="col-8"><?= "fkejzhfkze" ?></div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    
    <!-- END PAGE CONTENT-->