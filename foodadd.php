<?php 

session_start();

if(!isset($_SESSION['aname']))
{
    header("location:login.php");
}


?>


<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Oct 2020 05:05:31 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Dashboard </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="ahome.php" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/sitelogo.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/sitelogo.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="ahome.php" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/sitelogo.php" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/sitelogo.png" alt="" height="19">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form>

                        
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">
                    
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        

                        

                        

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               
                                <span class="d-none d-xl-inline-block ml-1"><?php  echo $_SESSION['aname'];   ?></span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item text-danger" href="logout.php"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="bx bx-cog bx-spin"></i>
                            </button>
                        </div>
            
                    </div>
                </div>
            </header> <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title">Menu</li>

                    <li>
                        <a href="ahome.php" class="waves-effect">
                            <i class="bx bx-home-circle"></i>
                            <span>Dashboards</span>
                        </a>
                    </li>


                    <li class="menu-title">People</li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                              <i class="bx bxs-user-detail"></i>
                            <span>Manage People</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="Viewuser.php">View All Users</a></li>
                            <li><a href="Viewadm.php">view Admin</a></li>
                            <li><a href="addadmin.php">Add Admin</a></li>
                            <li><a href="modadmin.php">Modify Admin</a></li>
                            
                        </ul>
                    </li>


                    <li class="menu-title">Food</li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                             <i class="bx bx-tone"></i>
                            <span>Food items</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="viewfood.php">View All Food Items</a></li>
                            <li><a href="addfood.php">Add Food Item</a></li>
                            <li><a href="modfood.php">Modify Food Item</a></li>
                            
                        </ul>
                    </li>

                  

                    <li class="menu-title">Diet</li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-tone"></i>
                            <span>Diet Records</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <!-- <li><a href="viewdtype.php">View Diet Types</a></li>
                            <li><a href="adddtype.php">Add Diet Types</a></li>
                            <li><a href="moddtype.php">Modify Diet Types</a></li> -->
                            <li><a href="viewusrdiet.php">View Active User Diet</a></li>
                            <li><a href="bmirecord.php">User's Bmi Record</a></li>
                            <li><a href="caloriesrecord.php">User's Calories record</a></li>
                           
                        </ul>
                    </li>

                    

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-list-ul"></i>
                            <span>Extra</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="viewfeedback.php">View Feedbacks</a></li>
                        <li><a href="viewcontact.php">View Messages</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
