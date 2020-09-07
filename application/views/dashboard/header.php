<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Santal Dashboard</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="<?= base_url() ?>dashboard_assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>dashboard_assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>dashboard_assets/vendors/line-awesome/css/line-awesome.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>dashboard_assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <link href="<?= base_url() ?>dashboard_assets/vendors/animate.css/animate.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>dashboard_assets/vendors/toastr/toastr.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>dashboard_assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="<?= base_url() ?>dashboard_assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <link href="<?= base_url() ?>dashboard_assets/vendors/dataTables/datatables.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="<?= base_url() ?>dashboard_assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <script src="<?= base_url() ?>dashboard_assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>dashboard_assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url() ?>dashboard_assets/js/scripts/chartjs_demo.js"></script>
    <script src="<?= base_url() ?>dashboard_assets/vendors/chart.js/dist/Chart.min.js"></script>
    <script src="<?= base_url() ?>dashboard_assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>dashboard_assets/vendors/metisMenu/dist/metisMenu.min.js"></script>
    <script src="<?= base_url() ?>dashboard_assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url() ?>dashboard_assets/vendors/jquery-idletimer/dist/idle-timer.min.js"></script>
    <script src="<?= base_url() ?>dashboard_assets/vendors/toastr/toastr.min.js"></script>
    <script src="<?= base_url() ?>dashboard_assets/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="<?= base_url() ?>dashboard_assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="<?= base_url() ?>dashboard_assets/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <script src="<?= base_url() ?>dashboard_assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="<?= base_url() ?>dashboard_assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?= base_url() ?>dashboard_assets/vendors/dataTables/datatables.min.js"></script>
    <!-- CORE SCRIPTS-->
    <script src="<?= base_url() ?>dashboard_assets/js/app.min.js"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="<?= base_url() ?>dashboard_assets/js/scripts/dashboard_ecommerce.js"></script>




</head>

