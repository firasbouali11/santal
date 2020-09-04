
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="row mb-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body flexbox-b">
                                <div class="easypie mr-4" data-percent="<?= count($facturations) ?> " data-bar-color="#18C5A9" data-size="80" data-line-width="8">
                                    <span class="easypie-data text-success" style="font-size:28px;"><i class="ti-shopping-cart"></i></span>
                                </div>
                                <div>
                                    <h3 class="font-strong text-success"><?= count($facturations) ?></h3>
                                    <div class="text-muted">ACHATS</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body flexbox-b">
                                <div class="easypie mr-4" data-percent="<?= $sum /100 ?>" data-bar-color="#5c6bc0" data-size="80" data-line-width="8">
                                    <span class="easypie-data text-primary" style="font-size:32px;"><i class="la la-money"></i></span>
                                </div>
                                <div>
                                    <h3 class="font-strong text-primary"><?= $sum ?> DT</h3>
                                    <div class="text-muted">REVENUES</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body flexbox-b">
                                <div class="easypie mr-4" data-percent="<?= count($users)/10 ?>" data-bar-color="#ff4081" data-size="80" data-line-width="8">
                                    <span class="easypie-data text-pink" style="font-size:32px;"><i class="la la-users"></i></span>
                                </div>
                                <div>
                                    <h3 class="font-strong text-pink"><?= count($users) ?></h3>
                                    <div class="text-muted">CLIENTS</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="ibox ibox-fullheight">
                            <div class="ibox-head">
                                <div class="ibox-title">LATEST ORDERS</div>
                                <div class="ibox-tools">
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item"> <i class="ti-pencil"></i>Create</a>
                                        <a class="dropdown-item"> <i class="ti-pencil-alt"></i>Edit</a>
                                        <a class="dropdown-item"> <i class="ti-close"></i>Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <div class="flexbox mb-4">
                                    <!-- <div class="flexbox">
                                        <span class="flexbox mr-3">
                                            <span class="mr-2 text-muted">Paid</span>
                                            <span class="h3 mb-0 text-primary font-strong">310</span>
                                        </span>
                                        <span class="flexbox">
                                            <span class="mr-2 text-muted">Unpaid</span>
                                            <span class="h3 mb-0 text-pink font-strong">105</span>
                                        </span>
                                    </div> -->
                                    <a class="flexbox" href="<?= base_url() ?>dashboard/ecommerce_orders_list">VIEW ALL<i class="ti-arrow-circle-right ml-2 font-18"></i></a>
                                </div>
                                <div class="ibox-fullwidth-block">
                                    <table class="table table-hover">
                                        <thead class="thead-default thead-lg">
                                            <tr>
                                                <th class="pl-4">Order ID</th>
                                                <th>Customer</th>
                                                <th>Amount</th>
                                                
                                                <th class="pr-4" style="width:300px">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($facturations as $i => $facturation){ if( $i > 5) break; ?>
                                            <tr>
                                                <td class="pl-4">
                                                    <a href="ecommerce_order_details.html" target="_blank">#<?= $facturation["id"] ?></a>
                                                </td>
                                                <td><?= $facturation["email"] ?></td>
                                                <td><?= $facturation["prixTotale"] ?></td>
                                                
                                                <td class="pr-4"><?= $facturation["created"] ?></td>
                                            </tr>
                                            <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <div class="ibox ibox-fullheight">
                            <div class="ibox-head">
                                <div class="ibox-title">BEST SELLERS</div>
                                <div class="ibox-tools">
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item"> <i class="ti-pencil"></i>Create</a>
                                        <a class="dropdown-item"> <i class="ti-pencil-alt"></i>Edit</a>
                                        <a class="dropdown-item"> <i class="ti-close"></i>Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <ul class="media-list media-list-divider">
                                    <?php foreach($best_products as $best) { ?>
                                    <li class="media">
                                        <a class="media-img" href="javascript:;">
                                            <img src="<?= base_url() ?>assets/img/products/<?= explode(":",$best->images)[0] ?>" alt="image" height="100" />
                                        </a>
                                        <div class="media-body d-flex">
                                            <div class="flex-1">
                                                <h5 class="media-heading">
                                                    <a href="javascript:;"><?= $best->title ?></a>
                                                </h5>
                                                <div class="h4 text-success"><?= $best->price ?></div>
                                                <p class="font-13 text-light mb-1"><?= $best->description ?></p>
                                            </div>   
                                            <div class="text-right" style="width:100px;">
                                                <h3 class="mb-1 font-strong text-success"><sup>$</sup>7800</h3>
                                                <div class="text-muted">312 sales</div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="ibox ibox-fullheight">
                            <div class="ibox-head">
                                <div class="ibox-title">POPULAR PRODUCTS</div>
                                <div class="ibox-tools">
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item"> <i class="ti-pencil"></i>Create</a>
                                        <a class="dropdown-item"> <i class="ti-pencil-alt"></i>Edit</a>
                                        <a class="dropdown-item"> <i class="ti-close"></i>Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <ul class="media-list media-list-divider">
                                    <?php foreach($popular_products as $popular){ ?>
                                    <li class="media flexbox">
                                        <div>
                                            <div class="media-heading"><?= $popular->title ?></div>
                                            <div class="font-13 text-light"><?= word_limiter($popular->description,4) ?></div>
                                        </div>
                                        <h4 class="font-strong mb-0 ml-3 text-primary">+323</h4>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="ibox ibox-fullheight">
                    <div class="ibox-head">
                        <div class="ibox-title">TOP COUNTRIES SALES</div>
                        <div class="ibox-tools">
                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item"> <i class="ti-pencil"></i>Create</a>
                                <a class="dropdown-item"> <i class="ti-pencil-alt"></i>Edit</a>
                                <a class="dropdown-item"> <i class="ti-close"></i>Remove</a>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <div id="world-map" style="height: 400px;"></div>
                    </div>
                </div> -->
                </div>
        
            <!-- END PAGE CONTENT-->
            
   