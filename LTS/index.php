<?php
session_start();
    include("./class/database.php");
    include("./class/book.php");

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
        include("./partials/index.head.inc.php");
    ?>
    <link rel="stylesheet" href="./partials/style.css">
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
                        <a href="./pages/login.php" class="btn btn-outline-light">Login as Admin</a>
                        <a href="./pages/register.php" class="btn btn-outline-light ml-2">Register as Admin</a>
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
                                <a href="./index.php" class="nav-link text-success text-bold text-uppercase" >Home</a>
                                </li>
                                <li class="nav-item d-none d-sm-inline-block">
                                <a href="./pages/properties.php" class="nav-link text-success text-bold text-uppercase">Properties</a>
                                </li>
                                <li class="nav-item d-none d-sm-inline-block">
                                <a href="./pages/testmonials.php" class="nav-link text-success text-bold text-uppercase">Testimonials</a>
                                </li>
                                <li class="nav-item d-none d-sm-inline-block">
                                <a href="./pages/blogs.php" class="nav-link text-success text-bold text-uppercase">Blogs</a>
                                </li>
                                <li class="nav-item d-none d-sm-inline-block">
                                <a href="./pages/about.php" class="nav-link text-success text-bold text-uppercase">About us</a>
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
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-body text-center text-white"
                            style="
                            background-image: url('./images/img/build11.jpg');
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
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-body text-center text-white"
                            style="
                            background-image: url('./images/img/buld13.jpg');
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
                                                <h5 class="land-size">3/8 <sup>th</sup> of an acre</h5>
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
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-body text-center text-white"
                            style="
                            background-image: url('./images/img/land1.jpg');
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
                                                <h5 class="land-size">1/4 <sup>th</sup> of an acre</h5>
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
<!-- Customers -->
    <div class="card mt-4 elevation-0" style="border-radius: 0; border: 2px solid white; background-color:lightcyan">
        <div class="row p-4">
            <div class="col-12 text-center text-success mb-4">
                    <h4 class="pb-2" style="letter-spacing:2px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Your ideal Real Estate Customers</h4>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-purple text-bold">Name: <span class="text-lg text-red">Kerry Mwai</span></h4>
                    </div>
                    <div class="card-body" 
                    style="background-image: url('./images/img/person1.jpg');
                            background-size:cover;
                            background-repeat:no-repeat;
                            height:18rem">
                           <div class="d-flex">
                                <div style="width: 60px; height:60px; border-radius: 50%; background-color:white">
                                        <p class="mt-3 text-success text-sm text-uppercase p-1">Luxury</p>
                                </div>
                                <p class="text-white mt-3 ml-2"> Why you should come ...</p>
                           </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-dark">Name: <span class="text-lg text-green">Alicia Jerry</span></h4>
                    </div>
                    <div class="card-body" 
                    style="background-image: url('./images/img/person2.jpg');
                            background-size:cover;
                            background-repeat:no-repeat;
                            height:18rem">
                            <div class="d-flex">
                                <div style="width: 60px; height:60px; border-radius: 50%; background-color:white">
                                        <p class="mt-3 text-success text-sm text-uppercase p-1">Luxury</p>
                                </div>
                                <p class="text-black mt-3 ml-2"> It is such an amazing offer for you ...</p>
                            </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-primary">Name: <span class="text-lg text-warning">Bulfard John</span></h4>
                    </div>
                    <div class="card-body" 
                    style="background-image: url('./images/img/person5.jpg');
                            background-size:cover;
                            background-repeat:no-repeat;
                            height:18rem">
                            <div class="d-flex">
                                <div style="width: 60px; height:60px; border-radius: 50%; background-color:white">
                                        <p class="mt-3 text-success text-sm text-uppercase p-1">Luxury</p>
                                </div>
                                <p class="text-white mt-3 ml-2"> We value you so come ...</p>
                            </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-secondary text-bold">Name: <span class="text-lg text-orange">Dan Daniel</span></h4>
                    </div>
                    <div class="card-body" 
                    style="background-image: url('./images/img/profile6.jpeg');
                            background-size:cover;
                            background-repeat:no-repeat;
                            height:18rem">
                            <div class="d-flex">
                                <div style="width: 60px; height:60px; border-radius: 50%; background-color:white">
                                        <p class="mt-3 text-success text-sm text-uppercase p-1">Luxury</p>
                                </div>
                                <p class="text-secondary mt-3 ml-2"> Why you should come ...</p>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-pink">Name: <span class="text-lg text-warning">Dennis Alcandthario</span></h4>
                    </div>
                    <div class="card-body" 
                    style="background-image: url('./images/img/person.jpg');
                            background-size:cover;
                            background-repeat:no-repeat;
                            height:18rem">
                            <div class="d-flex">
                                <div style="width: 60px; height:60px; border-radius: 50%; background-color:white">
                                        <p class="mt-3 text-success text-sm text-uppercase p-1">Luxury</p>
                                </div>
                                <p class="text-white mt-3 ml-2"> Only for you ...</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Invest Information -->
    <div class="card elevation-0" style="border-radius: 0; margin-top:10%">
        <div class="row" style="padding: 2rem  6rem;">
            <div class="col-12 text-center" style="margin-bottom: 5%;">
                    <h5 class="text-success">
                        Invest in Affordable and Genuine Land from an Award-winning Real Estate Company in Kenya
                    </h5>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card elevation-2">
                    <div class="card-body p-1" style="height: 24rem;">
                        <img src="./images/img/tr5.jpeg" alt="price" class="mb-4 h-75" style="position:relative; width: 100%;">
                        <p class="text-secondary text-bold">Most Transparent Land Selling Company (Top Score Brand) 2021</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card elevation-2">
                    <div class="card-body p-1" style="height: 24rem;">
                        <img src="./images/img/tr6.jpeg" alt="price" class="mb-4 h-75" style="position:relative; width: 100%;">
                        <p class="text-secondary text-bold">Best Value added Land Selling Company - 2021</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card elevation-2">
                    <div class="card-body p-1" style="height: 24rem;">
                        <img src="./images/img/trophiy3.jpeg" alt="price" class="mb-4 h-75" style="position:relative; width: 100%;">
                        <p class="text-secondary text-bold">Most Preferred Land Selling Company - 2020</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card elevation-2">
                    <div class="card-body p-1" style="height: 24rem;">
                        <img src="./images/img/trophy1.jpg" alt="price" class="mb-4 h-75" style="position:relative; width: 100%;">
                        <p class="text-secondary text-bold">Best Land Company in the use of Tech Solution - 2019</p>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center mt-4">
                <a href="#" class="btn-lg btn-white elevation-2 rounded">All Awards <i class="fas fa-arrow-circle-right ml-3"></i></a>
            </div>
        </div>
    </div>
    <!-- Testmonials -->
    <div class="card card2">
                      <!-- /.card-header -->
            <div class="card-body text-center">
            <h4 class="mb-2 pb-0 text-white" style="font-size: 3rem; font-weight:500">Client Testimonials</h4>
                <div id="carouselExampleIndicators" class="carousel slide mt-4" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="col-12 text-white text-center mt-4">
                            <p class="text-white" style="font-style: italic; font-size:1.5rem">I must say that you services are excellen... Above all you are genuine... Luxury is the best way to go...</p>
                        </div>
                        <div class="col-12 text-center person mt-0">
                            <img src="./images/img/person.jpg" alt="">
                            <h5 class="text-white">Phillip Core</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-12 text-white text-center mt-4">
                            <p class="text-white" style="font-style: italic; font-size:1.5rem">I must say that you services are excellen... Above all you are genuine... Luxury is the best way to go...</p>
                        </div>
                        <div class="col-12 text-center person mt-0">
                            <img src="./images/img/person1.jpg" alt="">
                            <h5 class="text-white">Erik Madson</h5>
                        </div>
                    </div>
                    <div class="carousel-item last-it">
                        <div class="col-12 text-white text-center mt-4">
                            <p class="text-white" style="font-style: italic; font-size:1.5rem">I must say that you services are excellen... Above all you are genuine... Luxury is the best way to go...</p>
                        </div>
                        <div class="col-12 text-center person mt-0">
                            <img src="./images/img/person2.jpg" alt="">
                            <h5 class="text-white">Jenifer Crossing</h5>
                        </div>
                    </div>
                  </div>
                    <!-- <ol class="carousel-indicators" style="position:relative; margin-top:100px">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol> -->
                  <a class="carousel-control-prev" style="margin-left: -170px;" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-left text-white" style="font-size: 2rem;"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" style="margin-right: -170px;" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-right" style="font-size: 2rem;"></i>
                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <!-- /.card-body -->
    </div>