<body class="fixed-navbar fixed-layout">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a href="<?= base_url() ?>dashboard/dashboard_ecommerce">
                    <span class="brand">Santal</span>
                    <span class="brand-mini">ST</span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <!-- <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler" href="javascript:;">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link search-toggler js-search-toggler"><i class="ti-search"></i>
                            <span>Search here...</span>
                        </a>
                    </li> -->
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR -->
                <ul class="nav navbar-toolbar">
                    <!-- <li class="timeout-toggler">
                        <a class="nav-link toolbar-icon" data-toggle="modal" data-target="#session-dialog" href="javascript:;"><i class="ti-alarm-clock timeout-toggler-icon rel"><span class="notify-signal"></span></i></a>
                    </li>
                    <li class="dropdown dropdown-inbox">
                        <a class="nav-link dropdown-toggle toolbar-icon" data-toggle="dropdown" href="javascript:;"><i class="ti-email"></i>
                            <span class="envelope-badge">7</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <div class="dropdown-arrow"></div>
                            <div class="dropdown-header text-center">
                                <div>
                                    <span class="font-18"><strong>7 New</strong> Messages</span>
                                </div>
                                <a class="text-muted font-13" href="javascript:;">view all</a>
                            </div>
                            <div class="p-3">
                                <div class="media-list media-list-divider scroller" data-height="350px" data-color="#71808f">
                                    <a class="media p-3">
                                        <div class="media-img">
                                            <img class="img-circle" src="<?= base_url() ?>dashboard_assets/img/users/u8.jpg" alt="image" />
                                        </div>
                                        <div class="media-body">
                                            <div class="media-heading">Lynn Weaver<small class="text-muted float-right">Just now</small></div>
                                            <div class="font-13 text-muted">Your proposal interested me.</div>
                                            <div class="font-13 mt-1">
                                                <span class="d-inline-flex align-items-center text-primary"><i class="ti-support mr-2"></i>Support</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="media p-3">
                                        <div class="media-img">
                                            <img class="img-circle" src="<?= base_url() ?>dashboard_assets/img/users/u6.jpg" alt="image" />
                                        </div>
                                        <div class="media-body">
                                            <div class="font-strong">Connor Perez<small class="text-muted float-right">18 mins</small></div>
                                            <div class="font-13 text-muted">Your proposal interested me.</div>
                                            <div class="font-13 mt-1">
                                                <span class="d-inline-flex align-items-center text-success mr-3"><i class="ti-lock mr-2"></i>Security</span>
                                                <span class="d-inline-flex align-items-center text-pink"><i class="ti-credit-card mr-2"></i>Payment</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="media p-3">
                                        <div class="media-img">
                                            <img class="img-circle" src="<?= base_url() ?>dashboard_assets/img/users/u11.jpg" alt="image" />
                                        </div>
                                        <div class="media-body">
                                            <div class="font-strong">Tyrone Carroll<small class="text-muted float-right">42 mins</small></div>
                                            <div class="font-13 text-muted">Your proposal interested me.</div>
                                        </div>
                                    </a>
                                    <a class="media p-3">
                                        <div class="media-img">
                                            <img class="img-circle" src="<?= base_url() ?>dashboard_assets/img/users/u10.jpg" alt="image" />
                                        </div>
                                        <div class="media-body">
                                            <div class="font-strong">Stella Obrien<small class="text-muted float-right">1 hrs</small></div>
                                            <div class="font-13 text-muted">Your proposal interested me.</div>
                                            <div class="font-13 mt-1">
                                                <span class="d-inline-flex align-items-center text-purple"><i class="ti-settings mr-2"></i>Technical</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="media p-3">
                                        <div class="media-img">
                                            <img class="img-circle" src="<?= base_url() ?>dashboard_assets/img/users/u2.jpg" alt="image" />
                                        </div>
                                        <div class="media-body">
                                            <div class="font-strong">Becky Brooks<small class="text-muted float-right">3 hrs</small></div>
                                            <div class="font-13 text-muted">Your proposal interested me.</div>
                                        </div>
                                    </a>
                                    <a class="media p-3">
                                        <div class="media-img">
                                            <img class="img-circle" src="<?= base_url() ?>dashboard_assets/img/users/u5.jpg" alt="image" />
                                        </div>
                                        <div class="media-body">
                                            <div class="font-strong">Bob Gonzalez<small class="text-muted float-right">3 hrs</small></div>
                                            <div class="font-13 text-muted">Your proposal interested me.</div>
                                            <div class="font-13 mt-1">
                                                <span class="d-inline-flex align-items-center text-primary mr-3"><i class="ti-support mr-2"></i>Support</span>
                                                <span class="d-inline-flex align-items-center text-pink"><i class="ti-shopping-cart mr-2"></i>Shopping</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="media p-3">
                                        <div class="media-img">
                                            <img class="img-circle" src="<?= base_url() ?>dashboard_assets/img/users/u9.jpg" alt="image" />
                                        </div>
                                        <div class="media-body">
                                            <div class="font-strong">Tammy Newman<small class="text-muted float-right">3 hrs</small></div>
                                            <div class="font-13 text-muted">Your proposal interested me.</div>
                                            <div class="font-13 mt-1">
                                                <span class="d-inline-flex align-items-center text-primary"><i class="ti-ticket mr-2"></i>Client Support</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown dropdown-notification">
                        <a class="nav-link dropdown-toggle toolbar-icon" data-toggle="dropdown" href="javascript:;"><i class="ti-bell rel"><span class="notify-signal"></span></i></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <div class="dropdown-arrow"></div>
                            <div class="dropdown-header text-center">
                                <div>
                                    <span class="font-18"><strong>14 New</strong> Notifications</span>
                                </div>
                                <a class="text-muted font-13" href="javascript:;">view all</a>
                            </div>
                            <div class="p-3">
                                <ul class="timeline scroller" data-height="320px">
                                    <li class="timeline-item"><i class="ti-check timeline-icon"></i>2 Issue fixed<small class="float-right text-muted ml-2 nowrap">Just now</small></li>
                                    <li class="timeline-item"><i class="ti-announcement timeline-icon"></i>
                                        <span>7 new feedback
                                            <span class="badge badge-warning badge-pill ml-2">important</span>
                                        </span><small class="float-right text-muted">5 mins</small></li>
                                    <li class="timeline-item"><i class="ti-truck timeline-icon"></i>25 new orders sent<small class="float-right text-muted ml-2 nowrap">24 mins</small></li>
                                    <li class="timeline-item"><i class="ti-shopping-cart timeline-icon"></i>12 New orders<small class="float-right text-muted ml-2 nowrap">45 mins</small></li>
                                    <li class="timeline-item"><i class="ti-user timeline-icon"></i>18 new users registered<small class="float-right text-muted ml-2 nowrap">1 hrs</small></li>
                                    <li class="timeline-item"><i class="ti-harddrives timeline-icon"></i>
                                        <span>Server Error
                                            <span class="badge badge-success badge-pill ml-2">resolved</span>
                                        </span><small class="float-right text-muted">2 hrs</small></li>
                                    <li class="timeline-item"><i class="ti-info-alt timeline-icon"></i>
                                        <span>System Warning
                                            <a class="text-purple ml-2">Check</a>
                                        </span><small class="float-right text-muted ml-2 nowrap">12:07</small></li>
                                    <li class="timeline-item"><i class="fa fa-file-excel-o timeline-icon"></i>The invoice is ready<small class="float-right text-muted ml-2 nowrap">12:30</small></li>
                                    <li class="timeline-item"><i class="ti-shopping-cart timeline-icon"></i>5 New Orders<small class="float-right text-muted ml-2 nowrap">13:45</small></li>
                                    <li class="timeline-item"><i class="ti-arrow-circle-up timeline-icon"></i>Production server up<small class="float-right text-muted ml-2 nowrap">1 days ago</small></li>
                                    <li class="timeline-item"><i class="ti-harddrives timeline-icon"></i>Server overloaded 91%<small class="float-right text-muted ml-2 nowrap">2 days ago</small></li>
                                    <li class="timeline-item"><i class="ti-info-alt timeline-icon"></i>Server error<small class="float-right text-muted ml-2 nowrap">2 days ago</small></li>
                                </ul>
                            </div>
                        </div>
                    </li> -->
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <span><?= $this->session->userdata("emailAdmin") ?></span>
                            <img src="<?= base_url() ?>dashboard_assets/img/users/admin-image.png" alt="image" />
                        </a>
                        <div class="dropdown-menu dropdown-arrow dropdown-menu-right admin-dropdown-menu">
                            <div class="dropdown-arrow"></div>
                            <div class="dropdown-header">
                                <div class="admin-avatar">
                                    <img src="<?= base_url() ?>dashboard_assets/img/users/admin-image.png" alt="image" />
                                </div>
                                <div>
                                    <h5 class="font-strong text-white"><?= $this->session->userdata("emailAdmin") ?></h5>
                                    <div>
                                        <span class="admin-badge mr-3"><i class="ti-alarm-clock mr-2"></i></span>
                                        <span class="admin-badge"><i class="ti-lock mr-2"></i>Safe Mode</span>
                                    </div>
                                </div>
                            </div>
                            <div class="admin-menu-features">
                                <a class="admin-features-item" href="<?= base_url() ?>dashboard/ecommerce_customers"><i class="ti-user"></i>
                                    <span>Clients</span>
                                </a>
                                <a class="admin-features-item" href="<?= base_url() ?>dashboard/ecommerce_orders_list"><i class="ti-support"></i>
                                    <span>Commandes</span>
                                </a>
                                <a class="admin-features-item" href="<?= base_url() ?>dashboard/settings"><i class="ti-settings"></i>
                                    <span>SETTINGS</span>
                                </a>
                            </div>
                            <div class="admin-menu-content">
                                <div class="text-muted mb-2">Your Wallet</div>
                                <div><i class="ti-wallet h1 mr-3 text-light"></i>
                                    <span class="h1 text-success"><?= $sum ?><sup>DT</sup></span>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <a class="text-muted" href="javascript:;">Earnings history</a>
                                    <a class="d-flex align-items-center logout">Logout<i class="ti-shift-right ml-2 font-20"></i></a>
                                </div>

                            </div>
                        </div>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <ul class="side-menu metismenu">
                    <li class="active">
                        <a href="<?= base_url() ?>dashboard/dashboard_ecommerce"><i class="sidebar-item-icon ti-home"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <!-- <li class="heading">Clients</li> -->
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon ti-shopping-cart"></i>
                            <span class="nav-label">Produits</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="<?= base_url() ?>dashboard/ecommerce_add_product">Ajouter un produit</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>dashboard/ecommerce_products_list">Liste des produits</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>dashboard/ecommerce_categories_list">Liste des catégories</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>dashboard/ecommerce_products_comments">Liste des commentaires</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon ti-package"></i>
                            <span class="nav-label">Commandes</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="<?= base_url() ?>dashboard/ecommerce_orders_list">Liste des commandes</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon ti-tag"></i>
                            <span class="nav-label">Coupons</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="<?= base_url() ?>dashboard/ecommerce_coupons_list">Liste des coupons</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>dashboard/ecommerce_add_coupon">Ajouter un coupon</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon ti-user"></i>
                            <span class="nav-label">Clients</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="<?= base_url() ?>dashboard/ecommerce_customers">Client list</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>dashboard/ecommerce_testimonials">Témoignages</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>dashboard/statistiques"><i class="sidebar-item-icon ti-bar-chart"></i>
                            <span class="nav-label">Statistiques</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->
        <script>
            $(".logout").click(() => {
                $.ajax({
                    url: "<?= base_url() ?>admin/logoutAdmin",
                    method: "post",
                    success: (data) => {
                        location.assign("<?= base_url() ?>dashboard/login-4")
                    }
                })
            })
        </script>