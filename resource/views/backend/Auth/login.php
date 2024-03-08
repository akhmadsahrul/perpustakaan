<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta name="apple-touch-fullscreen" content="yes">
            <meta name="apple-mobile-web-app-status-bar-style" content="default">
            <title>E-Perpus | Auth</title>
            <link rel="icon" type="image/x-icon" href="<?php echo asset_setup("img/logo.png") ?>" />
            <link rel="icon" href="<?php echo asset_setup("img/logo.png") ?>" type="image/png" sizes="16x16">
            <link rel="stylesheet" href="<?php echo asset_setup("vendor/pace/pace.css") ?> ">
            <script src="<?php echo asset_setup("vendor/pace/pace.min.js") ?> "></script>
            <!--vendors-->
            <link rel="stylesheet" type="text/css"
                href="<?php echo asset_setup("vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css") ?>">
            <link rel="stylesheet" type="text/css"
                href="<?php echo asset_setup("vendor/jquery-scrollbar/jquery.scrollbar.css") ?>">
            <link rel="stylesheet" href="<?php echo asset_setup("vendor/select2/css/select2.min.css") ?>">
            <link rel="stylesheet" href="<?php echo asset_setup("vendor/jquery-ui/jquery-ui.min.css") ?>">
            <link rel="stylesheet" href="<?php echo asset_setup("vendor/daterangepicker/daterangepicker.css") ?>">
            <link rel="stylesheet" href="<?php echo asset_setup("vendor/timepicker/bootstrap-timepicker.min.css") ?>">
            <link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,500,600" rel="stylesheet">
            <link rel="stylesheet" href="<?php echo asset_setup("fonts/jost/jost.css") ?>">
            <!--Material Icons-->
            <link rel="stylesheet" type="text/css"
                href="<?php echo asset_setup("fonts/materialdesignicons/materialdesignicons.min.css") ?>">
            <!--Bootstrap + atmos Admin CSS-->
            <link rel="stylesheet" type="text/css" href="<?php echo asset_setup("css/atmos.min.css") ?>">
            <!-- Additional library for page -->
        
        </head>
        <style>
            .bg-login{
                background-image: url("<?= asset("img/undraw_books_l-33-t.svg") ?>");
                width: 50px !important;
            }
            
        </style>
        
        <body class="jumbo-page">
        
        <main class="admin-main  ">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-lg-4  bg-white">
                        <div class="row align-items-center m-h-100">
                            <div class="mx-auto col-md-8">
                                
                                <h3 class="text-center p-b-20 fw-400">Login</h3>

                                <?php

                                    if (@$error_login) {
                                ?>

                                    <div class="alert alert-border-danger  alert-dismissible fade show" role="alert">
                                        <div class="d-flex">
                                            <div class="icon">
                                                <i class="icon mdi mdi-alert-circle-outline"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Error !</strong> <?= $error_login ?>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>

                                    </div>

                                <?php } session_destroy(); ?>

                                <form class="needs-validation" action="<?= controller("Auth/AuthController@login") ?>" method="POST">
                                    <div class="form-row">
                                        <div class="form-group floating-label col-md-12">
                                            <label>Email</label>
                                            <input name="email" type="email" required class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group floating-label col-md-12">
                                            <label>Password</label>
                                            <input name="password" autocomplete="new-password" type="password" required class="form-control" placeholder="Password" >
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block btn-lg">Login</button>

                                </form>
                                <!-- <p class="text-right p-t-10">
                                    Belum punya akun? <a href="<?= url("backend/auth/register") ?>" class="text-underline">Daftar</a>
                                </p> -->
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-md-block bg-cover bg-login">

                    </div>
                </div>
            </div>
        </main>
    
    
    <script src="<?php echo asset_setup("vendor/jquery/jquery.min.js") ?>"></script>
    <script src="<?php echo asset_setup("vendor/jquery-ui/jquery-ui.min.js") ?>"></script>
    <script src="<?php echo asset_setup("vendor/popper/popper.js") ?>"></script>
    <script src="<?php echo asset_setup("vendor/bootstrap/js/bootstrap.min.js") ?>"></script>
    <script src="<?php echo asset_setup("vendor/select2/js/select2.full.min.js") ?>"></script>
    <script src="<?php echo asset_setup("vendor/jquery-scrollbar/jquery.scrollbar.min.js") ?>"></script>
    <script src="<?php echo asset_setup("vendor/listjs/listjs.min.js") ?>"></script>
    <script src="<?php echo asset_setup("vendor/moment/moment.min.js") ?>"></script>
    <script src="<?php echo asset_setup("vendor/daterangepicker/daterangepicker.js") ?>"></script>
    <script src="<?php echo asset_setup("vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js") ?>"></script>
    <script src="<?php echo asset_setup("vendor/bootstrap-notify/bootstrap-notify.min.js") ?>"></script>
    <script src="<?php echo asset_setup("js/atmos.min.js") ?>"></script>
    <script src="<?php echo asset_setup("vendor/jquery.validate/jquery.validate.min.js") ?>"></script>
    <script src="<?php echo asset_setup("js/form-validate.js") ?>"></script>
    <!--page specific scripts for demo-->
    
    </body>
    </html>