<!DOCTYPE html>
<html dir="ltr">


<!-- Mirrored from jthemes.net/themes/html/orghtml/mendy-admin/html/ltr/authentication-login1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Jul 2023 10:26:25 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" href="<?= base_url('assets/images/favicon.png'); ?>" type="image/x-icon">
    <title>STASR TRAVELS ADMIN PANEL</title>
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/admin/dist/css/style.min.css'); ?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(<?= base_url('assets/admin/assets/images/big/auth-bg.jpg'); ?>) no-repeat center center;">
            <div class="auth-box">
                <div id="loginform">
                    <div class="logo">
                    
                        <h3 class="font-medium m-b-20 m-t-20">Log In <span style="color:#faa61a; margin-right:5px;"><i class="fa fa-plane"></i>STAR</span>TRAVELS</h3>
                    </div>
                    <?php if( $error=$this->session->flashdata('msg')):   ?>
                    <div class="alert alert-dismissible alert-danger text-danger" style="height:50px; padding: 14px 22px;">
                    <button type="button" class="close" data-dismiss="alert" style="padding: 2px 15px; margin-top:12px">&times;
                    </button>
                    <?= $error;  ?>
                    </div>     
                    <?php endif; ?>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal mt-3" id="loginform" method="POST" action="<?= base_url('AdminLogin/check_login') ?>">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Email Address"
                                        aria-label="Email" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password"
                                        aria-label="Password" aria-describedby="basic-addon1" required>
                                </div>
                               
                                <!-- <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                           
                                            <a href="javascript:void(0)" id="to-recover" class=" float-right text-danger"><i
                                                    class="fa fa-lock m-r-5"></i> Forgot pwd?</a>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="form-group text-center">
                                    <div class="col-xs-12 p-b-20 p-t-20">
                                        <button class="btn waves-effect waves-light btn-warning btn-lg btn-block text-white" type="submit">Log In</button>
                                    </div>
                                </div>
                            </form>
                            <div class="text-center">
                                <div class="col-xs-12 p-b-5 p-t-5">
                                    <a href="<?= base_url('Home') ?>">Return User Home Page</a>
                                </div>
                            </div>
                            <div class="text-center text-primary text-dark">
                                <div class="col-xs-12 p-b-5 p-t-5">
                                    Website created by Praduman Kushwaha
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="<?= base_url('assets/admin/assets/libs/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url('assets/admin/assets/libs/popper.js/dist/umd/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $('[data-toggle="tooltip"]').tooltip();
        $(".preloader").fadeOut();
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function () {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
</body>


<!-- Mirrored from jthemes.net/themes/html/orghtml/mendy-admin/html/ltr/authentication-login1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Jul 2023 10:26:25 GMT -->
</html>