<!-- Book the site for visit -->
    <div class="card mt-4">
        <div class="card-body">
            <div class="col-12 text-center">
                    <h4 class="text-success mb-4">Book a Free Site Visit</h4>
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
        <form class="book_form" method="POST">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                              <label class="text-secondary">Name <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" name="user_name" placeholder="Enter your name" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                              <label class="text-secondary">Phone number <span class="text-danger">*</span></label>
                              <input type="tel" class="form-control" name="phone_no"  placeholder="Phone number">
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="form-group">
                              <label class="text-secondary">Date To Visit <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" name="date"  placeholder="Date to visit">
                            </div>
                        </div>

                        <div class="col-5">
                            <div class="form-group">
                              <input type="submit" class="form-control btn btn-danger" value="BOOK NOW !" name="book" style="margin-top: 9%;">
                            </div>
                        </div>
                    </div>
                </div>
              </form>
        </div>
    </div>
<!-- Statistics -->
    <div class="card mt-4">
        <div class="card-bdy">
            <div class="row bg-black">
                <div class="col-12 text-center stati">
                    <h1 class="text-white mt-4 pt-3" style="font-weight:800">Current Statistics</h1>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center text-white stat"
                    style="background-image:url('./images/sky2.jpg');  background-size:cover; background-repeat:no-repeat;">
                    <div class="chil">
                        <h2 class="text-bold text-white" style="font-size: 4rem; ">15</h2>
                        <h4>Years of Experience</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center stat"
                    style="background-image:url('./images/sky1.jpg'); background-size:cover; background-repeat:no-repeat;">
                    <div class="chil text-white">
                        <h2 class="text-bold" style="font-size: 4rem;">120</h2>
                        <h4>Projects</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center stat"
                    style="background-image:url('./images/sky3.jpg');  background-size:cover; background-repeat:no-repeat;">
                    <div class="chil text-white">
                        <h2 class="text-bold" style="font-size: 4rem;">22, 154</h2>
                        <h4>Happy Clients</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center stat"
                    style="background-image:url('./images/sky4.jpg');  background-size:cover; background-repeat:no-repeat;">
                    <div class="chil text-white">
                        <h2 class="text-bold" style="font-size: 4rem;">12, 345</h2>
                        <h4>Title Deeds Awarded</h4>
                    </div>
                </div>
            </div>
