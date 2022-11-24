<?php
session_start();
?>
<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>LTS</title>
<?php
include('../partials/pages.head.inc.php');
?>
</head>
<body class='hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed'>
   <?php
      if(isset($_SESSION['permission'])){
        echo "
        <div class='wrapper'>

            <!-- Preloader -->
            <div class='preloader flex-column justify-content-center align-items-center'>
              <img class='animation__wobble' src='../images/img/trophy4.jpeg' alt='AdminLTELogo' height='60' width='60'>
            </div>

            <!-- Navbar -->
            <nav class='main-header navbar navbar-expand navbar-secondary'>
              <!-- Left navbar links -->
              <ul class='navbar-nav'>
                <li class='nav-item'>
                  <a class='nav-link' data-widget='pushmenu' href='#' role='button'><i class='fas fa-bars text-white'></i></a>
                </li>
                <li class='nav-item d-none d-sm-inline-block'>
                  <a href='#' class='nav-link text-white'>Home</a>
                </li>
              </ul>

              <!-- Right navbar links -->
              <ul class='navbar-nav ml-auto'>
                  <a href='./logout.php' class='btn btn-outline-light'>Logout</a>
              </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class='main-sidebar sidebar-dark-warning elevation-4'>
              <!-- Brand Logo -->
              <a href='index3.html' class='brand-link'>
                <img src='../images/img/trophy2.jpg' alt='AdminLTE Logo' class='brand-image img-circle elevation-3' style='opacity: .8'>
                <span class='brand-text font-weight-light'>Luxury</span>
              </a>

              <!-- Sidebar -->
              <div class='sidebar'>
                <!-- Sidebar user panel (optional) -->
                <div class='user-panel mt-3 pb-3 mb-3 d-flex'>
                  <div class='image'>
                    <img src='../images/img/person.jpg' class='img-circle elevation-2' alt='User Image'>
                  </div>
                  <div class='info'>
                    <a href='#' class='d-block'>$_SESSION[permission]</a>
                  </div>
                </div>


                <!-- Sidebar Menu -->
                <nav class='mt-2'>
                  <ul class='nav nav-pills nav-sidebar flex-column' data-widget='treeview' role='menu' data-accordion='false'>
                    <!-- Add icons to the links using the .nav-icon class-->
                    <li class='nav-item'>
                      <a href='#' class='nav-link'>
                        <i class='nav-icon fas fa-circle'></i>
                        <p>
                          Manage Plots
                          <i class='right fas fa-angle-left'></i>
                        </p>
                      </a>
                      <ul class='nav nav-treeview'>
                        <li class='nav-item'>
                          <a href='#' class='nav-link'>
                            <i class='far fa-circle nav-icon'></i>
                            <p>Add Plot</p>
                          </a>
                        </li>
                        <li class='nav-item'>
                          <a href='#' class='nav-link'>
                            <i class='far fa-circle nav-icon'></i>
                            <p>Add Building</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </nav>
                <!-- /.sidebar-menu -->
              </div>
              <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class='content-wrapper'>
              <!-- Content Header (Page header) -->
              <div class='content-header'>
                <div class='container-fluid'>
                  <div class='row mb-2'>
                    <div class='col-sm-6'>
                      <h1 class='m-0'>Admin Panel</h1>
                    </div><!-- /.col -->
                    <div class='col-sm-6'>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.container-fluid -->
              </div>
              <!-- /.content-header -->

              <!-- Main content -->
              <section class='content'>
                <div class='container-fluid'>
                  <!-- Info boxes -->
                  <div class='row'>
                    <div class='col-12 col-sm-6 col-md-3'>
                      <div class='info-box'>
                        <span class='info-box-icon bg-info elevation-1'><i class='fas fa-cog'></i></span>

                        <div class='info-box-content'>
                          <span class='info-box-text'>Undelivered Services</span>
                          <span class='info-box-number'>
                            10
                            <small>%</small>
                          </span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class='col-12 col-sm-6 col-md-3'>
                      <div class='info-box mb-3'>
                        <span class='info-box-icon bg-danger elevation-1'><i class='fas fa-thumbs-up'></i></span>

                        <div class='info-box-content'>
                          <span class='info-box-text'>Likes</span>
                          <span class='info-box-number'>41,410</span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class='clearfix hidden-md-up'></div>

                    <div class='col-12 col-sm-6 col-md-3'>
                      <div class='info-box mb-3'>
                        <span class='info-box-icon bg-success elevation-1'><i class='fas fa-shopping-cart'></i></span>

                        <div class='info-box-content'>
                          <span class='info-box-text'>Sales</span>
                          <span class='info-box-number'>760</span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class='col-12 col-sm-6 col-md-3'>
                      <div class='info-box mb-3'>
                        <span class='info-box-icon bg-warning elevation-1'><i class='fas fa-users'></i></span>

                        <div class='info-box-content'>
                          <span class='info-box-text'>New Members</span>
                          <span class='info-box-number'>2,000</span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->

                  <div class='row'>
                    <div class='col-md-12'>
                      <div class='card'>
                        <div class='card-header'>
                          <h5 class='card-title'>Annual 
                          Report</h5>
                        </div>
                        <!-- /.card-header -->
                        <div class='card-body'>
                          <div class='row'>
                            <div class='col-md-8'>
                              <p class='text-center'>
                                <strong>Sales: 2 <sup>nd</sup> Jan, 2019 - 4<sup>th</sup> , 2020</strong>
                              </p>

                              <div class='chart'>
                                <!-- Sales Chart Canvas -->
                                <canvas id='salesChart' height='180' style='height: 180px;'></canvas>
                              </div>
                              <!-- /.chart-responsive -->
                            </div>
                            <!-- /.col -->
                            <div class='col-md-4'>
                              <p class='text-center'>
                                <strong>Goal Completion</strong>
                              </p>

                              <div class='progress-group'>
                                Orders Completed
                                <span class='float-right'><b>160</b>/200</span>
                                <div class='progress progress-sm'>
                                  <div class='progress-bar bg-primary' style='width: 80%'></div>
                                </div>
                              </div>
                              <!-- /.progress-group -->

                              <div class='progress-group'>
                                Complete Purchase
                                <span class='float-right'><b>310</b>/400</span>
                                <div class='progress progress-sm'>
                                  <div class='progress-bar bg-danger' style='width: 75%'></div>
                                </div>
                              </div>

                              <!-- /.progress-group -->
                              <div class='progress-group'>
                                <span class='progress-text'>Visit Premium Page</span>
                                <span class='float-right'><b>480</b>/800</span>
                                <div class='progress progress-sm'>
                                  <div class='progress-bar bg-success' style='width: 60%'></div>
                                </div>
                              </div>

                              <!-- /.progress-group -->
                              <div class='progress-group'>
                                Send Inquiries
                                <span class='float-right'><b>250</b>/500</span>
                                <div class='progress progress-sm'>
                                  <div class='progress-bar bg-warning' style='width: 50%'></div>
                                </div>
                              </div>
                              <!-- /.progress-group -->
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- ./card-body -->
                        <div class='card-footer'>
                          <div class='row'>
                            <div class='col-sm-3 col-6'>
                              <div class='description-block border-right'>
                                <span class='description-percentage text-success'><i class='fas fa-caret-up'></i> 17%</span>
                                <h5 class='description-header'>$35,210.43</h5>
                                <span class='description-text'>TOTAL REVENUE</span>
                              </div>
                              <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class='col-sm-3 col-6'>
                              <div class='description-block border-right'>
                                <span class='description-percentage text-warning'><i class='fas fa-caret-left'></i> 0%</span>
                                <h5 class='description-header'>$10,390.90</h5>
                                <span class='description-text'>TOTAL COST</span>
                              </div>
                              <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class='col-sm-3 col-6'>
                              <div class='description-block border-right'>
                                <span class='description-percentage text-success'><i class='fas fa-caret-up'></i> 20%</span>
                                <h5 class='description-header'>$24,813.53</h5>
                                <span class='description-text'>TOTAL PROFIT</span>
                              </div>
                              <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class='col-sm-3 col-6'>
                              <div class='description-block'>
                                <span class='description-percentage text-danger'><i class='fas fa-caret-down'></i> 18%</span>
                                <h5 class='description-header'>1200</h5>
                                <span class='description-text'>GOAL COMPLETIONS</span>
                              </div>
                              <!-- /.description-block -->
                            </div>
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.card-footer -->
                      </div>
                      <!-- /.card -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div><!--/. container-fluid -->
              </section>
              <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class='control-sidebar control-sidebar-dark'>
              <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            <footer class='main-footer'>
              <strong>Copyright &copy;<a href='#' class='text-dark'>2020-2030 All Rights Reserved</a>.</strong>
            </footer>
          </div>
        ";
      }else{
        header("location:../index.php");
      }
   ?>
<?php
include('../partials/pages.foot.inc.php')
?>
</body>
</html>
