<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="d-flex align-items-center mb-5">
            <span class="mr-4 static-badge badge-pink"><i class="ti-shopping-cart-full"></i></span>
            <div>
                <h5 class="font-strong">Order #<?= $order["id"] ?></h5>
                <div class="text-light"><?= $order["first_name"] ." ". $order["last_name"] ?>, <?= $order["created"] ?>, <?= $order["typePaiement"] ?></div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-7">
                <div class="ibox">
                    <div class="ibox-body">
                        <h5 class="font-strong mb-5">Products List</h5>
                        <table class="table table-bordered table-hover">
                            <thead class="thead-default thead-lg">
                                <tr>
                                    <th>ID</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>QTY</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($panier as $i=> $prod){
                                    $nbr = explode(":",$order["quantities"]);
                                    if($i == count($panier) -1) break;
                                ?>
                                <tr>
                                    <td><?= $prod["id"] ?></td>
                                    <td>
                                        <img class="mr-3" src="<?= base_url() ?>assets/img/products/<?= explode(":",$prod["images"])[0] ?>" alt="image" width="60" /><?= $prod["title"] ?></td>
                                    <td><?= $prod["price"] ?> DT</td>
                                    <td><?= $nbr[$i] ?></td>
                                    <td><?= (int) $nbr[$i] * $prod["price"] ?> DT</td>
                                </tr>
                                <?php  }?>
                            </tbody>
                        </table>
                        <div>
                            <button class="btn btn-primary">Passer la commande</button>
                        </div>
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
                        <h5 class="font-strong mb-4">Order Information</h5>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Total Price</div>
                            <div class="col-8 h3 font-strong text-pink mb-0"><?= $order["prixTotale"]  ?>DT</div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Date</div>
                            <div class="col-8"><?= $order["created"] ?></div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Delivered</div>
                            <div class="col-8">17.05.2018</div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Status</div>
                            <div class="col-8">
                                <span class="badge badge-danger badge-pill">Not Shipped</span>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4 text-light">Payment</div>
                            <div class="col-8">
                                <span><?= $order["typePaiement"] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ibox">
                    <div class="ibox-body">
                        <h5 class="font-strong mb-4">Buyer Information</h5>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Customer</div>
                            <div class="col-8"><?= $order["first_name"]." ".$order["last_name"] ?></div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Address</div>
                            <div class="col-8"><?= $order["address"] ?></div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Email</div>
                            <div class="col-8"><?= $order["billing_email"] ?></div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4 text-light">Phone</div>
                            <div class="col-8"><?= $order["billing_phone"] ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->
   