<!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Food Items</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Food</a></li>
                                            <li class="breadcrumb-item active">Add Food Items</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Enter Food Details</h4>

                                        <div id="basic-pills-wizard" class="twitter-bs-wizard">
                                            <ul class="twitter-bs-wizard-nav">
                                                <li class="nav-item">
                                                    <a href="#seller-details" class="nav-link" data-toggle="tab">
                                                        <span class="step-number mr-2">01</span>
                                                        Add Food Item
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#company-document" class="nav-link" data-toggle="tab">
                                                        <span class="step-number mr-2">02</span>
                                                        <span>Add Macros</span>
                                                    </a>
                                                </li>
                                                
                                                <li class="nav-item">
                                                    <a href="#bank-detail" class="nav-link" data-toggle="tab">
                                                        <span class="step-number mr-2">03</span>
                                                        Add Minerals
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#confirm-detail" class="nav-link" data-toggle="tab">
                                                        <span class="step-number mr-2">04</span>
                                                        Confirm Detail
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content twitter-bs-wizard-tab-content">
                                                <div class="tab-pane" id="seller-details">
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="basicpill-firstname-input">Name Of Food Item</label>
                                                                    <input type="text" class="form-control" id="name">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                  <div class="form-group">
                                                                      <label>Type Of The Food</label>
                                                                      <select class="custom-select">
                                                                            <option selected>Select the type</option>
                                                                            <option value="Veg">Veg</option>
                                                                            <option value="nonveg">Non-Veg</option>
                                                                            
                                                                      </select>
                                                                  </div>
                                                              </div>
                                                        </div>

                                                        <div class="row">
                                                             <div class="col-lg-6">
                                                                  <div class="form-group">
                                                                      <label>Is The Food Vegan?</label>
                                                                      <select class="custom-select">
                                                                            <option selected>Select Yes/No</option>
                                                                            <option value="1">Yes</option>
                                                                            <option value="0">No</option>
                                                                            
                                                                      </select>
                                                                  </div>
                                                              </div>
                                                            <div class="col-lg-6">
                                                                  <div class="form-group">
                                                                      <label>Select the Catagory Of the Food</label>
                                                                      <select class="custom-select">
                                                                            <option selected>Select the type</option>
                                                                            <option value="1">Milk Products</option>
                                                                            <option value="2">Grains</option>
                                                                            <option value="3">Fruits</option>
                                                                            <option value="4">Vegitable</option>
                                                                            <option value="5">Roots & Tubers</option>
                                                                            <option value="6">Dry-Fruits</option>
                                                                            <option value="7">Animal Meat</option>
                                                                            <option value="8">Marine Fish</option>

                                                                            
                                                                      </select>
                                                                  </div>
                                                              </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label for="basicpill-firstname-input">Calories</label>
                                                                    <input type="Number" class="form-control" id="Calories">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                 <div class="form-group">
                                                                      <label>Popularity of food item</label>
                                                                      <select class="custom-select">
                                                                            <option selected>Select the type</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                      </select>
                                                                  </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane" id="company-document">
                                                  <div>
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="basicpill-pancard-input">Food Id</label>
                                                                    <input type="text" class="form-control" id="basicpill-pancard-input">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="basicpill-vatno-input">Amount of Protine In the item</label>
                                                                    <input type="Number" class="form-control" id="basicpill-vatno-input">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="basicpill-cstno-input">Amount of Carbs In the item</label>
                                                                    <input type="Number" class="form-control" id="basicpill-cstno-input">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="basicpill-servicetax-input">Amount of Fat In the item</label>
                                                                    <input type="Number" class="form-control" id="basicpill-servicetax-input">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="basicpill-companyuin-input">Fiber</label>
                                                                    <input type="Number" class="form-control" id="basicpill-companyuin-input">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                  </div>
                                                </div>
                                                <div class="tab-pane" id="bank-detail">
                                                    <div>
                                                      <form>
                                                          <div class="row">
                                                              <div class="col-lg-3">
                                                                  <div class="form-group">
                                                                      <label for="basicpill-namecard-input">Food Id</label>
                                                                      <input type="text" class="form-control" id="basicpill-namecard-input">
                                                                  </div>
                                                              </div>
  
                                                              <div class="col-lg-3">
                                                                  <div class="form-group">
                                                                      <label for="basicpill-cardno-input">Amount of Megnesium</label>
                                                                      <input type="text" class="form-control" id="basicpill-cardno-input">
                                                                  </div>
                                                              </div>
                                                          
                                                          
                                                              <div class="col-lg-3">
                                                                  <div class="form-group">
                                                                      <label for="basicpill-cardno-input">Amount of iron</label>
                                                                      <input type="text" class="form-control" id="basicpill-cardno-input">
                                                                  </div>
                                                              </div>
                                                           
                                                              <div class="col-lg-3">
                                                                  <div class="form-group">
                                                                      <label for="basicpill-card-verification-input">Amount of Biotin</label>
                                                                      <input type="text" class="form-control" id="basicpill-card-verification-input">
                                                                  </div>
                                                              </div>
                                                               </div>
                                                            <div class="row">
                                                          
                                                              <div class="col-lg-3">
                                                                  <div class="form-group">
                                                                      <label for="basicpill-expiration-input">Amount of Vit-C</label>
                                                                      <input type="text" class="form-control" id="basicpill-expiration-input">
                                                                  </div>
                                                              </div>
                                                              <div class="col-lg-3">
                                                                  <div class="form-group">
                                                                      <label for="basicpill-expiration-input">Amount of Selenium</label>
                                                                      <input type="text" class="form-control" id="basicpill-expiration-input">
                                                                  </div>
                                                              </div>
                                                               <div class="col-lg-3">
                                                                  <div class="form-group">
                                                                      <label for="basicpill-expiration-input">Amount of Omega 3</label>
                                                                      <input type="text" class="form-control" id="basicpill-expiration-input">
                                                                  </div>
                                                              </div>
                                                                <div class="col-lg-3">
                                                                  <div class="form-group">
                                                                      <label for="basicpill-expiration-input">Amount of Vit-D</label>
                                                                      <input type="text" class="form-control" id="basicpill-expiration-input">
                                                                  </div>
                                                              </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                  <div class="form-group">
                                                                      <label for="basicpill-expiration-input">Amount of Vit-B12</label>
                                                                      <input type="text" class="form-control" id="basicpill-expiration-input">
                                                                  </div>
                                                              </div>
                                                              <div class="col-lg-3">
                                                                  <div class="form-group">
                                                                      <label for="basicpill-expiration-input">Amount of Copper</label>
                                                                      <input type="text" class="form-control" id="basicpill-expiration-input">
                                                                  </div>
                                                              </div>
                                                              <div class="col-lg-3">
                                                                  <div class="form-group">
                                                                      <label for="basicpill-expiration-input">Amount of VRiboflavi</label>
                                                                      <input type="text" class="form-control" id="basicpill-expiration-input">
                                                                  </div>
                                                              </div>
                                                              <div class="col-lg-3">
                                                                  <div class="form-group">
                                                                      <label for="basicpill-expiration-input">Amount of Zinc</label>
                                                                      <input type="text" class="form-control" id="basicpill-expiration-input">
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="row">
                                                            <div class="col-lg-3">
                                                                  <div class="form-group">
                                                                      <label for="basicpill-expiration-input">Amount of Calcium</label>
                                                                      <input type="text" class="form-control" id="basicpill-expiration-input">
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </form>
                                                    </div>
                                                  </div>
                                                <div class="tab-pane" id="confirm-detail">
                                                    <div class="row justify-content-center">
                                                        <div class="col-lg-6">
                                                            <div class="text-center">
                                                                <div class="mb-4">
                                                                    <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                                                                </div>
                                                                <div>
                                                                    <h5>Confirm Detail</h5>
                                                                    <p class="text-muted">If several languages coalesce, the grammar of the resulting</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="previous"><a href="#">Previous</a></li>
                                                <li class="next"><a href="#">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skote.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- twitter-bootstrap-wizard js -->
        <script src="assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

        <script src="assets/libs/twitter-bootstrap-wizard/prettify.js"></script>

        <!-- form wizard init -->
        <script src="assets/js/pages/form-wizard.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Oct 2020 05:07:22 GMT -->
</html>
