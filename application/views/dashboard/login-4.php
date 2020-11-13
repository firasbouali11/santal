<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from admincast.com/adminca/preview/admin_1/html/login-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 May 2020 19:03:05 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Santal - Dashboard - login</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="<?= base_url() ?>dashboard_assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>dashboard_assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>dashboard_assets/vendors/line-awesome/css/line-awesome.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>dashboard_assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <link href="<?= base_url() ?>dashboard_assets/vendors/animate.css/animate.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>dashboard_assets/vendors/toastr/toastr.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>dashboard_assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <!-- THEME STYLES-->
    <link href="<?= base_url() ?>dashboard_assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <style>
        body {
            background-image: url("<?= base_url() ?>dashboard_assets/img/blog/18.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .login-content {
            max-width: 400px;
            margin: 100px auto 50px;
        }

        .auth-head-icon {
            position: relative;
            height: 60px;
            width: 60px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            background-color: #fff;
            color: #ff4081;
            box-shadow: 0 5px 20px #d6dee4;
            border-radius: 50%;
            transform: translateY(-50%);
            z-index: 2;
        }
    </style>
</head>

<body>
    <div class="ibox login-content">
        <div class="text-center">
            <span class="auth-head-icon"><i class="la la-user"></i></span>
        </div>
        <form class="ibox-body form-pink" id="login-form" action="<?= base_url() ?>admin/loginAdmin" method="POST">
            <h4 class="font-strong text-center mb-5">LOG IN</h4>
            <div class="form-group mb-4">
                <input class="form-control form-control-rounded form-control-air form-control-lg" type="text" name="email" placeholder="Email">
            </div>
            <div class="form-group mb-4">
                <input class="form-control form-control-rounded form-control-air form-control-lg" type="password" name="password" placeholder="Password">
            </div>
            <div class="flexbox mb-5">
                <span>
                    <label class="ui-switch ui-switch-pink switch-icon mr-2 mb-0">
                        <input type="checkbox" checked="">
                        <span></span>
                    </label>Remember</span>
                <a class="text-pink" href="forgot_password.html">Forgot password?</a>
            </div>
            <div class="text-center mb-4">
                <button class="btn btn-pink btn-lg btn-rounded btn-fix btn-air" style="width:200px;">LOGIN</button>
            </div>
        </form>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- CORE PLUGINS-->
    <script src="<?= base_url() ?>dashboard_assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>dashboard_assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url() ?>dashboard_assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>dashboard_assets/vendors/metisMenu/dist/metisMenu.min.js"></script>
    <script src="<?= base_url() ?>dashboard_assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url() ?>dashboard_assets/vendors/jquery-idletimer/dist/idle-timer.min.js"></script>
    <script src="<?= base_url() ?>dashboard_assets/vendors/toastr/toastr.min.js"></script>
    <script src="<?= base_url() ?>dashboard_assets/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="<?= base_url() ?>dashboard_assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <!-- CORE SCRIPTS-->
    <script src="<?= base_url() ?>dashboard_assets/js/app.min.js"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script>
        $(function() {
            $('#login-form').validate({
                errorClass: "help-block",
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true
                    }
                },
                highlight: function(e) {
                    $(e).closest(".form-group").addClass("has-error")
                },
                unhighlight: function(e) {
                    $(e).closest(".form-group").removeClass("has-error")
                },
            });
        });
    </script>
</body>


<!-- Mirrored from admincast.com/adminca/preview/admin_1/html/login-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 May 2020 19:03:13 GMT -->
</html>