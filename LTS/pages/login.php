<?php
include("../class/database.php");
include("../class/admin.php");
if(isset($_POST['sign_in'])){
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $sign_in=new Admin($email,$pass);
    $sign_in->SignIn();   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LTS</title>
    <?php
        include("../partials/pages.head.inc.php");
    ?>
    <link rel="stylesheet" href="../partials/style.css">
</head>
<body class="layout-navbar-fixed">
    
<div class="wrapper" style="margin-bottom: 15%;">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-white navbar-light m-0" style="margin: 0; padding:0;">
    <!-- Left navbar links -->
    <ul class="navbar-nav" style="width: 100%; margin:0;">
        <div class="card m-0 p-0 elevation-2" style="background:linear-gradient(45deg, rgb(2, 4, 99),rgba(35, 12, 241), rgb(2, 4, 99)); border-radius:0%;; width:100%">
            <div class="card-header">
            <div class="row">
                    <div class="col-3 ml-2 d-block">
                        <h2 class="text-white text-bold text-md"><i class="fas fa-phone mr-1"></i> For Chokoria Plots: <span class="text-warning"> 0795678990</span></h2>
                        <h2 class="text-white text-bold text-md"><i class="fas fa-phone mr-1"></i>Tandale Plots: <span class="text-warning"> 0795678990</span></h2>
                    </div>
                    <div class="col-3 ml-2 d-block">
                        <div class="bg-danger center pl-2 py-2" style="border-radius: 2px;">
                            <a href="#">Book A site Visit to Chokoria Plots</a>
                        </div>
                    </div>
                    <div class="col-2 ml-2 d-block">
                        <div class="bg-danger center pl-2 py-2" style="border-radius: 2px;">
                            <a href="#">Book A site Visit to Tandale Plots</a>
                        </div>
                    </div>
                    <div class="col-3 d-flex align-items-center">
                        <a href="./register.php" class="btn btn-outline-light ml-2">Register as Admin</a>
                    </div>
                </div>
            </div>
        </div>   
    <div class="card m-0 p-0 elevation-4" style="border-radius:0%; width:100%">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-success text-uppercase">
                        luxury
                    </h1>
                    <p class="text-success" style="font-size: 0.54rem; margin-left:10%">__your ideal Real Estate Partner</p>
                </div>
                <div class="col-6 center">
                    <div class="float-right">
                        <nav class="navbar navbar-expand navbar-white">
                        <!-- Left navbar links -->
                            <ul class="navbar-nav">
                                <li class="nav-item d-none d-sm-inline-block">
                                <a href="../index.php" class="nav-link text-success text-bold text-uppercase" >Home</a>
                                </li>
                                <li class="nav-item d-none d-sm-inline-block">
                                <a href="./properties.php" class="nav-link text-success text-bold text-uppercase">Properties</a>
                                </li>
                                <li class="nav-item d-none d-sm-inline-block">
                                <a href="./testmonials.php" class="nav-link text-success text-bold text-uppercase">Testimonials</a>
                                </li>
                                <li class="nav-item d-none d-sm-inline-block">
                                <a href="./blogs.php" class="nav-link text-success text-bold text-uppercase">Blogs</a>
                                </li>
                                <li class="nav-item d-none d-sm-inline-block">
                                <a href="./about.php" class="nav-link text-success text-bold text-uppercase">About us</a>
                                </li>
                            </ul>
                        <!-- Right navbar links -->
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                                    <i class="fas fa-expand-arrows-alt text-secondary"></i>
                                </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    </ul>
  </nav>
</div>

<div class="container">
    <div class="row my-4">
        <div class="col-3 gx-4"></div>
        <div class="col-6 align-items-center justify-content-center">
                <div class="login-box">
        <!-- /.login-logo -->
                    <div class="card card-outline card-primary card-lg">
                        <div class="card-header text-center">
                        <a href="" class="h1"><b>Admin</b></a>
                        </div>
                        <div class="card-body">
                        <p class="login-box-msg">Sign in to start your session</p>

                        <form method="post">
                            <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            </div>
                            <div class="input-group mb-3">
                            <input type="password" name="pass" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block" name="sign_in">Sign In</button>
                            </div>
                            <!-- /.col -->
                            </div>
                        </form>

                        <div class="social-auth-links text-center mt-2 mb-3">
                            <a href="#" class="btn btn-block btn-primary">
                            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                            </a>
                            <a href="#" class="btn btn-block btn-danger">
                            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                            </a>
                        </div>
                        <!-- /.social-auth-links -->

                        <p class="mb-1">
                            <a href="#">I forgot my password</a>
                        </p>
                        <p class="mb-0">
                            <a href="#" class="text-center">Register a new membership</a>
                        </p>
                        </div>
                        <!-- /.card-body -->
                    </div>
        <!-- /.card -->
                </div>
<!-- /.login-box -->
        </div>
        <div class="col-3 gx-4"></div>
    </div>
</div>


<div class="row foot">
    <div class="col-3">
        <div class="card bg-transparent elevation-0">
            <div class="card-header elevation-0">
                <h5 class="text-white text-uppercase mb-0">Quick links</h5>
            </div>
            <div class="card-body">
                <a href="#">
                    <div class="d-flex mb-2">
                        <i class="fas fa-chevron-right text-white"></i>
                        <h6 class="text-white ml-3" style="margin-top: -4px;">Past Projects</h6>
                    </div>
                </a>
               <a href="#">
                    <div class="d-flex mb-2">
                        <i class="fas fa-chevron-right text-white"></i>
                        <h6 class="text-white ml-3" style="margin-top: -4px;">Careers</h6>
                    </div>
               </a>
               <a href="#">
                    <div class="d-flex mb-2">
                        <i class="fas fa-chevron-right text-white"></i>
                        <h6 class="text-white ml-3" style="margin-top: -4px;">Testmonials</h6>
                    </div>
               </a>
                <a href="#">
                    <div class="d-flex mb-2">
                        <i class="fas fa-chevron-right text-white"></i>
                        <h6 class="text-white ml-3" style="margin-top: -4px;">Tips and Advice</h6>
                    </div>
                </a>
                <a href="#">
                    <div class="d-flex mb-2">
                        <i class="fas fa-chevron-right text-white"></i>
                        <h6 class="text-white ml-3" style="margin-top: -4px;">Privacy Policy</h6>
                    </div>
                </a>
                <a href="#">
                    <div class="d-flex mb-2">
                        <i class="fas fa-chevron-right text-white"></i>
                        <h6 class="text-white ml-3" style="margin-top: -4px;">Refund Policy</h6>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card bg-transparent elevation-0">
            <div class="card-header elevation-0">
                <h5 class="text-white text-uppercase mb-0">Plots for sale</h5>
            </div>
            <div class="card-body">
                <div class="d-flex mb-2">
                    <a href="#"><h6 class="text-white ml-0" style="margin-top: -8px;">Plot for sale in Tambarare</h6></a>
                </div>
                <div class="d-flex mb-2">
                    <a href="#"><h6 class="text-white ml-0" style="margin-top: -8px;">Plot for sale in Tairon</h6></a>
                </div>
                <div class="d-flex mb-2">
                    <a href="#"><h6 class="text-white ml-0" style="margin-top: -8px;">Plot for sale in Tandale</h6></a>
                </div>
                <div class="d-flex mb-2">
                    <a href="#"><h6 class="text-white ml-0" style="margin-top: -8px;">Plot for sale in Chokoria</h6></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card bg-transparent elevation-0">
            <div class="card-header elevation-0">
                <h5 class="text-white text-uppercase mb-2">contact information</h5>
                <h5 class="text-white text-capitalize mb-0">Luxury Tambarare branch</h5>
            </div>
            <div class="card-body">
                <div class="d-flex mb-2">
                    <h6 class="text-white ml-0" style="margin-top: -8px;">Tambarare Along the Eastern ByPass, NorthPark Mall, 4<sup>th</sup> floor</h6>
                </div>
                <div class="d-flex mt-4 pt-4">
                    <i class="fas fa-phone mr-2 text-white"></i>
                    <h6 class="text-white ml-2" style="margin-top: -4px;">+2547548976</h6>
                </div>
                <div class="d-flex mt-2">
                    <i class="fab fa-whatsapp mr-2 text-white text-lg"></i>
                    <h6 class="text-white ml-2" style="margin-top: -4px;">+2547548976</h6>
                </div>
                <div class="d-flex mt-2">
                    <i class="far fa-envelope mr-2 text-white"></i>
                    <h6 class="text-white ml-2" style="margin-top: -4px;">sales@luxury.co.ke</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3">
            <div class="card bg-transparent elevation-0">
                <div class="card-header elevation-0">
                    <h5 class="text-white text-uppercase mb-2">contact information</h5>
                    <h5 class="text-white text-capitalize mb-0">Chokoria branch</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex mb-2">
                        <h6 class="text-white ml-0" style="margin-top: -8px;">Chokoria Town Dune Plaza, ground floor, D1</h6>
                    </div>
                    <div class="d-flex mt-4 pt-4">
                        <i class="fas fa-phone mr-2 text-white"></i>
                        <h6 class="text-white ml-2" style="margin-top: -4px;">+2547548912</h6>
                    </div>
                    <div class="d-flex mt-2">
                        <i class="fab fa-whatsapp mr-2 text-white text-lg"></i>
                        <h6 class="text-white ml-2" style="margin-top: -4px;">+2547548912</h6>
                    </div>
                    <div class="d-flex mt-2">
                        <i class="far fa-envelope mr-2 text-white"></i>
                        <h6 class="text-white ml-2" style="margin-top: -4px;">sales@luxury.co.ke</h6>
                    </div>
                </div>
            </div>
    </div>
</div>
<div class="row py-3 px-4 bg-success">
    <div class="col-12 d-flex space-between  text-white foo">
        <div>
            <h6 class="text-capitalize">&copy; 2020-2030 all rights reserved</h6>
        </div>
        <div class="float-right">
            <a href="#"><i class="fab fa-facebook-f bg-white text-primary rounded p-2 text-lg"></i></a>
            <a href="#"><i class="fab fa-google-plus-g bg-white rounded p-2 text-warning text-lg"></i></a>
            <a href="#"><i class="fab fa-instagram bg-white rounded p-2 text-warning text-lg"></i></a>
            <a href="#"><i class="fab fa-twitter bg-white rounded p-2 text-success text-lg"></i></a>
        </div>
    </div>
</div>
<?php
require_once('../partials/pages.foot.inc.php');
?>
</body>
</html>