<!-- Latest blog post -->
        <div class="container-fluid">
           <div class="row mt-4 p-4">
                    <div class="col-12 text-center text-bold text-success" style="margin-top: 6rem; margin-bottom:3rem">
                        <h3 style="font-size:3rem">Latest Blogs Post</h3>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card elevation-2">
                            <div class="card-body text-center text-white"
                            style="
                            background-image: url('./images/sky2.jpg');
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
                                                <h5 class="land-size">1/8 <sup>th</sup> of an acre</h5>
                                                <h5 class="land-desc">Residential Plots in Luxury</h5>
                                            </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                               <h4 class="text-primary">
                                   Fast Developing and Best Place to Invest Around Luxury - Luxury Town
                               </h4>
                               <h6 class="text-secondary mt-4">
                                   To this day I still believe land buying is the same as playing a game on your mobile or computer.
                                   When selecting which game to
                               </h6>

                               <span class="mt-4 text-sm" style="font-weight: 800;"><a href="" class="text-success">Read more >></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card elevation-2">
                            <div class="card-body text-center text-white"
                            style="
                            background-image: url('./images/sky4.jpg');
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
                                                <h5 class="land-size">1/8 <sup>th</sup> of an acre</h5>
                                                <h5 class="land-desc">Residential Plots in Luxury</h5>
                                            </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                               <h4 class="text-primary">
                                   Fast Developing and Best Place to Invest Around Luxury - Luxury Town
                               </h4>
                               <h6 class="text-secondary mt-4">
                                   To this day I still believe land buying is the same as playing a game on your mobile or computer.
                                   When selecting which game to
                               </h6>

                               <span class="mt-4 text-sm" style="font-weight: 800;"><a href="" class="text-success ">Read more >></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card elevation-2">
                            <div class="card-body text-center text-white"
                            style="
                            background-image: url('./images/sky6.jpg');
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
                                                <h5 class="land-size">1/8 <sup>th</sup> of an acre</h5>
                                                <h5 class="land-desc">Residential Plots in Luxury</h5>
                                            </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                               <h4 class="text-primary">
                                   Fast Developing and Best Place to Invest Around Luxury - Luxury Town
                               </h4>
                               <h6 class="text-secondary mt-4">
                                   To this day I still believe land buying is the same as playing a game on your mobile or computer.
                                   When selecting which game to
                               </h6>

                               <span class="mt-4 text-sm" style="font-weight: 800;"><a href="" class="text-success">Read more >></a></span>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

