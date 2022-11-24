<?php
session_start();
    include("../class/database.php");
    include("../class/book.php");

    if(isset($_POST['book'])){
        $c_name=$_POST['user_name'];
        $phone=$_POST['phone_no'];
        $date=$_POST['date'];

        $book=new Book($c_name,$phone,$date);
        $book->BookNow();
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
                        <a href="./login.php" class="btn btn-outline-light">Login as Admin</a>
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

<!-- Affordable plots section -->
    <div class="card mt-4 elevation-0" style="border-radius: 0; border: 2px solid white">
        <div class="card-header text-center">
                <h2 class="text-success">Affordable Plots for Sale</h2>
                <p class="text-secondary" style="font-family: sans-serif; font-weight:700">
                    Luxury Real Estate offers affordable plots for sale within Luxury Estate with ready title deeds
                </p>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body text-center text-white"
                            style="
                            background-image: url('../images/img/build10.jpg');
                            background-size:cover;
                            background-repeat:no-repeat;
                            height:18rem
                            "
                            >
                            <p>Lorem ipsum dolor sit amet.</p>

                                <div class="projects">
                                            <div class="project-title1">
                                                <h3><span>New</span><span> Project</span></h3>
                                            </div>
                                            <div class="project-title2">
                                                <h5 class="land-size">1 <sup>th</sup> of an acre</h5>
                                                <h5 class="land-desc">Residential Plots in Luxury</h5>
                                            </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <h5 class="text-success text-uppercase">Luxury Hospital - Luxury Market</h5>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:2rem"><span style="color:blueviolet">Ideal for:</span> <span class="text-secondary text-capitalize">Building <span class="text-lowercase">a</span> residential home</span> </p>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:0.5rem"><span style="color:blueviolet">Location:</span> <span class="text-secondary text-capitalize">Luxury market 2.4Km <span class="text-lowercase">off</span> residential home South Luxury Hospital</p>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:0.5rem; padding-bottom:4px;  border-bottom:2px solid grey" class="text-danger">Discounted cash price of 2.98m</p>
                                <a href="" class="btn btn-lg btn-light elevation-2" style="margin-left: 30%;">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body text-center text-white"
                            style="
                            background-image: url('../images/img/build1.jpg');
                            background-size:cover;
                            background-repeat:no-repeat;
                            height:18rem
                            "
                            >
                            <p>Lorem ipsum dolor sit amet.</p>

                                <div class="projects">
                                            <div class="project-title1">
                                                <h3><span>New</span><span> Project</span></h3>
                                            </div>
                                            <div class="project-title2">
                                                <h5 class="land-size">1/5 <sup>th</sup> of an acre</h5>
                                                <h5 class="land-desc">Residential Plots in Luxury</h5>
                                            </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <h5 class="text-success text-uppercase">Luxury Hospital - Luxury Market</h5>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:2rem"><span style="color:blueviolet">Ideal for:</span> <span class="text-secondary text-capitalize">Building <span class="text-lowercase">a</span> residential home</span> </p>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:0.5rem"><span style="color:blueviolet">Location:</span> <span class="text-secondary text-capitalize">Luxury market 2.4Km <span class="text-lowercase">off</span> residential home South Luxury Hospital</p>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:0.5rem; padding-bottom:4px;  border-bottom:2px solid grey" class="text-danger">Discounted cash price of 2.98m</p>
                                <a href="" class="btn btn-lg btn-light elevation-2" style="margin-left: 30%;">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body text-center text-white"
                            style="
                            background-image: url('../images/img/build2.jpg');
                            background-size:cover;
                            background-repeat:no-repeat;
                            height:18rem
                            "
                            >
                            <p>Lorem ipsum dolor sit amet.</p>

                                <div class="projects">
                                            <div class="project-title1">
                                                <h3><span>New</span><span> Project</span></h3>
                                            </div>
                                            <div class="project-title2">
                                                <h5 class="land-size">8 <sup>th</sup> of an acre</h5>
                                                <h5 class="land-desc">Residential Plots in Luxury</h5>
                                            </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <h5 class="text-success text-uppercase">Luxury Hospital - Luxury Market</h5>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:2rem"><span style="color:blueviolet">Ideal for:</span> <span class="text-secondary text-capitalize">Building <span class="text-lowercase">a</span> residential home</span> </p>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:0.5rem"><span style="color:blueviolet">Location:</span> <span class="text-secondary text-capitalize">Luxury market 2.4Km <span class="text-lowercase">off</span> residential home South Luxury Hospital</p>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:0.5rem; padding-bottom:4px;  border-bottom:2px solid grey" class="text-danger">Discounted cash price of 2.98m</p>
                                <a href="" class="btn btn-lg btn-light elevation-2" style="margin-left: 30%;">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3 text-center">
                        <a href="#" class="btn-lg btn-white elevation-2">View More Projects <i class="fas fa-arrow-circle-right ml-3"></i></a>
                    </div>
                    </div>
                </div>
            </div>
    </div>
<!-- Book a site visit -->
<div class="card mt-4 elevation-0" style="border-radius: 0; border: 2px solid white; background-color:lightcyan">
        <div class="row p-4">
            <div class="col-12 text-center text-indigo mb-4">
                    <h4 class="pb-2" style="letter-spacing:2px; font-size:3rem; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-weight:bold">Book a free and safe site visit</h4>
                    <h2 class="text-success">
                        <?php
                            if(isset($_SESSION['book']))
                            {
                                echo $_SESSION['book'];
                                session_unset();
                            }
                        ?>
                    </h2>
            </div>
            <div class="col-12 px-4 mx-4">
            <form method="POST">
                <div class="card-body">
                  <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label class="text-secondary">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded-4" name="user_name" id="exampleInputEmail1" placeholder="Enter Name">
                        </div>    
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label class="text-secondary">Phone Number <span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded-4" name="phone_no" id="exampleInputEmail1" placeholder="Enter Phone Number">
                        </div>    
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label class="text-secondary">Date To Visit <span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded-4" name="date" id="exampleInputEmail1" placeholder="Enter Date To Visit">
                        </div>    
                    </div>
                    <div class="col-3"></div>
                    <div class="col-3">
                        <div class="form-group ">
                            <input type="submit" class="btn bg-indigo px-4 w-100 text-uppercase tet-bold text-lg" name="book" id="exampleInputEmail1" value="Book">
                        </div>    
                    </div>
                  </div>
    
              </form>
            </div>
        </div>
</div>

    <!-- Past Projects -->
    <div class="card elevation-0" style="border-radius: 0; margin-top:10%">
        <div class="row" style="padding: 2rem  6rem;">
            <div class="col-12 text-center" style="margin-bottom: 5%;">
                    <h1 class="text-purple text-bold">
                        Past Projects
                    </h1>
            </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-body text-center text-white"
                            style="
                            background-image: url('../images/img/land3.jpg');
                            background-size:cover;
                            background-repeat:no-repeat;
                            height:18rem
                            "
                            >
                            <div class="barn">
                                <h2 class="text-white text-uppercase">sold out</h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet.</p>

                                <div class="projects">
                                            <div class="project-title1" style="margin-top: -55px;">
                                                <h3><span>New</span><span> Project</span></h3>
                                            </div>
                                            <div class="project-title2" style="margin-top: -55px;">
                                                <h5 class="land-size">1/8 <sup>th</sup> of an acre</h5>
                                                <h5 class="land-desc">Residential Plots in Luxury</h5>
                                            </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <h5 class="text-success text-uppercase">Luxury Hospital - Luxury Market</h5>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:2rem"><span style="color:blueviolet">Ideal for:</span> <span class="text-secondary text-capitalize">Building <span class="text-lowercase">a</span> residential home</span> </p>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:0.5rem"><span style="color:blueviolet">Location:</span> <span class="text-secondary text-capitalize">Luxury market 2.4Km <span class="text-lowercase">off</span> residential home South Luxury Hospital</p>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:0.5rem; padding-bottom:4px;  border-bottom:2px solid grey" class="text-danger">Discounted cash price of 2.98m</p>
                                <a href="" class="btn btn-lg btn-light elevation-2" style="margin-left: 30%;">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card card-co">
                            <div class="card-body text-center text-white"
                            style="
                            background-image: url('../images/img/land4.jpg');
                            background-size:cover;
                            background-repeat:no-repeat;
                            height:18rem
                            "
                            >
                            <div class="barn">
                                <h2 class="text-white text-uppercase">sold out</h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet.</p>

                                <div class="projects">
                                            <div class="project-title1" style="margin-top: -55px;">
                                                <h3><span>New</span><span> Project</span></h3>
                                            </div>
                                            <div class="project-title2" style="margin-top: -55px;">
                                                <h5 class="land-size">1/8 <sup>th</sup> of an acre</h5>
                                                <h5 class="land-desc">Residential Plots in Luxury</h5>
                                            </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <h5 class="text-success text-uppercase">Luxury Hospital - Luxury Market</h5>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:2rem"><span style="color:blueviolet">Ideal for:</span> <span class="text-secondary text-capitalize">Building <span class="text-lowercase">a</span> residential home</span> </p>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:0.5rem"><span style="color:blueviolet">Location:</span> <span class="text-secondary text-capitalize">Luxury market 2.4Km <span class="text-lowercase">off</span> residential home South Luxury Hospital</p>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:0.5rem; padding-bottom:4px;  border-bottom:2px solid grey" class="text-danger">Discounted cash price of 2.98m</p>
                                <a href="" class="btn btn-lg btn-light elevation-2" style="margin-left: 30%;">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body text-center text-white"
                            style="
                            background-image: url('../images/img/land5.jpg');
                            background-size:cover;
                            background-repeat:no-repeat;
                            height:18rem
                            "
                            >
                            <div class="barn">
                                <h2 class="text-white text-uppercase">sold out</h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet.</p>

                                <div class="projects">
                                            <div class="project-title1"style="margin-top: -55px;">
                                                <h3><span>New</span><span> Project</span></h3>
                                            </div>
                                            <div class="project-title2"style="margin-top: -55px;">
                                                <h5 class="land-size">1 <sup>th</sup> of an acre</h5>
                                                <h5 class="land-desc">Residential Plots in Luxury</h5>
                                            </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <h5 class="text-success text-uppercase">Luxury Hospital - Luxury Market</h5>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:2rem"><span style="color:blueviolet">Ideal for:</span> <span class="text-secondary text-capitalize">Building <span class="text-lowercase">a</span> residential home</span> </p>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:0.5rem"><span style="color:blueviolet">Location:</span> <span class="text-secondary text-capitalize">Luxury market 2.4Km <span class="text-lowercase">off</span> residential home South Luxury Hospital</p>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:0.5rem; padding-bottom:4px;  border-bottom:2px solid grey" class="text-danger">Discounted cash price of 2.98m</p>
                                <a href="" class="btn btn-lg btn-light elevation-2" style="margin-left: 30%;">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body text-center text-white"
                            style="
                            background-image: url('../images/img/land6.jpeg');
                            background-size:cover;
                            background-repeat:no-repeat;
                            height:18rem
                            "
                            >
                            <div class="barn">
                                <h2 class="text-white text-uppercase">sold out</h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet.</p>

                                <div class="projects">
                                            <div class="project-title1" style="margin-top: -55px;">
                                                <h3><span>New</span><span> Project</span></h3>
                                            </div>
                                            <div class="project-title2" style="margin-top: -55px;">
                                                <h5 class="land-size">1/7 <sup>th</sup> of an acre</h5>
                                                <h5 class="land-desc">Residential Plots in Luxury</h5>
                                            </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <h5 class="text-success text-uppercase">Luxury Hospital - Luxury Market</h5>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:2rem"><span style="color:blueviolet">Ideal for:</span> <span class="text-secondary text-capitalize">Building <span class="text-lowercase">a</span> residential home</span> </p>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:0.5rem"><span style="color:blueviolet">Location:</span> <span class="text-secondary text-capitalize">Luxury market 2.4Km <span class="text-lowercase">off</span> residential home South Luxury Hospital</p>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:0.5rem; padding-bottom:4px;  border-bottom:2px solid grey" class="text-danger">Discounted cash price of 2.98m</p>
                                <a href="" class="btn btn-lg btn-light elevation-2" style="margin-left: 30%;">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body text-center text-white"
                            style="
                            background-image: url('../images/img/land7.jpeg');
                            background-size:cover;
                            background-repeat:no-repeat;
                            height:18rem
                            "
                            >
                            <div class="barn">
                                <h2 class="text-white text-uppercase">sold out</h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet.</p>

                                <div class="projects">
                                            <div class="project-title1" style="margin-top: -55px;">
                                                <h3><span>New</span><span> Project</span></h3>
                                            </div>
                                            <div class="project-title2" style="margin-top: -55px;">
                                                <h5 class="land-size">1/3 <sup>th</sup> of an acre</h5>
                                                <h5 class="land-desc">Residential Plots in Luxury</h5>
                                            </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <h5 class="text-success text-uppercase">Luxury Hospital - Luxury Market</h5>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:2rem"><span style="color:blueviolet">Ideal for:</span> <span class="text-secondary text-capitalize">Building <span class="text-lowercase">a</span> residential home</span> </p>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:0.5rem"><span style="color:blueviolet">Location:</span> <span class="text-secondary text-capitalize">Luxury market 2.4Km <span class="text-lowercase">off</span> residential home South Luxury Hospital</p>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:0.5rem; padding-bottom:4px;  border-bottom:2px solid grey" class="text-danger">Discounted cash price of 2.98m</p>
                                <a href="" class="btn btn-lg btn-light elevation-2" style="margin-left: 30%;">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body text-center text-white"
                            style="
                            background-image: url('../images/img/land8.jpeg');
                            background-size:cover;
                            background-repeat:no-repeat;
                            height:18rem
                            "
                            >
                            <div class="barn">
                                <h2 class="text-white text-uppercase">sold out</h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet.</p>

                                <div class="projects">
                                            <div class="project-title1" style="margin-top: -55px;">
                                                <h3><span>New</span><span> Project</span></h3>
                                            </div>
                                            <div class="project-title2" style="margin-top: -55px;">
                                                <h5 class="land-size">2 <sup>th</sup> of an acre</h5>
                                                <h5 class="land-desc">Residential Plots in Luxury</h5>
                                            </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <h5 class="text-success text-uppercase">Luxury Hospital - Luxury Market</h5>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:2rem"><span style="color:blueviolet">Ideal for:</span> <span class="text-secondary text-capitalize">Building <span class="text-lowercase">a</span> residential home</span> </p>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:0.5rem"><span style="color:blueviolet">Location:</span> <span class="text-secondary text-capitalize">Luxury market 2.4Km <span class="text-lowercase">off</span> residential home South Luxury Hospital</p>
                                <p style="font-size: 1.2rem; font-weight:500; margin-top:0.5rem; padding-bottom:4px;  border-bottom:2px solid grey" class="text-danger">Discounted cash price of 2.98m</p>
                                <a href="" class="btn btn-lg btn-light elevation-2" style="margin-left: 30%;">View Details</a>
                            </div>
                        </div>
                    </div>
            <div class="col-12 text-center mt-4">
                <a href="#" class="btn-lg btn-white elevation-2 rounded">View Past Projects <i class="fas fa-arrow-circle-right ml-3"></i></a>
            </div>
        </div>
    </div>

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