<!-- Frequently asked questions -->
        <div class="row">
            <div class="col-12 text-center text-bold text-success" style="margin-top: 70px;">
                <h4>Frequently Asked Questions About Real Esate</h4>
            </div>
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-bordered table-hover">
                  <tbody>
                    <tr data-widget="expandable-table" aria-expanded="true">
                      <td class="text-bold text-lg text-success">Who owns the land ?<!--<i id="toggle_btn" class="fas fa-minus text-success text-bold ml-3">--></i></td>
                    </tr>
                    <tr class="expandable-body">
                      <td colspan="5">
                        <p>
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                      </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="true">
                        <td class="text-bold text-lg text-success">Why bother with succession ?<!--<i id="toggle_btn" class="fas fa-minus text-success text-bold ml-3">--></i></td>
                    </tr>
                    <tr class="expandable-body">
                      <td colspan="5">
                        <p>
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>
</div>

<div class="row foot">
    <div class="col-lg-3 col-md-6 col-sm-12">
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
    <div class="col-lg-3 col-md-6 col-sm-12">
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
    <div class="col-lg-3 col-md-6 col-sm-12">
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
    <div class="col-lg-3 col-md-6 col-sm-12">
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
<script>
    let tblbtn=document.querySelectorAll("#toggle_btn");
    let clicked=true;

    tblbtn.forEach((btn)=>{
        btn.addEventListener('click',()=>{
        if(clicked==true){
            clicked=false;
            btn.classList.remove('fa-minus');
            btn.classList.add('fa-plus');
        }else{
            clicked=true;
            btn.classList.remove('fa-plus');
            btn.classList.add('fa-minus');
        }
    })
    })
    tblbtn.addEventListener('click',()=>{
        if(clicked==true){
            clicked=false;
            tblbtn.classList.remove('fa-minus');
            tblbtn.classList.add('fa-plus');
        }else{
            clicked=true;
            tblbtn.classList.remove('fa-plus');
            tblbtn.classList.add('fa-minus');
        }
    })
</script>
<?php
require_once('./partials/index.foot.inc.php');
?>
</body>
</html>